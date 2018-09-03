<?php

require_once('Config.php');
$sel_menu = mysql_query("SELECT * FROM rk_pages WHERE pcat = 0");

?>
<html>
<head></head>
<body>

<select>
	<?php

	while($data = mysql_fetch_array($sel_menu)){
    echo $page_id = $data['page_id'];
    $pcat = $data['pcat'];
    $page_title = $data['page_title'];
    $page_name = $data['page_name'];
    
    if($page_title == 'HOME'){
        $class_name = 'active';
    }else{
        $class_name = '';
    }       

    ?>
    	<option value="<?php echo $page_title;?>"><?php echo $page_title;?></option><br />


    	<?php                          

    $sel_submenu = mysql_query("SELECT * FROM rk_pages WHERE pcat = '".$page_id."'");

	while($data_sub = mysql_fetch_array($sel_submenu)){

		$subcat_name = $data_sub['page_title'];
	 

	?>


<option value="<?php echo $subcat_name;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $subcat_name;?></option>

<?php }

}
 

 ?>

</select>

</body>