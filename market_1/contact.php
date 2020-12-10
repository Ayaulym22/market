<?php 
include_once 'header.php';
 ?>





  





<!-- POSLEDNIE PRODUCTY -->
            <!-- trending product-section start -->
            <section class="trending-product-section">
                <div class="container">
                      <div class="container">
        <div class="col-md-12 text-center">
            <br>
            <h2>CONTACT US</h2>
        </div>
    </div>
                  
<br>
                    <div class="section-wrapper">
                      <div class="container d-flex justify-content-between">
                      <div class="col-md-6">
                          <img src="img/logo.png" alt="">
                      </div>


                      <div class="col-md-5 ml-1">
                          <h3>Our address</h3>
                          <p>Kazakhstan | Almaty city | Alfarabi av. 1</p>
                          <p>Happy Banana Inc.</p>
                          <p>Mobile: <a href="tel:1">8 (727) 111 2253</a></p>
                          <p>Email: <a href="mailto:asd">info@happybanana.com</a></p>
                          <ul>
                              <li>- Fast delivery</li>
                              <li>- Fresh products</li>
                              <li>- Happy clients ☻</li>
                              <li></li>
                          </ul>
                      </div>
                      

                    </div>
                      <div class="col-md-12 text-center pb-5">
                        <hr><br>
                            <a href="#"><img src="img/apple.png" alt=""></a>
                            <a href=""><img src="img/google.png" alt=""></a>
                        </div> <div class="col-md-12 text-center pb-5">
                     
                            
                        </div>
                            </div>
                        </section>
                                    <!-- recommended product-section end -->






                                    </div>
                                </div>







                             


                                <!-- mobile-footer -->
                                <div class="mobile-footer d-flex justify-content-between align-items-center d-xl-none">
                                    


                                     <?php 
                            if(isset($_SESSION['money'])){

                                    echo '<a href="card/index.php"><button class="info" > '.$_SESSION['money'] .' ₸</button></a>';


                             
                            }
                         ?>

                                    <div class="footer-cart">
                                        <a onclick="cartopen()" href="#" class="d-flex align-items-center"><span class="cart-icon"><i class="fas fa-shopping-cart"></i></span></a>
                                    </div>

                                    <div class="footer-admin-area">
             <?php 
                            if(isset($_SESSION['user'])){
                                echo ' <button class="user-admin" type="button" data-toggle="modal" data-target="#login" style="display:none;"><i class="fas fa-user"></i></button>';
                            }else{
                                echo ' <button class="user-admin" type="button" data-toggle="modal" data-target="#login"><i class="fas fa-user"></i></button>';
                            }
                         ?>
           
        </div>
    </div>
    <!-- mobile-footer -->

<!-- Modal LOGIN-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="loginForm" method="post">
             <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1"  placeholder="">
 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="user_psw" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>
  <input type="text" name="login" style="display: none; ">

    <div class="form-group">
   
    <input type="submit" name="login" class="form-control" value="Login">
   
  </div>


        </form>
         <button class="form-control btn-success" onclick="logClose()" data-toggle="modal" data-target="#registerModal" >Register</button>
      </div>
     
    </div>
  </div>
</div>








<!-- Register form -->


<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="registerForm" method="post">
 <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
 
</div>

 <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="u_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
 
</div>

 <div class="form-group">
    <label for="exampleInputEmail1">Surname</label>
    <input type="text" name="u_surname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required>
 
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="user_psw" class="form-control" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <input type="text" name="register" style="display: none; ">

    <div class="form-group">
   
    <input type="submit" name="register" class="form-control" value="Register">
   
  </div>


        </form>
        <button class="form-control btn-success" onclick="regClose()" data-toggle="modal" data-target="#login" >Login</button>
      </div>
     
    </div>
  </div>
</div>
    




<script>
    
function regClose(){
    $('#registerModal').modal('hide');
}


function logClose(){
    $('#login').modal('hide');
}


</script>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.elevatezoom.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/custom-select.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/json.js"></script>





    

</body></html>