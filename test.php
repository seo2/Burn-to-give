<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@burntogive.com";
    $to = "seo2@seo2.cl";
    $subject = "PHP Mail Test script 1";
    $message = "This is a test to check the PHP Mail functionality";
    $headers = "From:" . $from;
    

	$headers = "From: Burn to give <info@burntogive.com>\r\n". 
	           "MIME-Version: 1.0" . "\r\n" . 
	           "Content-type: text/html; charset=UTF-8" . "\r\n";				
	$msg = file_get_contents("ajax/mail/mail.html");    
    
    
    mail($to,$subject,$msg, $headers);
    echo "Test email sent";
?>