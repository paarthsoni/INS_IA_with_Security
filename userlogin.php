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

$username=$_POST["username"];
$password=$_POST["password"];

$sql="Select * from user_register where username='$username' and password='$password' ";

$result = mysqli_query($conn, $sql);

$rows=mysqli_num_rows($result);
echo "$rows";
if ($rows>=1)
  {
      session_start();
      $_SESSION["username"]=$username;
      header("Location: index.php");
  }

  else{
    session_start();
    $_SESSION['wrong_credentials']="invalid credentials";
    header('Location:login.php');
   
   
  }

?>