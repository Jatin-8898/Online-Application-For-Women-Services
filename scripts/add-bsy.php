<?php
    include_once '../includes_sirs/db_connect.php';
    include_once '../includes_sirs/functions.php';
    sec_session_start();


    /**************************************************************************
    **********************ACCEPTING THE INFORMATION****************************
    **************************************************************************/
    $applicant_name = $_POST['applicant_name'];
    $husband_name = $_POST['husband_name'];
    $son_of = $_POST['son_of'];
    $address = $_POST['address'];
    $temp_time1 = strtotime($_POST['dob_mother']);
    $dob_mother = date('Y-m-d', $temp_time1);
	$temp_time = strtotime($_POST['dob_child']);
    $dob_child = date('Y-m-d', $temp_time);
    $birth_place= $_POST['birth_place'];
    $no_of_child = $_POST['no_of_child'];
    $caste = $_POST['caste'];
    $amount_figures = $_POST['amount_figures'];
    $amount_words = $_POST['amount_words'];
    $policy_no = $_POST['policy_no'];
    $da = date_create()->format('Y-m-d');
    /**************************************************************************
    ***********************TESTING THE INFORMATION*****************************
    **************************************************************************/
    
/*
echo "applicant_name : $applicant_name<br>husband_name: $husband_name<br>son_of: $son_of<br>address: $address<br>dob_mother: $dob_mother<br>dob_child: $dob_child<br>birth_place: $birth_place<br>no_of_child: $no_of_child<br>caste: $caste<br>amount_figures: $amount_figures<br>amount_words: $amount_words<br>policy no: $policy_no<br>date of Application: $da";

*/



    /**************************************************************************
    *******************INSERTING THE INFORMATION IN DB TABLE*************************
    *************************************************************************/
    if ($insert_stmt = $mysqli->prepare("INSERT INTO bsy(applicant_name, husband_name, son_of, address, dob_mother, dob_child, birth_place, no_of_child, caste,amount_figures, amount_words, policy_no, da) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,? )")) 
    {
        $insert_stmt->bind_param('sssssssisisis', $applicant_name, $husband_name, $son_of, $address, $dob_mother, $dob_child, $birth_place, $no_of_child, $caste, $amount_figures, $amount_words, $policy_no, $da);
        // Execute the prepared query.
        
       if (! $insert_stmt->execute()) 
        {
            echo "SOME ISSUE IN INSERT";
            echo $insert_stmt->error;
            header('Location: ../error.php?err=Registration failure: BSY');  
        }
        else
        {
            echo "INSERTED SUCCESS";
            $to = $email;
            $subject = 'Form Submission for Balika Samridhi Yojana';
            $message = "Your form has been successfully uploaded !\nWe will contact you shortly!";
            $headers= "From: Government Of India \n";
            $headers.= "Reply-to:" . $applicant_name . "\n";
            $headers .= 'MIME-Version: 1.0' . "\r\n";
            $headers = "Content-Type: text/html; charset=utf-8\n".$headers;
            mail($to, $subject, $message, $headers);
            echo "mail sent!";
            $result = mysqli_query($mysqli, "SELECT * FROM bsy where id=(select max(id) from bsy)");
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $id = $row['id'];
            header("Location: ../print_bsy.php?id=$id");
            
        //start of sms code
			//Your authentication key
			$authKey = "142720A4t6aYWFU558b18fc2";

			//Multiple mobiles numbers separated by comma
			$mobileNumber = "8806502484";

			//Sender ID,While using route4 sender id should be 6 characters long.
			$senderId = "MAHGOV";
                 
            //Your message to send, Add URL encoding here.
			$message = urlencode("Your form has been successfully processed and your appointment is on 22/05/2018 at 11.30 am.
            Please Bring the following documents 
            Application Form, Aadhar Card, Domicile of parents of girl child of Maharashtra state, Birth certificate of girl child, Income certificate of parents, Ration card, Bank passbook of girl child");

			//Define rout
			$route = "4";
			//Prepare you post parameters
			$postData = array(
				'authkey' => $authKey,
				'mobiles' => $mobileNumber,
				'message' => $message,
				'sender' => $senderId,
				'route' => $route
			);

			//API URL
			$url="https://control.msg91.com/api/sendhttp.php";

			// init the resource
			$ch = curl_init();
			curl_setopt_array($ch, array(
				CURLOPT_URL => $url,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => $postData
				//,CURLOPT_FOLLOWLOCATION => true
			));


			//Ignore SSL certificate verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


			//get response
			$output = curl_exec($ch);

			//Print error if any
			if(curl_errno($ch))
			{
				echo 'error:' . curl_error($ch);
			}

			curl_close($ch);

			echo $output;   
            
            //--------End of sms code
            
            $result = mysqli_query($mysqli, "SELECT * FROM bsy where id=(select max(id) from bsy)");
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $id = $row['id'];
            header("Location: ../print_bsy.php?id=$id");
        }
        
        }
    
?>