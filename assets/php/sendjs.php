<?php
date_default_timezone_set('Australia/Perth');
$captcha = $_POST['g-recaptcha-response'];
$secretKey = "6Le8iBkTAAAAAAVSoUhsHab6HdVNRF32jzJM_dYI";
$ip = $_SERVER['REMOTE_ADDR'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
$responseKeys = json_decode($response,true);
if(intval($responseKeys["success"]) !== 1) {


echo "<script>alert('Mail was not sent !');</script>";
return false;
	
} else {



$subject = 'Order Inquiry from DIY Soakwells';
$jcitems = " <p><b>Order:</b></p><p> " . $_POST['jcitems']."<p/>" . "<p><b>Total:</b> $" . $_POST['jctotal']."</p>";
$time = date ("h:i A"); 
$date = date ("l, F jS, Y");
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= 'From: orders@DIYSoakwells.com' . "\r\n" .
    'Reply-To: orders@diysoakwells.com.au' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$name = $_POST['name'];
$phone = $_POST['phone'];
$emaile = $_POST['emaile'];
$textbox = $_POST['textbox'];
$address = $_POST['address'];
$to = "orders@diysoakwells.com.au,$emaile";
$text = "<html><body><p>This order was submitted from www.diysoakwells.com.au on \n $date at\n $time</p><p>Thank you for your order inquiry. Deliveries are normally every Friday, we will be in contact shortly to discuss your order and confirm a time.</p><p>In the meantime if you haven't already seen it, you can take a look at www.soakwellcalculator.com.au to confirm the number of soakwells you ordered will be adequate.</p><p>ORDER DETAILS</p><p><b>Message:</b>\n$textbox</p><p><b>Customers Email Address:</b> $emaile</p><p><b>Customers Name:</b> $name </p><p><b>Customers Phone Number:</b> $phone </p><b>Customers Address:</b> $address </p></html></body>";
$body = $text . $jcitems;
mail($to, $subject, $body, $headers);

echo "<script>alert('Mail was sent');</script>";
return false;
}
?>