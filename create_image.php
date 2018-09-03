<?php

error_reporting(0);

if(isset($_POST['submit'])){

$name = "KONDALARAO SEERAM";

$address = $_POST['address'];
$exp = explode(",", $address);
$string = preg_replace('/\s+/', '', $exp);

$count = count($exp);

$address1 = $string[0];
$address2 = $string[1];
$address3 = $string[2];
$address4 = $string[3];

$category = "B.C";
$post = "SOFTWARE ENGINEER";

$contact_no = "+91-9701858562";
$unique_id = "YSRCP_58W_VOLUNTEER_64";
$bloood_group = "O+";


$file_location = 'uploads/';

header("Content-type: image/png");
$string = $name;
$str_addr = $address;
$str_contact = $contact_no;
$str_uniq = $unique_id;
$str_bgroup = $bloood_group;

$membership_card = "Kondalarao-Seeram-Membership-Card";

$imgPath = 'test.png';

$test = 'Test';

$im1     = imagecreatefrompng($imgPath);

$im     = imagecreatefrompng("VOLUNTEER.png");

$black = imagecolorallocate($im, 0, 0, 0);

$px     = (imagesx($im) - 6.5 * strlen($string)) / 2;
$px1     = (imagesx($im) - 7.5 * strlen($string)) / 2;
$px2     = (imagesx($im) - 7.5 * strlen($string)) / 2;
$px3     = (imagesx($im) - 7.5 * strlen($string)) / 2;
$px4     = (imagesx($im) - -7.0 * strlen($string)) / 2;

imagestring($im, 3, $px, 48, $name, $black);

imagestring($im, 3, $px, 63, $address1, $black);
imagestring($im, 3, $px, 75, $address2, $black);
imagestring($im, 3, $px, 87, $address3, $black);
imagestring($im, 3, $px, 99, $address4, $black);

imagecreatefrompng($im, 3, $px4, 102, $imgPath, $black);

imagestring($im, 3, $px, 126, $contact_no, $black);
imagestring($im, 3, $px, 140, $unique_id, $black);
imagestring($im, 3, $px, 154, $bloood_group, $black);

imagepng($im);
imagedestroy($im);

}


?>

<html>
	<head></head>
	<body>
		<form action="create_image.php" method="post">

			<textarea rows="6" cols="40" name="address"></textarea><br />
			<input type="file" name="photo" />

			<input type="submit" name="submit" value="Submit" />

		</form>
	</body>
</html>	