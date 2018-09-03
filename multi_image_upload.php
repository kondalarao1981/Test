<html>
<head></head>
<body>

<form enctype="multipart/form-data" action="" method="post">
First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 100KB.
<div id="filediv"><input name="file[]" type="file" id="file" multiple/></div>
<input type="button" id="add_more" class="upload" value="Add More Files"/>
<input type="submit" value="Upload File" name="submit" id="upload" class="upload"/>
</form>
<?php

	if(isset($_POST['submit'])){


		$target_path = "uploads/"; 

		for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
			//$ext = explode('.', basename($_FILES['file']['name'][$i])); 
			//$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];  

			$target_path = $target_path .  $_FILES['file']['name'][$i];

			move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path);

		}
	}



?>
</body>
</html>