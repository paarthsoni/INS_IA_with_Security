<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12564538";
$password = "ufnvQf3iGX";
$dbname="sql12564538";

$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

session_start();

$email=$_SESSION['email'];
$name=$_SESSION['name'];
$howmany=$_SESSION['howmany'];
$date=$_SESSION['date'];

$cardholdername=$_POST["cardholdername"];
$cardnumber=$_POST["cardnumber"];
$expirydate=$_POST["expirydate"];
$cvc=$_POST["cvc"];

$sql="INSERT INTO user_payment (cardholder_name,card_number,expiry_date,cvc) Values('$cardholdername','$cardnumber','$expirydate','$cvc')";



$sql1="INSERT INTO book_now (email,name,howmany,date) Values('$email','$name','$howmany','$date')";



if ($conn->query($sql)===TRUE && $conn->query($sql1))
{
  $_SESSION['ticket_booked']='ticket_booked';
  header('Location: index.php');
}
else{
  echo "error in booking the ticket";
}
?>