<?php

/*$name = "James Watson";
$address = "Baltimore, Maryland";
$exp = explode(",", $address);
$string = preg_replace('/\s+/', '', $exp);

$count = count($exp);

$address1 = $string[0];
$address2 = $string[1];

$category = "B.C";
$post = "SOFTWARE ENGINEER";

$contact_no = "9999999999";
$unique_id = "YSRCP_58W_VOLUNTEER_64";
$bloood_group = "O+";

$user_photo = 'test.png';

$file_location = 'uploads/';

header("Content-type: image/png");
$string = $name;
$str_addr = $address;
$str_contact = $contact_no;
$str_uniq = $unique_id;
$str_bgroup = $bloood_group;


$im     = imagecreatefrompng("MEMBERSHIP.png");

$black = imagecolorallocate($im, 0, 0, 0);

$px     = (imagesx($im) - 6.5 * strlen($string)) / 2;
$px1     = (imagesx($im) - 7.5 * strlen($string)) / 2;
$px2     = (imagesx($im) - 7.5 * strlen($string)) / 2;
$px3     = (imagesx($im) - 7.5 * strlen($string)) / 2;
$px4     = (imagesx($im) - -7.0 * strlen($string)) / 2;

imagestring($im, 3, $px, 48, $name, $black);

imagestring($im, 3, $px, 63, $address1, $black);
imagestring($im, 3, $px, 75, $address2, $black);

imagestring($im, 3, $px, 126, $contact_no, $black);
imagestring($im, 3, $px, 140, $unique_id, $black);
imagestring($im, 3, $px, 154, $bloood_group, $black);

imagepng($im);
imagedestroy($im);*/

imagepng(imagecreatefromstring(file_get_contents('test.jpg')), "output.png");
$im = imagecreatefrompng('test.png');
$size = min(imagesx($im), imagesy($im));
$im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => 50, 'height' => 50]);
if ($im2 !== FALSE) {
    imagepng($im2, 'example-cropped.png');
}

?>