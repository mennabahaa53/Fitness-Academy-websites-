<?php
$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$mailheader=  'From:'$email."\r\n";

$recipient="mariamessam098@yahoo.com";

mail($recipient,$message,$mailheader)




?>