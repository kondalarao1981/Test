<?php
session_start();
?>
<html>
<head></head>
<body>

<?php

	if(isset($_POST['step1'])){


		$name = $_POST['name'];
		$email = $_POST['email_address'];


	}

?>



<form method="post" action="form3.php">
<input type="radio" name="membership_type" value="Free">Free
 
<input type="radio" name="membership_type" value="Normal">Normal
 
<input type="radio" name="membership_type" value="Deluxe">Deluxe
 
<input type="checkbox" name="terms_and_conditions" value="Terms">Terms
 
<input type="hidden" name="name" value="<?php echo $name; ?>">
 
<input type="hidden" name="email_address" value="<?php echo $email; ?>">
  
<input type="submit" name="step2" value="Go To Step 3">
</form>
</body>
</html>
