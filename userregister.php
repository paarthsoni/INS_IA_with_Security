
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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

$username=$_POST["username"];
$contact=$_POST["contact"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

if ($password==$cpassword)
{
$sql="INSERT INTO user_register Values('$username','$contact','$gender','$email','$password')";
if ($conn->query($sql) === TRUE) {
$mssg="true";
 $_SESSION['account']=$mssg;
 
  header("Location:login.php");
  
} else {
  
  $_SESSION['errmessage']="Error in Creating Account";
  header("Location: register.php");
}

}
else{
  
  $_SESSION['$passmessage']='passwords do not match';
  header("Location: register.php");

}

?>

</body>
</html>
