<?php
session_start();
?>
<html>
<head></head>
<body>


<?php

if(isset($_POST['step2'])){

	$hid_name = $_POST['name']."<br />";
	$hid_email = $_POST['email_address']."<br />";
	$hid_member = $_POST['membership_type']."<br />";
	$hid_terms = $_POST['terms_and_conditions']."<br />";




}


if(isset($_POST['submit'])){

	echo $name = $_POST['hid_fname']."<br />";
	echo $email = $_POST['hid_femail_address']."<br />";
	echo $member = $_POST['hid_fmembership_type']."<br />";
	echo $terms = $_POST['hid_fterms_and_conditions']."<br />";
	echo $name_on_card = $_POST['name_on_card']."<br />";
	echo $credit_card_number = $_POST['credit_card_number']."<br />";
	echo $credit_card_expiration_date = $_POST['credit_card_expiration_date']."<br />";
}



?>


<form method="post" action="form3.php">
 
<input type="text" name="name_on_card">
 
<input type="text" name="credit_card_number">
 
<input type="text" name="credit_card_expiration_date">


 
<input type="hidden" name="hid_fname"
 value="<?php echo $hid_name; ?>">
  
<input type="hidden" name="hid_femail_address"
 value="<?php echo $hid_email;?>">
  
<input type="hidden" name="hid_fmembership_type"
 value="<?php echo $hid_member; ?>">
  
<input type="hidden" name="hid_fterms_and_conditions"
  value="<?php echo $hid_terms; ?>">
   
<input type="submit" name="submit" value="Finish">
</form>
</body>
</html>
