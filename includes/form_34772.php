<?php	
	if (empty($_POST['name_34772']) && strlen($_POST['name_34772']) == 0 || empty($_POST['email_34772']) && strlen($_POST['email_34772']) == 0 || empty($_POST['message_34772']) && strlen($_POST['message_34772']) == 0)
	{
		return false;
	}
	
	$name_34772 = $_POST['name_34772'];
	$email_34772 = $_POST['email_34772'];
	$message_34772 = $_POST['message_34772'];
	
	$to = 'cryptonephew@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from Crypto Nephew website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_34772: $name_34772 \nEmail_34772: $email_34772 \nMessage_34772: $message_34772 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: cryptonephew@gmail.com\n";
	$headers .= "Reply-To: $email_34772";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>