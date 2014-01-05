<?php

// Always provide a TRAILING SLASH (/) AFTER A PATH

define('URL', 'http://localhost/news/');
define('LIBS', 'libs/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'news');
define('DB_USER', 'root');
define('DB_PASS', 'toor');

// The sitewide hashkey, do not chaneg this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only.
define('HASH_PASSWORD_KEY', 'catsFLYhigh@200miles');
?>