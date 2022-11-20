<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="./css/payment.css">

    <script src="./js/payment.js"> </script>


</head>
<body>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">

<?php
  session_start();
  $_SESSION['email']=$_POST["email"];
  $_SESSION['name']=$_POST["cname"];
  $_SESSION['howmany']=$_POST["howmany"];
  $_SESSION['date']=$_POST["date"];
?>

<div class="wrapper">
  <div class="payment">
    <div class="payment-logo">
      <p>p</p>
    </div>
    <?php
    echo "Customer Name:". $_SESSION['name']."<br><br>";
    echo "Customer Email:".  $_SESSION['email']."<br><br>";
    echo "Total Tickets:". $_SESSION['howmany']."<br><br>";
    echo "Date:". $_SESSION['date']."<br>";

    ?>
    <form action="userpayment.php" method="post">
      <h2>Payment Gateway</h2>
      <div class="form">
        <div class="card space icon-relative">
          <label class="label">Card holder:</label>
          <input type="text" class="input" placeholder="Name" name="cardholdername">
          <i class="fas fa-user"></i>
        </div>
        <div class="card space icon-relative">
          <label class="label">Card number:</label>
          <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Card Number" name="cardnumber">
          <i class="far fa-credit-card"></i>
        </div>
        <div class="card-grp space">
          <div class="card-item icon-relative">
            <label class="label">Expiry date:</label>
            <input type="text"  class="input"  placeholder="00 / 00" name="expirydate">
            <i class="far fa-calendar-alt"></i>
          </div>
          <div class="card-item icon-relative">
            <label class="label">CVC:</label>
            <input type="text" class="input" data-mask="000" placeholder="000" name="cvc">
            <i class="fas fa-lock"></i>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Pay</button>
      </form>
        
      <!-- <div class="btn">
        Pay
      </div>  -->
      
    </div>
  </div>
</div>
</body>
</html>