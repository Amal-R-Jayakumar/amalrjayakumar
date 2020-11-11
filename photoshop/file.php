<?php
if(isset($_POST['submit'])){
$name = "Name:".$_POST['name']."
";
$email = "Email:".$_POST['email']."
";
$message = "Message:".$_POST['message']."
";
$file=fopen("contactMe.txt", "a");
fwrite($file, $name);
fwrite($file, $email);
fwrite($file, $message);
fclose($file);
}
header("Location: ./?mailsend");
?>
