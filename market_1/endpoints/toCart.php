<?php 

session_start();
include_once 'db.php';





if(isset($_POST['product_id']) && isset($_POST['quantity']) && isset($_SESSION['u_id']) ){
	
	$user_id = $_SESSION['u_id'];
	$product_id = $_POST['product_id'];
	$quantity = $_POST['quantity'];

	$user_id = $con->real_escape_string($user_id);
	$product_id = $con->real_escape_string($product_id);
	$quantity = $con->real_escape_string($quantity);

	$insProd = "INSERT INTO basket (`user_id`, `product_id`, `quantity`, `payed`) VALUES ('$user_id' , '$product_id' , '$quantity' , '0')";
	$startQuery = $con->query($insProd);

	if($startQuery){
		echo 1;
	}else{
		echo 0;
	}


}else if(!isset($_SESSION['u_id'])){
	echo 2;
}



 ?>