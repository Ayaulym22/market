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
                                    <table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price for one</th>
      <th scope="col">Total Price</th>
      <th scope="col">Payed</th>
      <th scope="col">Pay</th>
    </tr>
  </thead>
  <tbody>
    <?php 

include_once 'endpoints/db.php';

if(isset($_SESSION['u_id'])){
        $user_id = $_SESSION['u_id'];

        $selBasket = "SELECT * FROM basket INNER JOIN products ON basket.product_id = products.product_id WHERE basket.user_id = '$user_id' ";
        $startSel = $con->query($selBasket);

        $rows = $startSel->num_rows;

        if($rows>0){
            while($row = $startSel->fetch_assoc()){
                if ($row['payed'] == 1){
                    $payed = 'yes';
                }else{
                    $payed = 'no';
                }
            echo '  <tr>
      <th scope="row">'.$row['product_name'].'</th>
      <td>'.$row['quantity'].'</td>
      <td>'.$row['product_price'].'</td>
      <td>'.$row['quantity'] * $row['product_price'].'</td>';
      
      if($payed== 'no'){
       echo '<td style="color:#e63946;">'.$payed.'</td>
       <td><form id="pay'.$row['basket_id'].'" > 
         
          <input type="text" name="basket_id" class="form-controls input-number" value="'.$row['basket_id'].'" style="display:none;"> 
          <input type="text" name="price" class="form-controls input-number" value="'.$row['quantity'] * $row['product_price'].'" style="display:none;">


          <input type="submit" value="Pay" >
            
      </form></td>
      
    </tr>';}else{
        echo '<td style="color:#80b918;">'.$payed.'</td> </form></td>
      
    </tr>';
    }

        }
    }
}
     ?>
  
    
  </tbody>
</table>

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
                url: 'endpoints/payment.php', // Обработчик формы отправки
                data: formNm.serialize(),
                success: function (data) {
                    // Вывод текста результата отправки в текущей форме
                    // alert(data);
                    if(data == 1){
                         Swal.fire({
 
  icon: 'success',
  title: "Payed",
  showConfirmButton: false,
  timer: 2000
})
setInterval(function() {
   location.reload();
}, 2000); //5 seconds
                     }else if (data == 2){
                         Swal.fire({
 
  icon: 'error',
  title: "Error",
  showConfirmButton: false,
  timer: 2000
})
                     }


else if (data == 0){
                   Swal.fire({
  icon: 'error',
  title: 'Your balance is enough',
  text: 'Please up to your Balance',
  footer: '<a href="card/index.php">To up Balance</a>'
})
                     }                     
                }
            });
            return false;
        });
    });

</script>
    

</body></html>