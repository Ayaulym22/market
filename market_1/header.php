<!DOCTYPE html><html lang="en">
<?php 
session_start();
// session_unset();
 ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grocery Market</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/custom-select.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
   





    <!-- menu modal MOBILE -->
    <div class="modal fade" id="menu-id" tabindex="-1" aria-labelledby="menu-id" aria-hidden="true" >
        <div class="modal-dialog  modal-dialog-centered" >
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="menu d-xl-flex flex-wrap pl-0 list-unstyled">
                        <li class="item-has-children"><a href="index.php"><span>Home</span> </a> 
                            <li class="item-has-children"><a  data-toggle="collapse" href="product-list.php" role="button" aria-expanded="false" aria-controls="catagory-widget1"><span>All goods</span> </a>
                         <li class="item-has-children"><a   href="blog.php" role="button" ><span>Blog</span> </a>
                         <li class="item-has-children"><a  href="contact.php"><span>Contact Us</span> </a>


                        </li>
                       
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>




    <!-- sidebar-cart -->
    
<!-- header section start -->
<header class="header">
    <div class="header-top">
     <div class="container">
        <div class="mobile-header d-flex justify-content-between align-items-center d-xl-none fixed-totop animated slideInDown">

            <a href="index.html" class="logo"><img src="img/logo.png" alt="logo" width="150"></a>

            <!-- search select -->
              <!--   <div class="text-center mobile-search">
                    <button type="button" data-toggle="modal" data-target="#search-select-id"><i class="fas fa-search"></i></button>
                </div> -->

                <!-- menubar -->
                <div>
                    <button class="menu-bar" type="button" data-toggle="modal" data-target="#menu-id">
                        Home<i class="fas fa-caret-down"></i>
                    </button>
                </div>

            </div>

        </div>
        <hr>
        <div class="header-bottom fixed-totop animated slideInDown">
            <div class="row m-0 align-items-center">
                <div class="col-md-2 p-0 d-none d-xl-block">
                    <div class="all-catagory-option">
                     <img src="img/logo.png" alt="" width="150">
                 </div>
             </div>
             <div class="col-md-8">
                <div class="menu-area d-none d-xl-flex justify-content-center align-items-center">
                    <ul class="menu d-xl-flex flex-wrap list-unstyled">
                        <li class="item-has-children"><a  href="index.php">Home </a> </li>
                        <li><a href="product-list.php">All goods</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <?php 
                            if(isset($_SESSION['user'])){
                                echo "<li><a href='basket.php'>".$_SESSION['user']."</a></li>
                                <li><a href='logout.php'>Logout</a></li>";
                            }else{
                                echo '<li><a class="btn banner-btn" data-toggle="modal" data-target="#login">Login</a></li>';
                            }
                         ?>

                       
                       
                    </ul>
                </div>
            </div>


             <?php 
                            if(isset($_SESSION['money'])){
                                echo '  <div class="col-md-2 p-0 d-none d-xl-block">
                <div class="menu-area d-flex justify-content-end">
                    <ul class="menu-action d-none d-lg-block">
                        <li class="cart-option"><a href="card/index.php"><span class="cart-icon">

                           '.$_SESSION['money'] .' ₸</span> <span class="cart-amount"></span></a>
                        </li>
                    </ul>
                </div>
            </div>';
                            }
                         ?>

          
        </div>
    </div>
</div>
</header>
<!-- header section end -->
