<?php 
include_once 'header.php';
 ?>



<br>





<!-- POSLEDNIE PRODUCTY -->
            <!-- trending product-section start -->
            <section class="trending-product-section">
                <div class="container">
                    <div class="section-heading">
                        <h4 class="heading-title"><span class="heading-circle"></span>Products category: Groats</h4>
                    </div>

                    <div class="section-wrapper">
                        <!-- Add Arrows -->
                       
                                <div class="mlr-20">
                                     <div class="slider-btn-group">
                                        <div class="slider-btn-prev trending-slider-prev" tabindex="0" role="button" aria-label="Previous slide">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 443.52 443.52" style="enable-background:new 0 0 443.52 443.52;" xml:space="preserve"><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8
                                                c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712
                                                L143.492,221.863z"/></g></svg>
                                            </div>
                                            <div class="slider-btn-next trending-slider-next" tabindex="0" role="button" aria-label="Next slide">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve"><g><path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105
                                                    L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795
                                                    l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z"/></g></svg>
                                                </div>
                                            </div>
                                    <div class="trending-product-container swiper-container-initialized swiper-container-horizontal">

                                        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-720px, 0px, 0px);">
                                           

                                    

                <?php 

                include_once 'endpoints/db.php';
// вывод продуктов по категориям
                $selProdOne = "SELECT * FROM products INNER JOIN category ON products.category_id = category.category_id WHERE products.deleted = 0 AND products.category_id = 1";
                $startSelOne = $con->query($selProdOne);

                $catOneRows = $startSelOne->num_rows;
                if($catOneRows>0){
                    while($row = $startSelOne->fetch_assoc()){
                    echo '<div class="swiper-slide" data-swiper-slide-index="3" style="width: 210px; margin-right: 30px;">
                                            <div class="product-item" style="height:60vh !important;">
                                                <div class="product-thumb">

                                                    <!-- cart -image -->
                                                    <a ><img src="'.$row['product_img'].'" alt="product" style="height:30vh !important; "></a>
                                                   
                                                    
                                                </div>
                                                <div class="product-content">
                                                    <!-- category -->
                                                   
                                                    <!-- name -->
                                                    <h6><a  class="product-title">'.$row['product_name'].'</a></h6>
                                                     <a  class="cata">Category '.$row['category_name'].'</a>
                                                    <!-- quant -->
                                                    <p class="quantity">Quantity: '.$row['product_quantity'].'</p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <!-- price -->
                                                        <div class="price">'.$row['product_price'].'₸</div>
                                                        <div class="cart-btn-toggle">
                                                            <!-- FORM Input procut id | user_id |  -->
                                                            <form id="toCart'.$row['product_id'].'"> 
                                                              <input type="text" name="quantity" value="1" class="form-controls input-number"  style="width: 5vw;" required>KG 

                                                              <input type="text" name="product_id" class="form-controls input-number" value="'.$row['product_id'].'" style="display:none;">
                                                              <input type="submit" value="to Cart">
                                                                
                                                          </form>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                }}


                 ?>

                                        
                                      
                              

                                   
                                       </div>

                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>






                                        <!-- 2 -->

<div class="trending-product-container swiper-container-initialized swiper-container-horizontal">
    <div class="section-heading">
                        <h4 class="heading-title"><span class="heading-circle"></span>Products category: Vegetables</h4>
                    </div>
                                        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-720px, 0px, 0px);">
                                           

                                    

                <?php 

                include_once 'endpoints/db.php';
// вывод продуктов по категориям
                $selProdOne = "SELECT * FROM products INNER JOIN category ON products.category_id = category.category_id WHERE products.deleted = 0 AND products.category_id = 3";
                $startSelOne = $con->query($selProdOne);

                $catOneRows = $startSelOne->num_rows;
                if($catOneRows>0){
                    while($row = $startSelOne->fetch_assoc()){
                    echo '<div class="swiper-slide" data-swiper-slide-index="3" style="width: 210px; margin-right: 30px;">
                                            <div class="product-item" style="height:60vh !important;">
                                                <div class="product-thumb">

                                                    <!-- cart -image -->
                                                    <a ><img src="'.$row['product_img'].'" alt="product" style="height:30vh !important; "></a>
                                                   
                                                    
                                                </div>
                                                <div class="product-content">
                                                    <!-- category -->
                                                   
                                                    <!-- name -->
                                                    <h6><a  class="product-title">'.$row['product_name'].'</a></h6>
                                                     <a  class="cata">Category '.$row['category_name'].'</a>
                                                    <!-- quant -->
                                                    <p class="quantity">Quantity: '.$row['product_quantity'].'</p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <!-- price -->
                                                        <div class="price">'.$row['product_price'].'₸</div>
                                                        <div class="cart-btn-toggle">
                                                            <!-- FORM Input procut id | user_id |  -->
                                                            <form action="" id="toCart'.$row['product_id'].'"> 
                                                              <input type="text" name="quantity" value="1" class="form-controls input-number"  style="width: 5vw;" required>KG 
                                                              <input type="text" name="product_id" class="form-controls input-number" value="'.$row['product_id'].'" style="display:none;">
                                                              <input type="submit" value="to Cart">
                                                                
                                                          </form>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                }}


                 ?>

                                        
                                      
                              

                                   
                                       </div>

                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>






<!-- 2 -->






<!-- 3 -->

<div class="trending-product-container swiper-container-initialized swiper-container-horizontal">
    <div class="section-heading">
                        <h4 class="heading-title"><span class="heading-circle"></span>Products category: Fruits</h4>
                    </div>
                                        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-720px, 0px, 0px);">
                                           

                                    

                <?php 

                include_once 'endpoints/db.php';
// вывод продуктов по категориям
                $selProdOne = "SELECT * FROM products INNER JOIN category ON products.category_id = category.category_id WHERE products.deleted = 0 AND products.category_id = 2";
                $startSelOne = $con->query($selProdOne);

                $catOneRows = $startSelOne->num_rows;
                if($catOneRows>0){
                    while($row = $startSelOne->fetch_assoc()){
                    echo '<div class="swiper-slide" data-swiper-slide-index="3" style="width: 210px; margin-right: 30px;">
                                            <div class="product-item" style="height:60vh !important;">
                                                <div class="product-thumb">

                                                    <!-- cart -image -->
                                                    <a ><img src="'.$row['product_img'].'" alt="product" style="height:30vh !important; "></a>
                                                   
                                                    
                                                </div>
                                                <div class="product-content">
                                                    <!-- category -->
                                                   
                                                    <!-- name -->
                                                    <h6><a  class="product-title">'.$row['product_name'].'</a></h6>
                                                     <a  class="cata">Category '.$row['category_name'].'</a>
                                                    <!-- quant -->
                                                    <p class="quantity">Quantity: '.$row['product_quantity'].'</p>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <!-- price -->
                                                        <div class="price">'.$row['product_price'].'₸</div>
                                                        <div class="cart-btn-toggle">
                                                            <!-- FORM Input procut id | user_id |  -->
                                                            <form action="" id="toCart'.$row['product_id'].'"> 
                                                              <input type="text" name="quantity" value="1" class="form-controls input-number"  style="width: 5vw;" required>KG 

                                                              <input type="text" name="product_id" class="form-controls input-number" value="'.$row['product_id'].'" style="display:none;">
                                                              <input type="submit" value="to Cart">
                                                                
                                                          </form>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                }}


                 ?>

                                        
                                      
                              

                                   
                                       </div>

                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>







<!-- 3 -->



                                       
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- trending product-section end -->




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






<script>
   
    $(document).ready(function () {
        $('form').submit(function () {
            var formID = $(this).attr('id'); // Получение ID формы
            var formNm = $('#' + formID);
            $.ajax({
                type: 'POST',
                url: 'endpoints/toCart.php', // Обработчик формы отправки
                data: formNm.serialize(),
                success: function (data) {
                    // Вывод текста результата отправки в текущей форме
                    // alert(data);
                    if(data == 1){
                         Swal.fire({
 
  icon: 'success',
  title: "Added to Cart",
  showConfirmButton: false,
  timer: 2000
})
                     }else{
                         Swal.fire({
 
  icon: 'error',
  title: "Error",
  showConfirmButton: false,
  timer: 2000
})
                     }
                }
            });
            return false;
        });
    });

</script>
    

</body></html>