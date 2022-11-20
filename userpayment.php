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

function check_input($data)
{
  $data=htmlspecialchars($data);
  $data=strip_tags($data);
  $data=stripslashes($data);
  return $data;
}

$email=$_SESSION['emailid'];
$name=$_SESSION['name'];
$howmany=$_SESSION['howmany'];
$date=$_SESSION['date'];

$cardholdername=check_input($_POST["cardholdername"]);
$cardnumber=check_input($_POST["cardnumber"]);
$expirydate=check_input($_POST["expirydate"]);
$cvc=check_input($_POST["cvc"]);

$sql= $conn->prepare("INSERT INTO user_payment (cardholder_name,card_number,expiry_date,cvc) Values(?,?,?,?)");
$sql->bind_param("ssss",$cardholdername,$cardnumber,$expirydate,$cvc);


$sql1=$conn->prepare("INSERT INTO book_now (email,name,howmany,date) Values(?,?,?,?)");
$sql1->bind_param("ssss",$email,$name,$howmany,$date);

if ($sql->execute()===TRUE && $sql1->execute()===TRUE)
{
  $_SESSION['ticket_booked']='ticket_booked';
  header('Location: index.php');
}
else{
  echo "error in booking the ticket";
}

$sql->close();
$sql1->close();
$conn->close();
?>