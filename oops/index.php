<html>
<head>
<title>OOPS IN PHP</title>
</head>
<body>

<?php 

	require_once('class_lib.php');
	$husband = new person('Kondalarao Seeram');  // To create an object out of the class you need to use new keyword
	$wife = new person('Deepika Seeram');

	/*$husband->set_name('Kondalarao Seeram');
	$wife->set_name('Deepika Seeram');*/

	echo "Husband's name :" . ' '. $husband->get_name();
	echo "<br />";
	echo "Pin Number :". ' '. $husband->$pin_number;
	echo "<br />";
	echo "Wife's name :" . ' '. $wife->get_name();


?>



</body>
</html>
