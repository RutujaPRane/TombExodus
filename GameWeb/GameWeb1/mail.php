<?php
if (isset($_POST["submit"])) {
//get data from form 
 $connection = mysqli_connect('localhost','root');
 mysqli_select_db($connection,"youdata");

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$contact= $_POST['contact'];
$query="";
$query = "INSERT INTO userinfodata(name,email,message,contact) VALUES ($name,$email,$message,$contact)";
mysqli_query($connection,$query);

echo "Message sent";
}

// $to = "rutujaprane1701@gmail.com";
// $subject = "Mail From Tombo exodus";
// $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message."\r\n Contact Number=". $conatct;
// $headers = "From: noreply@TombExodus.com" . "\r\n" .
// "CC: rutujaprane1701@gmail.com";
// if($email!=NULL){
//     mail($to,$subject,$txt,$headers);
// }
// //redirect
// header("Location:thankyou.html");
?>