<?php
session_start();
$servername = "sql12.freemysqlhosting.net";
$username = "sql12564538";
$password = "ufnvQf3iGX";
$dbname="sql12564538";

$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$name=$_POST['name'];
$review=$_POST['review'];

$sql="INSERT INTO user_review Values('$name','$review')";

if($conn->query($sql)===TRUE)
{
    $_SESSION['review']='reviewed';
    header('Location: review.php');
}
else{
    echo "error in reviewing";
}

?>