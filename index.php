<?php

require 'config/paths.php';
require 'config/database.php';
require 'config/constants.php';

// This is autoloader for libs files.
function __autoload($class)
{
	require LIBS . $class .".php";
}

$app = new Bootstrap();