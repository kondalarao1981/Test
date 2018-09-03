<?php


$format = array('userID' => '75', 'text' => 'This is a sample test for testing the JSON', 'photo' => '0123123' );

echo $encoded = json_encode($format);

$data = json_decode($encoded);
/*echo "<pre>";
print_r($data);*/

$userID = $data->userID;
$text = $data->text;
$photo = $data->photo;

if($photo!= 0){

	$photo = $data->photo;
}
if($photo == 0){
	$photo = 'Photo Empty';
}

echo $photo;






?>