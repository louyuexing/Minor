<?php
/**
 * Minor : A Simple PHP Framework
 *
 * @package Minor
 * @author  Orlion <orlion@foxmail.com>
 */
define('APP_ROOT' , dirname($_SERVER['PHP_SELF']));

require __DIR__ . '/../MinorCore/Autoload/Autoload.php';

Core::run();
?>