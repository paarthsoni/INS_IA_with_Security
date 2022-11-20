
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSSfrontend.css">
    <link rel="stylesheet" href="./css/register.css">

   
</head>
<body>
     <!-- header section starts  -->

  <header>

<div id="menu-bar" class="fas fa-bars"></div>

<a href="index.php" class="logo"><span>Book my show</span></a>

<nav class="navbar">
    <a href="index.php#Home">Home</a>
    <a href="index.php#Movies">Movies</a>
</nav>

<div class="icons">
    <i class="fas fa-search" id="search-btn"></i>
    <a class="fas fa-user" id="login-btn" href="login.php"></a>
</div>

<form action="" class="search-bar-container">
    <input type="search" id="search-bar" placeholder="Search here...">
    <label for="search-bar" class="fas fa-search"></label>
</form>

</header>



<!-- header section ends -->
<?php
session_start();
if(isset($_SESSION['errmessage']))
{
  echo "<script>alert('Error in Creating in Account!!')</script>";
  unset($_SESSION['errmessage']);
}

if(isset($_SESSION['passmessage']))
{
  echo "<script>alert('Passwords do not match!!')</script>";
  unset($_SESSION['passmessage']);
}

?>
<div class="container">
    <div class="content">
            <h1 class="form-title">Register Here</h1>
            <form action="userregister.php" method="post">
               <input type="text" placeholder="Username" name="username" required>
            
                <input type="text" placeholder="Phone Number" name="contact" required>

                <select name="gender" placeholder="gender">
                <option value="" disabled selected>Select your Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <input type="email" placeholder="Email" name="email" required>
                <div class="beside">
                <input type="password" placeholder="Password" name="password" required>
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
                </div>
                
            <button type="submit">Submit</button>
            <p class="message">Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
 </div>

</body>
</html>