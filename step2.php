<?php

session_start();

if(isset($_POST['submit'])){

	echo $name = $_POST['name'];

	

 	
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