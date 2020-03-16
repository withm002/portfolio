<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $text= $_POST['message'];
    $subject= $_POST['subject'];
	
	$mailTo = "michael_withers@outlook.com";
	$headers = "From: " . $email;
	$txt = "You have received a message from " . $name. ".\n\n".$text;
	
	
mail($mailTo, $subject, $txt, $headers);
	
	header("Location: mail.php?mailsend");

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Your message has been sent.';
    }else{
        echo 'failed';
    }
}

?>