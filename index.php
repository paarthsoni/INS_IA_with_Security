<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSSfrontend.css">

    <!-- css  -->

    <link rel="stylesheet" href="./css/index.css">
    <script src="./js/index.js"></script>


</head>

<body>


   

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="index.php" class="logo"><span>Book my show</span></a>

        <nav class="navbar">
            <a href="#Home">Home</a>
            <a href="#Movies">Movies</a>
        </nav>
       
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <?php
            session_start();
            if (isset($_SESSION['username']))
            {
              $user=$_SESSION['username'];
             
              echo "<a style='color:white; text-decoration:none;' href='logout.php'>Hello,$user</a>";
            }
            else{
              echo "<a class='fas fa-user' id='login-btn' href='login.php'></a>";
            }
            ?>
            
            
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="Search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->

            <?php

            if($_SESSION['ticket_booked'])
            {
                echo "<script>alert('Ticket Booked Successfully')</script>";
                unset($_SESSION['ticket_booked']);
            }
            ?>


    <div id="Home"></div>
    <br><br><br><br><br><br>
    <!--carousal-->

    <div id="control" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner bg-light">
            <div class="carousel-item active ">
                <img class="d-block w-65 mx-auto"
                    src="https://i.ytimg.com/vi/cxA2y9Tgl7o/maxresdefault.jpg" alt="">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-65 mx-auto" src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/E9C42FC150931CED05EFA1EAE4FE82141414FF93C4867DFEB9F075BCDA9559E6/scale?width=1200&aspectRatio=1.78&format=jpeg" alt="">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-65 mx-auto"
                    src="https://akm-img-a-in.tosshub.com/businesstoday/images/story/202210/varun-dhawan-turn-werewolf-look-for-bhediya-sixteen_nine.jpg" alt="">
            </div>
            <div class="carousel-item ">
                <img class="d-block w-65 mx-auto"
                    src="https://gumlet.assettype.com/rajexpress%2F2022-08%2F0897e8b9-08f0-43dc-a00d-5bc66ed491f7%2Fuunchai.jpg?rect=0%2C0%2C1600%2C900&auto=format%2Ccompress&fit=max&format=webp&w=400&dpr=2.6"
                    alt="">
            </div>
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#control" data-bs-slide="prev">
            <div class="bg-dark rounded p-2">
                <span class="carousel-control-prev-icon "></span>
            </div>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#control" data-bs-slide="next">
            <div class="bg-dark rounded p-2">
                <span class="carousel-control-next-icon"></span>
            </div>
        </button>
    </div>

    <!--carousal end-->

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h1 class="modal-title p-3 display-3">BOOK NOW</h1>
                    <button type="button" class="btn-close p-4" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <?php
                    if(isset($_SESSION['username']))
                    {
                        echo '<form action="payment.php" method="post">
                        <div class="mb-3 mt-3">
                            <h2 class="p-1">Email</h2>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>

                        <div class="mb-3 mt-3">
                            <h2 class="p-1">Name</h2>
                            <input type="text" class="form-control" placeholder="Enter Name" name="cname">
                        </div>

                        <div class="mb-3 mt-3">
                            <h3>How many</h3>
                            <input type="number" class="form-control" placeholder="Number of guests" name="howmany">
                        </div>

                        <div class="mb-3 mt-3">
                            <h3>Date</h3>
                            <input type="date" class="form-control" name="date">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>';
                    }

                    else{
                       echo' <a href="login.php" style="text-decoration: none; color: orange; font-size: large;">Login Required</a>';
                    }
                    ?>
                    
                </div>

                <!-- Modal footer -->


            </div>
        </div>
    </div>

    <!-- book section starts  -->

    <!-- book section ends -->


    <!-- Movies section starts  -->

    <section class="Movies" id="Movies">

        <h1 class="heading">
            <span>M</span>
            <span>o</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>s</span>
        </h1>




        <div class="swipercontainer review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img class=' rounded'
                            src="https://akm-img-a-in.tosshub.com/businesstoday/images/story/202210/varun-dhawan-turn-werewolf-look-for-bhediya-sixteen_nine.jpg"
                            alt="">
                        <h3>Bhediya</h3></br></br>

                        <div class="stars">
                            <?php
                            if(isset($_SESSION['username']))
                            {
                           echo '<a href="review.php" style="text-decoration: none; color: orange;"><i class="fas fa-star"></i>6.6/10</a>';
                            }
                            else{
                                echo '<a href="login.php" style="text-decoration: none; color: orange;"><i class="fas fa-star"></i>6.6/10</a>';
                            }
                        ?>
                            </div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                            Book Now
                        </button>
                    </div>
                </div>
                

            </div>


        </div>

    </section>

    <!-- Movies section ends -->

    <!-- footer section  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est
                    accusantium voluptas enim nemo facilis sit debitis.</p>
                <div class="box">
                    <h3>quick links</h3>
                    <a href="#Home">Home</a>
                    <a href="#Movies">Movies</a>
                </div>
                <div class="box">
                    <h3>follow us</h3>
                    <a href="#">facebook</a>
                    <a href="#">instagram</a>
                    <a href="#">twitter</a>
                    <a href="#">linkedin</a>
                </div>

            </div>

    </section>

    <!-- footer section  ends -->




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="JSfrontend.js"></script>

</body>

</html>