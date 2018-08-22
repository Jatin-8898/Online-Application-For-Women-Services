<?php
    include_once '../includes_sirs/db_connect.php';
    include_once '../includes_sirs/functions.php';
    sec_session_start();
    /**************************************************************************
    **********************ACCEPTING THE INFORMATION****************************
    **************************************************************************/
    $name_pensioner = $_POST['name_pensioner'];
    $father_pensioner = $_POST['father_pensioner'];
    $sex = $_POST['sex'];
	$nationality = $_POST['nationality'];
	$aadhar_no= $_POST['aadhar_no'];
	$mobno=$_POST['mobno'];
	$resno = $_POST['resno'];
	$offno = $_POST['offno'];
	$email = $_POST['email'];
	$purchase_price = $_POST['purchase_price'];
	$amt= $_POST['amt'];
	$deposit = $_POST['deposit'];
	$cheque = $_POST['cheque'];
	$temp_time = strtotime($_POST['dat']);
    $dat = date('Y-m-d', $temp_time);
	$temp_time1 = strtotime($_POST['drawn']);
    $drawn = date('Y-m-d', $temp_time1);
    $mode = $_POST['mode'];
    $bankname = $_POST['bankname'];
    $branchname= $_POST['branchname'];
    $type = $_POST['type'];
    $address = $_POST['address'];
    $bank_no= $_POST['bank_no'];
	$it = $_POST['it'];
	$pan = $_POST['pan'];	
    $policy = $_POST['policy'];
    $policy_no = $_POST['policy_no'];
	$amt_pension = $_POST['amt_pension'];
    $mode_pension = $_POST['mode_pension'];
    $da = date_create()->format('Y-m-d');
    /**************************************************************************
    ***********************TESTING THE INFORMATION*****************************
    **************************************************************************/
    
    echo "name_pensioner: $name_pensioner<br>father_pensioner: $father_pensioner<br>sex: $sex<br>nationality: $nationality<br>aadhar_no: $aadhar_no<br>mobno: $mobno<br>resno: $resno<br>offno: $offno<br>email: $email<br>purchase_price: $purchase_price<br>amt: $amt<br>deposit: $deposit<br>cheque: $cheque<br>dat: $dat<br>drawn: $drawn<br>mode: $mode<br>bankname: $bankname<br>branchname :$branchname<br>type :$type<br> address: $address <br> bank_no: $bank_no<br> it: $it <br> pan: $pan <br> policy: $policy <br> policy_no: $policy_no <br> amt_pension: $amt_pension <br> mode_pension: $mode_pension <br>da: $da";
    /**************************************************************************
    *******************INSERTING THE INFORMATION IN DB*************************
    **************************************************************************/
    if ($insert_stmt = $mysqli->prepare("INSERT INTO vpby(name_pensioner, father_pensioner, sex, nationality, aadhar_no, mobno, resno, offno, email, purchase_price, amt, deposit, cheque, dat, drawn, mode, bankname, branchname, type, address, bank_no, it, pan, policy, policy_no, amt_pension, mode_pension, da) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) 
    {
        $insert_stmt->bind_param('ssssddddsddddsssssssdsdsddss', $name_pensioner, $father_pensioner, $sex, $nationality, $aadhar_no, $mobno, $resno, $offno, $email, $purchase_price, $amt, $deposit, $cheque, $dat, $drawn, $mode, $bankname, $branchname, $type, $address, $bank_no, $it, $pan, $policy, $policy_no, $amt_pension, $mode_pension, $da);
        // Execute the prepared query.
        if (! $insert_stmt->execute()) 
        {
            echo $insert_stmt->error;
            header('Location: ../error.php?err=Registration failure: MKBY');
        }
        else
        {// mail code
            $to = $email;
            $subject = 'Form Submission for VARISHTHA PENSION BIMA YOJANA';
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
			$message = urlencode("Your form has been successfully processed and your appointment is on 15/04/2018 at 11 am.
            Please Bring the following documents:
            Application Form, Aadhaar Card or PAN Card , Address Proof , Birth Certificate , Medical History ,KYC Documents ");

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