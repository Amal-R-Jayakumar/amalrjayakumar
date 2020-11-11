<?php
if(isset($_POST['submit'])){
$name = "Name:".$_POST['name']."
";
$email = "Email:".$_POST['email']."
";
$subject = "Subject:".$_POST['subject']."
";
$message = "Message:".$_POST['message']."
";
$file=fopen("contactMe.txt", "a");
fwrite($file, $name);
fwrite($file, $email);
fwrite($file, $subject);
fwrite($file, $message);
fclose($file);
}
header("Location: ./?mailsend");
?>
