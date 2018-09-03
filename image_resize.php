<?php 

 define ("MAX_SIZE","400");

 $errors=0;
 
/* if($_SERVER["REQUEST_METHOD"] == "POST")
 {*/
        $image ='test.jpg'; //$_FILES["file"]["name"];
 		//$uploadedfile = 'test.jpg';

  if ($image) 
  {
  
 
list($width,$height)=getimagesize($uploadedfile);

$newwidth=60;
$newheight=($height/$width)*$newwidth;
$tmp=imagecreatetruecolor($newwidth,$newheight);

$newwidth1=25;
$newheight1=($height/$width)*$newwidth1;
$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,
 $width,$height);

imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1, 
$width,$height);

$filename = "uploads/". $image;
$filename1 = "images/small". $image;

imagejpeg($tmp,$filename,100);
imagejpeg($tmp1,$filename1,100);

imagedestroy($src);
imagedestroy($tmp);
imagedestroy($tmp1);
}
//}
//}
//If no errors registred, print the success message

 /*if(isset($_POST['Submit']) && !$errors) 
 {
   // mysql_query("update SQL statement ");
  echo "Image Uploaded Successfully!";

 }*/
 ?>