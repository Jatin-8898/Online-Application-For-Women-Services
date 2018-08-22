<?php
    include_once '../includes_sirs/db_connect.php';
    include_once '../includes_sirs/functions.php';
    sec_session_start();


    /**************************************************************************
    **********************ACCEPTING THE INFORMATION****************************
    **************************************************************************/
    $name = $_POST['name'];   
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $complaint_reg = $_POST['complaint_reg'];
    $message = $_POST['message'];

    $da = date_create()->format('Y-m-d');
    /**************************************************************************
    ***********************TESTING THE INFORMATION*****************************
    **************************************************************************/
    
echo "name : $name<br>husband_name: $husband_name<br>son_of: $son_of<br>address: $address<br>dob_mother: $dob_mother<br>dob_child: $dob_child<br>birth_place: $birth_place<br>no_of_child: $no_of_child<br>caste: $caste<br>amount_figures: $amount_figures<br>amount_words: $amount_words<br>policy no: $policy_no<br>date of Application: $da";




   
            //echo "INSERTED SUCCESS";
            $to = $email;
            $subject = 'Regarding the Complaint on Online Application for Women Services';
            $message = "Your complaint has been successfully sent !\nWe will contact you shortly!";
            $headers= "From: MAHAVGOV <" . $email . "> \n";
            $headers.= "Reply-to:" . $email . "\n";
            $headers .= 'MIME-Version: 1.0' . "\r\n";
            $headers = "Content-Type: text/html; charset=utf-8\n".$headers;
            mail($to, $subject, $message, $headers);
            echo "mail sent!";
            $result = mysqli_query($mysqli, "SELECT * FROM bsy where id=(select max(id) from bsy)");
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $id = $row['id'];
            header("Location: ../contact.php");
            
        //start of sms code
			//Your authentication key
			/*$authKey = "142720A4t6aYWFU558b18fc2";

			//Multiple mobiles numbers separated by comma
			//$mobileNumber = "8806502484";

			//Sender ID,While using route4 sender id should be 6 characters long.
			$senderId = "MAHGOV";
                 
            //Your message to send, Add URL encoding here.
			$message = urlencode("Your form has been successfully processed and your appointment is on 10/04/2018 at 10 am.");

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
            header("Location: ../print_bsy.php?id=$id");*/
        
    
?>