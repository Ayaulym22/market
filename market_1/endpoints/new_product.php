<?php 
// подкл к БД

include_once 'db.php';


// Проверяем установлен ли массив файлов и массив с переданными данными
if(isset($_FILES) && isset($_FILES['image'])) {
 
  //Переданный массив сохраняем в переменной
  $image = $_FILES['image'];

// Принимает все заоплненные поля с формы

  $p_name = $_POST['p_name'];
  // $p_desc = $_POST['p_desc'];
  $p_price = $_POST['p_price'];
  $p_quant = $_POST['p_quant'];
  $p_cat = $_POST['p_cat'];

  // преобразование в строку

  $p_name = $con->real_escape_string($p_name);
  // $p_desc = $con->real_escape_string($p_desc);
  $p_price = $con->real_escape_string($p_price);
  $p_quant = $con->real_escape_string($p_quant);
  $p_cat = $con->real_escape_string($p_cat);




 
  // Проверяем размер файла и если он превышает заданный размер
  // завершаем выполнение скрипта и выводим ошибку
  if ($image['size'] > 2000000) {
    die('error');
  }
 
  // Достаем формат изображения
  $imageFormat = explode('.', $image['name']);
  $imageFormat = $imageFormat[1];
 
  // Генерируем новое имя для изображения. Можно сохранить и со старым
  // но это не рекомендуется делать
  $folder = '../img/';
  $hash = hash('crc32',time()) . '.' . $imageFormat;
  $imageFullName = $folder . $hash;
  $fold = 'img/';
 	$imgName = $con->real_escape_string($fold.$hash);
  // Сохраняем тип изображения в переменную
  $imageType = $image['type'];
 
  // Сверяем доступные форматы изображений, если изображение соответствует,
  // копируем изображение в папку images
  if ($imageType == 'image/jpeg' || $imageType == 'image/png' || $imageType == 'image/jpg') {
    if (move_uploaded_file($image['tmp_name'],$imageFullName)) {
    	 $con->set_charset("utf8");
    	$insQuery = "INSERT INTO products ( `product_name`, `product_description`, `product_price`, `product_quantity`, `product_img`, `category_id` , `deleted`) VALUES ('$p_name' , '1' , '$p_price' , '$p_quant' , '$imgName' , '$p_cat' , '0') ";
    	$startQuery = $con->query($insQuery);
    	if($startQuery){
    		echo 'success';
    	}else{
    		echo "Error";
    	}



      
    } else {
      echo 'error';
    }
  }
}

 ?>