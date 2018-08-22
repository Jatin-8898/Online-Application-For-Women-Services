<?php
    include_once '../includes_sirs/db_connect.php';
    include_once '../includes_sirs/functions.php';
    sec_session_start();
    /**************************************************************************
    **********************ACCEPTING THE INFORMATION****************************
    **************************************************************************/
    $name_acc = $_POST['name_acc'];
	$psa = $_POST['psa'];
    $mob = $_POST['mob'];
    $name_nom = $_POST['name_nom'];
    $sol_id = $_POST['sol_id'];
    $name_gau = $_POST['name_gau'];
    $email = $_POST['email'];
    $temp_time = strtotime($_POST['date']);
    $date = date('Y-m-d', $temp_time);
    $relationship = $_POST['relationship'];
    $address_subscriber = $_POST['address_subscriber'];
    $address_nominee = $_POST['address_nominee'];

/*
    $name_officier = $_POST['name_officier']; 
    $designation_officier= $_POST['designation_officier'];
    $contact_no = $_POST['contact_no'];
    $pho_name = $_POST['pho_name'];
	$name_sub= $_POST['name_sub'];
	$acc_no= $_POST['acc_no'];
	$aadhar_no=$_post['aadhar_no'];
    $da = date_create()->format('Y-m-d');  
*/
    /**************************************************************************
    ***********************TESTING THE INFORMATION*****************************
    **************************************************************************/
    
    echo "name_acc : $name_acc<br>psa: $psa<br>mob: $mob<br>name_nom: $name_nom<br>sol_id: $sol_id<br>name_gau: $name_gau<br>email: $email<br>date: $date<br>relationship: $relationship<br>address_subscriber: $address_subscriber<br>Address_nominee: $address_nominee<br>Date of Application: $date_of_application";

    /**************************************************************************
    *******************INSERTING THE INFORMATION IN DB*************************
    **************************************************************************/
   if ($insert_stmt = $mysqli->prepare("INSERT INTO pmjjby(name_acc, psa, mob, name_nom, sol_id, name_gau, email, date, relationship, address_subscriber, address_nominee, da) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )")) 
    {
        $insert_stmt->bind_param('ssdsssssssss', $name_acc, $psa, $mob, $name_nom, $sol_id, $name_gau, $email, $date, $relationship, $address_subscriber, $address_nominee, $da);
        // Execute the prepared query.
        if (! $insert_stmt->execute()) 
        {
            echo "SOME ISSUE IN INSERT";
            echo $insert_stmt->error;
            header('Location: ../error.php?err=Registration failure: PMJJBY');
        }else
        {// mail code
            $to = $email;
            $subject = 'Form Submission for Pradhan Mantri JeevanJyoti Bima Yojna';
            $message = "Your form has been successfully uploaded !\nWe will contact you shortly!";
            $headers= "From: $name_pensioner <" . $email . "> \n";
            $headers.= "Reply-to:" . $email . "\n";
            $headers .= 'MIME-Version: 1.0' . "\r\n";
            $headers = "Content-Type: text/html; charset=utf-8\n".$headers;
            mail($to, $subject, $message, $headers);
         echo "mail sent!";
    
// end of mail code
            //start of sms code
			//Your authentication key
			$authKey = "142720A4t6aYWFU558b18fc2";

			//Multiple mobiles numbers separated by comma
			$mobileNumber = "8806502484";

			//Sender ID,While using route4 sender id should be 6 characters long.
			$senderId = "MAHGOV";
                 
        //Your message to send, Add URL encoding here.
			$message = urlencode("Your form has been successfully processed and your appointment is on 15/04/2018 at 11 am.");

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

			
            $result = mysqli_query($mysqli, "SELECT * FROM vpby where id=(select max(id) from vpby)");
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $id = $row['id'];
            header("Location: ../print_vbp.php?id=$id");
        }
    }
?>