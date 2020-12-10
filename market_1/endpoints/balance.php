<?php 
include_once 'db.php';
session_start();

if (isset($_POST['price']) && isset($_POST['card-number']) && isset($_POST['upBalance'])){

	$user_id = $_POST['user_id'];
	$price = $_POST['price'];
	$card_num = $_POST['card-number'];
	date_default_timezone_set("Asia/Almaty");
    $date = date("Y-m-d | h:i");

    $user_id = $con->real_escape_string($user_id);
    $price = $con->real_escape_string($price);
    $card_num = $con->real_escape_string($card_num);

    $insQuery = "INSERT INTO payments (user_id , payment_date , card_number , payed_price) VALUES ('$user_id' , '$date' , '$card_num' , '$price')";
    $startQuery = $con->query($insQuery);

    if($startQuery){

    	

    	$userInfo = "SELECT * FROM users WHERE user_id = $user_id ";
    	$startInfo = $con->query($userInfo);

    	while($row = $startInfo->fetch_assoc()){
    		$userMoney = $row['user_money'];
    	}

    	$newBalance = $userMoney + $price;
    	$newBalance = $con->real_escape_string($newBalance);
    	
    	$updQuery = "UPDATE users SET user_money = $newBalance  WHERE user_id = $user_id";
    	$startUpd = $con->query($updQuery);
    	if($startUpd){
    		$_SESSION['money'] = $newBalance;
    		echo 1;
    	}
    	else{
    		echo "err";
    	}


    }else{
    	echo 0;
    }

}

 ?>