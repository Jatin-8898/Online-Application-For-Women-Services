<?php
    include_once '../includes_sirs/db_connect.php';
    include_once '../includes_sirs/functions.php';
    sec_session_start();
    /**************************************************************************
    **********************ACCEPTING THE INFORMATION****************************
    **************************************************************************/
    $saving = $_POST['saving'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
	$address = $_POST['address'];
	$temp_time = strtotime($_POST['dob']);
    $dob = date('Y-m-d', $temp_time);
    $amountf = $_POST['amountf'];
    $amountw = $_POST['amountw'];
    $mode = $_POST['mode'];
    $namen= $_POST['namen'];
	$temp_time = strtotime($_POST['dobm']);
    $dobm = date('Y-m-d', $temp_time);
    $addressn = $_POST['addressn'];
    $share = $_POST['share'];
    $name_add = $_POST['name_add'];
    $name_a = $_POST['name_a'];
    $aadhar_no = $_POST['aadhar_no'];
    $open_minor = $_POST['open_minor'];
    $namem = $_POST['namem'];
	$namew = $_POST['namew'];
	$standing = $_POST['standing'];
    $da = date_create()->format('Y-m-d');
    /**************************************************************************
    ***********************TESTING THE INFORMATION*****************************
    **************************************************************************/
    
    echo "saving : $saving<br>name: $name<br>fname: $fname<br>address: $address<br>dob: $dob<br>amountf: $amountf<br>amountw: $amountw<br>mode: $mode<br>namen: $namen<br>dobm: $dobm<br>addressn: $addressn<br>share: $share<br>name_add: $name_add<br>name_a: $name_a<br>aadhar_no: $aadhar_no<br>open_minor: $open_minor<br>namem: $namem<br>namew :$namew<br>standing :$standing<br>da: $da";

    /**************************************************************************
    *******************INSERTING THE INFORMATION IN DB*************************
    **************************************************************************/
    if ($insert_stmt = $mysqli->prepare("INSERT INTO mkby(saving, name, fname, address, dob, amountf, amountw, mode, namen, dobm, addressn, share, name_add, name_a, aadhar_no, open_minor, namem, namew, standing, da) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) 
    {
        $insert_stmt->bind_param('sssssdsssssdssdsssss', $saving, $name, $fname, $address, $dob, $amountf, $amountw, $mode, $namen, $dobm, $addressn, $share, $name_add, $name_a, $aadhar_no, $open_minor, $namem, $namew, $standing, $da);
        // Execute the prepared query.
        if (! $insert_stmt->execute()) 
        {
            header('Location: ../error.php?err=Registration failure: MKBY');
        }
		 else
        {
            $to = $email;
            $subject = 'Form Submission for MAJHI KANYA BHAGYASHREE YOJANA';
            $message = "Your form has been successfully uploaded !\nWe will contact you shortly!";
            $headers= "From: Government Of India \n";
            $headers.= "Reply-to:" . $name . "\n";
            $headers .= 'MIME-Version: 1.0' . "\r\n";
            $headers = "Content-Type: text/html; charset=utf-8\n".$headers;
            mail($to, $subject, $message, $headers);
            echo "mail sent!";
            $result = mysqli_query($mysqli, "SELECT * FROM mkby where id=(select max(id) from mkby)");
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $id = $row['id'];
            header("Location: ../print_mkby.php?id=$id");
              //start of sms code
			//Your authentication key
			$authKey = "142720A4t6aYWFU558b18fc2";

			//Multiple mobiles numbers separated by comma
			$mobileNumber = "8806502484";

			//Sender ID,While using route4 sender id should be 6 characters long.
			$senderId = "MAHGOV";
                 
        //Your message to send, Add URL encoding here.
			$message = urlencode("Your form has been successfully processed and your appointment is on 15/05/2018 at 11 am.
            Please Bring the following documents 
            Application Form, Birth Certificate of the Girl Child, Identity Proof or PAN Card &Aadhaar Card of the Parent/Legal Guardian, Residence Proof or Aadhaar Card of the Parent/Legal Guardian");

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
             
          // --End of sms code
            $result = mysqli_query($mysqli, "SELECT * FROM mkby where id=(select max(id) from mkby)");
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $id = $row['id'];
            header("Location: ../print_mkby.php?id=$id");
        }
        }
    
?>