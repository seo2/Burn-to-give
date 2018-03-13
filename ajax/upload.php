<?php
date_default_timezone_set('America/Santiago');
require_once '_lib/config.php';
require_once '_lib/MysqliDb.php';
require_once("_lib/wideimage/WideImage.php");

$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);

$userID = $_POST["userID"];
$op = $_POST["op"];

//sacamos los datos de las calorias
        $db->where ("calID", $userID);
		$user = $db->getOne ("calorias");
		if($db->count > 0){
			$calorias = $user["calVal"];
		}else{
			$calorias = 0;
		}

$target_dir 	= "../uploads/fotos/";
$target_dir2 	= "../uploads/";
$fecha 			= date("YmdHis");

if($op == 'personalizada'){
	$partes_ruta 	= pathinfo($target_dir . basename($_FILES["fileToUpload"]["name"]));
	$imageFileType 	= strtolower($partes_ruta['extension']);
	$filename 		= $fecha.".".$imageFileType;
	$target_file 	= $target_dir . $filename;
}else{

}

$uploadOk = 1;
$update = false;

// Check if image file is a actual image or fake image
if($op == 'personalizada'){
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        //echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        //echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    //echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 9999999) {
	    //echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}


	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
	    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    //echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	        //HACER RESIZE
	        $image 		= WideImage::load($target_dir.$filename);
	
	        $image_w 	= $image->getWidth();
	        $image_h 	= $image->getHeight();
	
	        $image 		= $image->resize(1600, 1200);
	
	        $image->crop('center', 'center', 800, 800)->resize(600, 600)->saveToFile($target_dir.$filename);
	
			$abs_path = dirname( __FILE__ );
	
			$last_filename 	=  $target_dir.$filename;
			$mask 			= "../assets/img/mascara.png";
			$PngFile 		= $fecha.".png";
			$newfile_name 	= $target_dir2.$PngFile;
	
			$img 			= WideImage::load($last_filename);
			$watermark 		= WideImage::load($mask);
			$new 			= $img->merge($watermark, 'center', 'bottom', 100);
	
			$canvas = $new->getCanvas();
			$canvas->useFont($abs_path.'/fonts/Gotham-Black.ttf', 33, $new->allocateColor(235, 83, 31));
	
			if($calorias > 999){
				$canvas->writeText('right - 22', 'bottom - 62', $calorias);
			}else{
				$canvas->writeText('right - 42', 'bottom - 62', $calorias);
			}
	
			//guardar en el server la foto png con el marco
			$new->saveToFile($newfile_name);
	
	        $update = true;
	
	    } else {
	        //echo "Sorry, there was an error uploading your file.";
	    	$uploadOk = 0;
	    }
	}
}else{

		$PngFile = $fecha.".png";
		$filename = $PngFile;

		$newfile_name = $target_dir2.$PngFile;
		$img = WideImage::load("../assets/img/img-share2.png");
		

		$canvas = $img->getCanvas();
		$canvas->useFont($abs_path.'/fonts/Gotham-Black.ttf', 40, $img->allocateColor(255, 255, 255));

		if($calorias > 999){
			$canvas->writeText('right - 80', 'bottom - 70', $calorias);
		}else{
			$canvas->writeText('right - 100', 'bottom - 70', $calorias);
		}

		//guardar en el server la foto png con el marco
		$img->saveToFile($newfile_name);

        $update = true;
}

if($update){

	$data = array('calImg' => $filename);
	$db->where ('calID', $userID);
			if ($db->update ('calorias', $data)){
				$uploadOk = $userID;
			}
}

echo $uploadOk;