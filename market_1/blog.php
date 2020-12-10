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
            <h2>BLOG</h2>
        </div>
    </div>
                    <div class="section-heading">
                        <br>
                        <h4 class="heading-title"><span class="heading-circle"></span>How to cook classical borsch</h4>
                    </div>

                    <div class="section-wrapper">
                        <!-- Add Arrows --><br>
                        <img src="img/borsh.jpg" alt="">
                       <p>Borsch is a traditional dish of the Eastern Slavs, the main first dish of South Russian and Ukrainian cuisine, is also widely used in the national cuisines of neighboring peoples: Poles, Lithuanians, Romanians and Moldavians have similar dishes.

                    There is such a geographical concept as “Borsch belt”, which covers the territories where the borch is the traditional dish - from southeastern Poland through Ukraine, Belarus and the Russian regions to Volga and Dnieper rivers.

                    There are some famous persons who like Borsch: the writer Nikolai Gogol, Russian Empress Catherine II and Russian Emperor Alexander II, the world-famous ballerina Anna Pavlova, French actor Jean-Paul Belmondo, Princess of Wales Diana.

                    There are 70 types of Borsch. But we will describe how to cook traditional Borsch.

                    You will need next ingredients some of which you can order at our site:</p>

                    <ul>









                        <li>1.5-2 litres of water</li>
                        <li>400-500 g of pork or beef on the bone</li>
                        <li>2 small beetroots;</li>
                        <li>1 medium carrots;</li>
                        <li>3 medium onions;</li>
                        <li>4–5 spoons of oil;</li>
                        <li>a pinch of citric acid, a little table vinegar or ½ lemon;</li>
                        <li>2 spoons of tomato paste.</li>
                        <li>300 g of fresh cabbage;</li>
                        <li>4 medium potatoes;</li>
                        <li>salt;</li>
                        <li>dried bay leaf;</li>
                        <li>fresh dill and parsley (optional);</li>
                        <li>garlic (optional).</li>
                       
                    </ul>

                    <h5>Step 1. Cook the broth</h5>

                    <p>Pour cold water into the pan, lay the meat and put on medium heat. The broth will be tastier if you use the meat on the bone. Remove the foam before the boiling. When the liquid is boiling, cover the pan with a lid and simmer for an hour and a half</p>

                   <h5> Step 2. Make a base for Borsch</h5>
                    <p>Wash and peel the beetroots, carrots and onions. Grate beetroots on a coarse grater, and carrots - on medium. Cut the onion into small cubes. Pour oil into a pan, turn on medium heat. Sauté the onions and carrots, stirring for about 5 minutes. Then put beetroots in the pan. Add citric acid, vinegar or lemon juice to it. The borscht will be truly red and gain a pleasant sourness thanks to these components. Cook for another 5 minutes. Add the tomato paste, mix and leave on the fire for another 5-7 minutes.</p>

                    <h5>Step 3. Finish</h5>
                    <p>While the cabbage and potatoes are being cooked, separate the meat from the bone and cut it into cubes and return it to the soup. Salt to taste. Add the base for Borsch and mix. Throw dried bay leaf and chopped dill and parsley. Cover the pot and cook for another 5–7 minutes. You can add a little chopped garlic for flavor. Leave the borsch to stay for 5-10 minutes. The soup is ready.</p>

                    <h5>How to serve soup</h5>
                        <p>Borsch can be eaten after cooking immediately. But it is even tastier next day. Add sour cream and fresh herbs to the soup. If you prefer more acidic soup, put a slice of lemon. The Borscht is eaten with rye bread or buns.</p>




                          <div class="section-heading">
                        <br>
                        <h4 class="heading-title"><span class="heading-circle"></span>How to cook light salad with vegetables and mozarella</h4>
                    </div>

                    <div class="section-wrapper">

                        <!-- Add Arrows --><br>
                        <img src="img/salad.jpg" alt="">
                       <p>Sometimes we want to cook light, but useful salad.

We will describe the receipt of the cooking of such light salad with vegetables and mozzarella. Energy of this salad is 100 kcal, but there are a lot of protein and useful vitamins. No one of the products is subjected to heat treatment, that's why they retain all the beneficial properties.

You need next products for the cooking of this salad and you can order them at our site:</p>

                    <ul>



                     <li> cherry tomatoes – 200 g;</li>
                       <li> mozzarella cheese – 150 g;;</li>
                       <li> radish – 100 g;</li>
                       <li> cucumbers – 3 pc;</li>
                       <li> bell pepper – 1 pc;</li>
                       <li> dill – 10 g;</li>
                       <li> iceberg lettuce – 15 g;</li>
                       <li> olive oil – 2 spoons;</li>
                       <li> salt.</li>
                       
                    </ul>

                    <h5>Step 1. Wash all vegetable</h5>

                    <p>You need to wash and dry all vegetables.</p>

                   <h5> Step 2. Cut all vegetable, herbs and cheese</h5>
                    <p>Cut the radishes into circles, salt and leave for 10 minutes. Cut cherry tomatoes in half. Cut cucumbers in circles. Remove seeds from bell pepper and cut it in small cubes. Cut mozzarella into small pieces. Chop the dill finely. Tear large iceberg leaves with your hands</p>

                    <h5>Step 3. Finish</h5>
                    <p>Combine cut vegetables, herbs and cheese in a salad bowl, salt, season with olive oil and mix. Your salad is ready.</p>

              





                                <div class="mlr-20">
                                    
                                    <div class="trending-product-container swiper-container-initialized swiper-container-horizontal">

                                        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-720px, 0px, 0px);">
                                           

                                    

              
                              

                                   
                                       </div>

                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>





<hr>
                                        <!-- 2 -->

<div class="trending-product-container swiper-container-initialized swiper-container-horizontal">
    <div class="section-heading">
                        <h4 class="heading-title "><span class="heading-circle"></span>Quick order of Products</h4>
                    </div>
                                        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-720px, 0px, 0px);">
                                           

                                    

                <?php 

                include_once 'endpoints/db.php';
// вывод продуктов на рандом
                $selProdOne = "SELECT * FROM products INNER JOIN category ON products.category_id = category.category_id WHERE products.deleted = 0  ORDER BY RAND() LIMIT 3 ";
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






                                       
                                    </div>
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
                     }else if (data == 0){
                         Swal.fire({
 
  icon: 'error',
  title: "Error",
  showConfirmButton: false,
  timer: 2000
})
                     }
                     else if (data == 2){
                         Swal.fire({
 
  icon: 'error',
  title: "Please Login to Buy",
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