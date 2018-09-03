<?php

session_start();

echo $_POST['hid_name'];
echo "<br />";

if(isset($_POST['submit'])){

	echo $addr = $_POST['addr'];

	
	

}


?>
<html>
<head></head>
<body>
<form action="step3.php" method="post">
Address : <input type="text" name="addr" value=""><br />
<input type="submit" name="submit" value="Next">

<input type="hidden" name="hid_name" value="<?php echo $name;?>">

</form>
</body>
</html>