<?php
declare(strict_types = 1);

define('DB_HOST', 'localhost');
define('DB_NAME', 'thiago_nicolas');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('ROOT_PATH', $_SERVER["DOCUMENT_ROOT"] . "/aulas/thiago_nicolas");
define('VIEW_PATH', ROOT_PATH . "/views");

require_once "./Database.php";
require_once "./Controller.php";