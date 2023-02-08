<?php
require_once '../app/bootstrap.php';

//init core library

$init = new Core;

?>
<?php

$pattern = '/\d+/';
$str = 'PHP first released in 8 June 1995';

if (preg_match($pattern, $str, $matches)) {
    print_r($matches);
}