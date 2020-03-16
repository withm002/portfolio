<?php

$servername = "localhost";
$username = "id12947236_mwd";
$password = "Withm002";
$database = "id12947236_mwd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    } catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    }

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