<?php
date_default_timezone_set('America/Santiago');
require_once '_lib/config.php';
require_once '_lib/MysqliDb.php';
require_once("_lib/wideimage/WideImage.php");

$db = new MysqliDb (HOST, USERNAME, PASSWORD, DATABASE);

$userID = $_POST["userID"];
$op = $_POST["op"];

function image_fix_orientation($filename)
    {
        $exif = exif_read_data($filename);
        if (!empty($exif['Orientation']))
        {
            
            switch ($exif['Orientation'])
            {
                case 3:
                    return(180);
                    break;

                case 6:
                    return(90);
                    break;

                case 8:
                    return(-90);
                    break;
            }

            
        }
    }

//sacamos los datos de las calorias
        $db->where ("calID", $userID);
		$user = $db->getOne ("calorias");
		if($db->count > 0){
			$calorias = $user["calVal"];
		}else{
			$calorias = 0;
		}

$target_dir = "../uploads/fotos/";
$target_dir2 = "../uploads/";
$fecha = date("YmdHis");
$abs_path = dirname( __FILE__ );

if($op == 'personalizada'){
$partes_ruta = pathinfo($target_dir . basename($_FILES["fileToUpload"]["name"]));
$imageFileType = strtolower($partes_ruta['extension']);
$filename = $fecha.".".$imageFileType;
$target_file = $target_dir . $filename;
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
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
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


    	//CHEQUEAR ORIENTACION
    	$grados = image_fix_orientation($target_file);
    	if($grados!= ""){
    		$img1 = WideImage::load($target_file);
    		$image1_w = $img1->getWidth();
        	$image1_h = $img1->getHeight();
    		if($image1_w > 1200){
    			$img1->resize(1200, '100%')->saveToFile($target_dir.$filename);
    			$img2 = WideImage::load($target_file);
    			$img2->rotate($grados)->saveToFile($target_file);
    		}else{
    			$img1->rotate($grados)->saveToFile($target_file);
    		}
    	}

        //HACER RESIZE
        $image = WideImage::load($target_dir.$filename);

        $image_w = $image->getWidth();
        $image_h = $image->getHeight();

        if($image_h > $image_w){
        	$image = $image->resize(630, '100%');
        }elseif($image_w > $image_h){
        	$image = $image->resize('100%', 630);
        }else{
        	$image = $image->resize(630, 630);
        }

        $image->crop('center', 'center', 630, 630)->saveToFile($target_dir.$filename);

        

		

		$last_filename =  $target_dir.$filename;
		$mask = "../assets/img/mascara.png";
		$PngFile = $fecha.".png";
		$newfile_name = $target_dir2.$PngFile;

		$img = WideImage::load($last_filename);
		$watermark = WideImage::load($mask);
		$new = $img->merge($watermark, 'center', 'bottom', 100);

		$canvas = $new->getCanvas();
		$canvas->useFont($abs_path.'/fonts/Gotham-Black.ttf', 36, $new->allocateColor(235, 83, 31));

		if($calorias > 999){
			$canvas->writeText('right - 26', 'bottom - 68', $calorias);
		}elseif($calorias < 100 && $calorias > 9){
			$canvas->writeText('right - 56', 'bottom - 68', $calorias);
		}elseif($calorias < 10){
			$canvas->writeText('right - 72', 'bottom - 68', $calorias);
		}else{
			$canvas->writeText('right - 42', 'bottom - 68', $calorias);
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
		$canvas->useFont($abs_path.'/fonts/Gotham-Black.ttf', 54, $img->allocateColor(255, 255, 255));

		if($calorias > 999){
			$canvas->writeText('right - 50', 'bottom - 70', $calorias);
		}elseif($calorias < 100 && $calorias > 9){
			$canvas->writeText('right - 86', 'bottom - 68', $calorias);
		}elseif($calorias < 10){
			$canvas->writeText('right - 108', 'bottom - 68', $calorias);
		}else{
			$canvas->writeText('right - 62', 'bottom - 70', $calorias);
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