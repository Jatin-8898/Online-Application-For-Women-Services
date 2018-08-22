<?php
    include_once '../includes_sirs/db_connect.php';
    include_once '../includes_sirs/functions.php';
    sec_session_start();
    /**************************************************************************
    **********************ACCEPTING THE INFORMATION****************************
    **************************************************************************/
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
	$temp_time = strtotime($_POST['dob']);
    $dob = date('Y-m-d', $temp_time);
    $poa = $_POST['poa'];
    $address = $_POST['address'];
    $relation = $_POST['relation'];
    $name = $_POST['name'];
    $aadhar= $_POST['aadhar'];
    $name_a = $_POST['name_a'];
    $aadhar_no = $_POST['aadhar_no'];
    $name_bank = $_POST['name_bank'];
    $bankname = $_POST['bankname'];
    $branchname = $_POST['branchname'];
    $ifsc = $_POST['ifsc'];
    $bank_no = $_POST['bank_no'];
	$status = $_POST['status'];
	$ration_no = $_POST['ration_no'];
    $da = date_create()->format('Y-m-d');
    /**************************************************************************
    ***********************TESTING THE INFORMATION*****************************
    **************************************************************************/
    
   /* echo "fname : $fname<br>mname: $mname<br>lname: $lname<br>dob: $dob<br>poa: $poa<br>address: $address<br>relation: $relation<br>name: $name<br>aadhar: $aadhar<br>name_a: $name_a<br>aadhar_no: $aadhar_no<br>name_bank: $name_bank<br>bankname: $bankname<br>branchname: $branchname<br>ifsc: $ifsc<br>bank_no: $bank_no<br>status: $status<br>ration_no :$ration_no<br>da: $da";
    /**************************************************************************
    *******************INSERTING THE INFORMATION IN DB*************************
    **************************************************************************/
   if ($insert_stmt = $mysqli->prepare("INSERT INTO pmuy(fname, mname, lname, dob, poa, address, relation, name, aadhar, name_a, aadhar_no, name_bank, bankname, branchname, ifsc, bank_no, status, ration_no, da) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) 
   {
        $insert_stmt->bind_param('ssssssssdsdssssdsss',$fname, $mname, $lname, $dob, $poa, $address, $relation, $name, $aadhar, $name_a, $aadhar_no, $name_bank, $bankname, $branchname, $ifsc, $bank_no, $status, $ration_no, $da);
        // Execute the prepared query.
        if (! $insert_stmt->execute()) 
        {
			//echo $insert_stmt->error;
            header('Location: ../error.php?err=Registration failure: PMUY');
        }
		 else
        {
            $to = $email;
            $subject = 'Form Submission for  Pradhan Mantri Ujwal Yojna ';
            $message = "Your form has been successfully uploaded !\nWe will contact you shortly!";
            $headers= "From: Government Of India \n";
            $headers.= "Reply-to:" . $fname . "\n";
            $headers .= 'MIME-Version: 1.0' . "\r\n";
            $headers = "Content-Type: text/html; charset=utf-8\n".$headers;
            mail($to, $subject, $message, $headers);
            echo "mail sent!";

				-

         //start of sms code
			//Your authentication key
			$authKey = "142720A4t6aYWFU558b18fc2";

			//Multiple mobiles numbers separated by comma
			$mobileNumber = "8806502484";

			//Sender ID,While using route4 sender id should be 6 characters long.
			$senderId = "MAHGOV";
                 
        //Your message to send, Add URL encoding here.
			$message = urlencode("Your form has been successfully processed and your appointment is on 10/04/2018 at 10 am.
            Please Bring the following documents
            Application Form, Aadhar Card, Attested Copy of Income Certificate, Ration Card");

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
            $result = mysqli_query($mysqli, "SELECT * FROM pmuy where id=(select max(id) from pmuy)");
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $id = $row['id'];
            header("Location: ../print_pmuy.php?id=$id");
        }
    }
?>