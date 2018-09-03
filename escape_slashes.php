<?php

$str = array();
$filepath = 'uploads/images';

$str['url'] = 'http://www.google.com/example/'. $filepath;
$str['response'] = 'Sucess';

echo json_encode($str, JSON_UNESCAPED_SLASHES);

?>