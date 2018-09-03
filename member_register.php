<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html" />
<meta name="author" content="LiveLong" />

<title>Membership Registration Form</title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script>
</head>

<body>
        <?php
        
        // require_once('includes/class-phpass.php');
        $db_hostname = 'localhost';
        $db_username = 'root';
        $db_password = '';
        $db_name = 'wp';
        
        
        
        $con = mysql_connect($db_hostname, $db_username, $db_password);
        mysql_select_db($db_name, $con);
        if (! $con) {
            die('Could not connect: ' . mysql_error());
        }
        
        if (isset($_POST['register'])) {
            
            $email_id = $_POST['email_id'];
            $username = $_POST['username'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $father_husband_name = $_POST['father_husband_name'];
            $dob = $_POST['date'];
            $gender = $_POST['gender'];
            $blood_group = $_POST['blood_group'];
            $registration_type = $_POST['registration_type'];
            $address = $_POST['address'];
            $city_village = $_POST['city_village'];
            $pincode = $_POST['pincode'];
            $state = $_POST['state'];
            $category = $_POST['category'];
            $profession = $_POST['profession'];
            
            $hash = $user->user_pass;
            echo $wp_hasher = new PasswordHash(8, TRUE);
            $check = $wp_hasher->CheckPassword($password, $hash);
        }
        
        ?>
        <form action="member_register.php" method="post">
		<table border="0" width="60%">
			<tr>
				<td>
					<fieldset>
						<legend>Account Details</legend>
						<table border="0" width="70%">
							<tr>
								<td align="right">E-Mail Id :</td>
								<td><input type="text" name="email_id" value="" size="30" /></td>
							</tr>
							<tr>
								<td align="right">Username :</td>
								<td><input type="text" name="username" value="" size="30" /></td>
							</tr>
							<tr>
								<td align="right">Mobile :</td>
								<td><input type="text" name="mobile" value="" size="30" /></td>
							</tr>
							<tr>
								<td align="right">Password :</td>
								<td><input type="password" name="password" value="" size="30" /></td>
							</tr>
							<tr>
								<td align="right">Confirm Password :</td>
								<td><input type="password" name="cpassword" value="" size="30" /></td>
							</tr>
						</table>
					</fieldset>

				</td>
			</tr>

			<tr>
				<td>
					<fieldset>
						<legend>Personal Information</legend>
						<table border="0" width="70%">
							<tr>
								<td align="right">Firstname :</td>
								<td><input type="text" name="fname" value="" size="30" /></td>
							</tr>
							<tr>
								<td align="right">Lastname :</td>
								<td><input type="text" name="lname" value="" size="30" /></td>
							</tr>
							<tr>
								<td align="right">Father / Husband Name :</td>
								<td><input type="text" name="father_husband_name" value=""
									size="30" /></td>
							</tr>
							<tr>
								<td align="right">D.O.B :</td>
								<td><input type="text" name="date" class="tcal" value=""
									size="30" /></td>
							</tr>
							<tr>
								<td align="right">Gender :</td>
								<td><input type="radio" name="gender" value="Male" checked="yes" />&nbsp;Male&nbsp;<input
									type="radio" name="gender" value="Female" />&nbsp;Female</td>
							</tr>
							<tr>
								<td align="right">Blood Group :</td>
								<td><select name="blood_group">
										<option value="0">Select ---</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
								</select></td>
							</tr>
							<tr>
								<td align="right">Registration Type :</td>
								<td><input type="radio" name="registration_type" value="Member"
									checked="yes" />&nbsp;Member&nbsp;<input type="radio"
									name="registration_type" value="Volunteer" />&nbsp;Volunteer</td>
							</tr>
							<tr>
								<td align="right">Address :</td>
								<td><textarea name="address" rows="6" cols="40"></textarea></td>
							</tr>
							<tr>
								<td align="right">City/Village :</td>
								<td><input type="text" name="city_village" value="" size="30" /></td>
							</tr>
							<tr>
								<td align="right">Pincode :</td>
								<td><input type="text" name="pincode" value="" size="30" /></td>
							</tr>
							<tr>
								<td align="right">State :</td>
								<td><input type="text" name="state" value="" size="30" /></td>
							</tr>
							<tr>
								<td align="right">Category :</td>
								<td><select name="category">
										<option value="0">Select ---</option>
										<option value="General">General</option>
										<option value="SC/ST">SC/ST</option>
										<option value="OBC">OBC</option>
										<option value="Minority">Minority</option>
								</select></td>
							</tr>
							<tr>
								<td align="right">Profession :</td>
								<td><input type="text" name="profession" value="" size="30" /></td>
							</tr>

						</table>
					</fieldset>

				</td>
			</tr>

			<tr>
				<td height="10"></td>
			</tr>

			<tr align="center">
				<td><input type="submit" name="register" value="Register" />&nbsp;<input
					type="reset" name="reset" value="Reset" /></td>
			</tr>
		</table>
	</form>
</body>
</html>