<?php

ini_set('display_errors','On');

define('APP_ROOT',__DIR__);
define('VIEW_ROOT', APP_ROOT. '/views');
define('BASE_URL','http://localhost:8000');

$db = new PDO('mysql:host=localhost;dbname=Simple CMS','root','pass');

require 'function.php';
