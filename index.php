<?php

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", realpath(dirname(__FILE__)).DS);
define("APP_PATH", ROOT."aplication".DS);

require_once(APP_PATH."config.php");
require_once(APP_PATH."autoload.php");
require_once(APP_PATH."database.php");
require_once(APP_PATH."request.php");
require_once(APP_PATH."bootstrap.php");
require_once(APP_PATH."controller.php");
require_once(APP_PATH."model.php");
require_once(APP_PATH."Helper.php");
require_once(APP_PATH."view.php");

try {
	Bootstrap::run(new Request);
} catch (Exception $e) {
	echo $e->getMessage();
}