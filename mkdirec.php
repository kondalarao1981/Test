<?php


$name = 'ishwaryas it techno solutions';



// Desired folder structure
$structure = 'photographers/'.ucwords($name).'/Logo';



if(!is_dir($structure)){

	mkdir($structure, 0777, true);

}


?>