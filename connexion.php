<?php

define('DB_HOST', 'localhost');
define('DB_PORT', '8889');
define('DB_DATABASE', 'cindys_cakes');
define('DB_USERNAME', 'tintin');
define('DB_password', 'AZERT');

$database = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_password);