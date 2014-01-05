<?php

require 'config.php';

// This is autoloader for libs files.
function __autoload($class)
{
	require LIBS . $class .".php";
}

$app = new Bootstrap();