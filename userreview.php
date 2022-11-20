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

function check_input($data)
{
  $data=htmlspecialchars($data);
  $data=strip_tags($data);
  $data=stripslashes($data);
  return $data;
}

$name=check_input($_POST['name']);
$review=check_input($_POST['review']);

$sql=$conn->prepare("INSERT INTO user_review Values(?,?)");
$sql->bind_param("ss",$name,$review);

if($sql->execute()===TRUE)
{
    $_SESSION['review']='reviewed';
    header('Location: review.php');
}
else{
    echo "error in reviewing";
}

$sql->close();
$conn->close();

?>