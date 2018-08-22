<?php
    include_once '../includes_sirs/db_connect.php';
    include_once '../includes_sirs/functions.php';

    sec_session_start();
    /**************************************************************************
    **********************ACCEPTING THE INFORMATION****************************
    **************************************************************************/
    $sub_center = $_POST['sub_center'];
    $phc = $_POST['phc'];
    $applicant_name = $_POST['applicant_name'];
    $husband = $_POST['husband_name'];
    $address = $_POST['address'];
    $area = $_POST['area'];
    $card = $_POST['card'];
    $bpl_card_no = $_POST['bpl_card_no'];
    $temp_time = strtotime($_POST['date']);
    $date = date('Y-m-d', $temp_time);
    $reg_no = $_POST['registration_no'];
    $age = $_POST['age'];
    $imp = $_POST['imp'];
    $edd = $_POST['edd'];
    $para = $_POST['para'];
    $gravida = $_POST['gravida'];
    $health_inst = $_POST['health_inst'];
    $date_of_application = date_create()->format('Y-m-d');
    /**************************************************************************
    ***********************TESTING THE INFORMATION*****************************
    **************************************************************************/
    
    /*echo "Sub Center : $sub_center<br>PHC: $phc<br>Applicant Name: $applicant_name<br>Husband: $husband<br>Address: $address<br>Area: $area<br>Card: $card<br>BPL Card No: $bpl_card_no<br>Date: $date<br>Reg No: $reg_no<br>Age: $age<br>IMP: $imp<br>EDD: $edd<br>Para: $para<br>Gravida: $gravida<br>Health Inst: $health_inst<br>Date of Application: $date_of_application";*/

    /**************************************************************************
    *******************INSERTING THE INFORMATION IN DB*************************
    **************************************************************************/
    if ($insert_stmt = $mysqli->prepare("INSERT INTO jsy(sub_center, phc, applicant_name, husband_name, address, area, card, bpl_card_no, dor, registration_no, age, imp, edd, para, gravida, health_inst, doa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )")) 
    {
        $insert_stmt->bind_param('sssssssssddssssss', $sub_center, $phc, $applicant_name, $husband, $address, $area, $card, $bpl_card_no, $date, $reg_no, $age, $imp, $edd, $para, $gravida, $health_inst, $date_of_application);
        // Execute the prepared query.
        if (! $insert_stmt->execute()) 
        {
            header('Location: ../error.php?err=Registration failure: JSY');
        }
		 else
        {
            $to = $email;
            $subject = 'Registration for Janani Suraksha Yojana';
            $message = "Thank you for registering with us!\nWe will contact you shortly!";
            $headers= "From: Government Of India \n";
            $headers.= "Reply-to:" . $applicant_name . "\n";
            $headers .= 'MIME-Version: 1.0' . "\r\n";
            $headers = "Content-Type: text/html; charset=utf-8\n".$headers;
            mail($to, $subject, $message, $headers);
            echo "mail sent!";
            $result = mysqli_query($mysqli, "SELECT * FROM jsy where id=(select max(id) from jsy)");
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $id = $row['id'];
            header("Location: ../print_jsy.php?id=$id");
            
              //start of sms code
			//Your authentication key
			$authKey = "142720A4t6aYWFU558b18fc2";

			//Multiple mobiles numbers separated by comma
			$mobileNumber = "8806502484";

			//Sender ID,While using route4 sender id should be 6 characters long.
			$senderId = "MAHGOV";
                 
        //Your message to send, Add URL encoding here.
			$message = urlencode("Your form has been successfully processed and your appointment is on 9/05/2018 at 12 pm.
            Please Bring the following documents
            Application Form, Certificate for any other Scheme from which you get Benefit, Aadhar Card, Proof of permanent Address, Attested Copy of Parents Income Certificate");

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
            $result = mysqli_query($mysqli, "SELECT * FROM jsy where id=(select max(id) from jsy)");
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $id = $row['id'];
            header("Location: ../print_jsy.php?id=$id");
        }
    }
?>