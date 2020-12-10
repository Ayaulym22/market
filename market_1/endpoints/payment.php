<?php 
session_start();
include_once 'db.php';
 


if(isset($_POST['basket_id']) && isset($_POST['price'])){

	  $basket_id = $_POST['basket_id'];
	  $price = $_POST['price'];

$user_id = $_SESSION['u_id'];




	$basket_id = $con->real_escape_string($basket_id);
	$price = $con->real_escape_string($price);
	$user_id = $con->real_escape_string($user_id);


	// output user money from db
	 $selMoney = 'SELECT * FROM users WHERE user_id = '.$user_id;
	 $getMoney = $con->query($selMoney);

	 while($r = $getMoney->fetch_assoc()){
	 	$user_money = $r['user_money'];
	 }


	if ($user_money < $price){
		echo 0;	
		// popolnit balanse ssylka
	}else {
		$newBalanse = $user_money - $price;
		$newBalanse = $con->real_escape_string($newBalanse);

		$updBasket = "UPDATE basket SET payed = '1' WHERE user_id = '$user_id' AND basket_id = '$basket_id' ";
		$startUpd = $con->query($updBasket);

		if($startUpd){
			$updUser = "UPDATE users SET user_money = '$newBalanse' WHERE user_id = '$user_id' ";
			$start = $con->query($updUser);
			$_SESSION['money'] = $newBalanse;
			if($start){
				echo 1;

			}else{
				echo 2;
			}
		}  
	}
	// proverka balanse usera
	// esli hvataet to snyat 
	// esli net otrp popolnit




// obnovit inf v bg i snyat s balanse i obnovit


}else{
	echo "No data";
}


 ?>