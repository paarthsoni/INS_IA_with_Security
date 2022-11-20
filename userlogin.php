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
$sql = $conn->prepare("Select * from user_register where username=? and password=?");
$sql->bind_param("ss", $username, $password);
$sql->execute();
$result = $sql->get_result(); 
while ($row = $result->fetch_assoc()) {
  if($row['username']==$username);
  {
    $flag=TRUE;
    break;
  }
  
}
if ($flag==TRUE)
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
$sql->close();
$conn->close();
?>