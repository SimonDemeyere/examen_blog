<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', DS . 'Users' . DS . 'SimonMac' . DS . 'syntra_west' . DS . 'examen_blog');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');
defined('IMAGES_PATH') ? null : define('IMAGES_PATH', SITE_ROOT.DS.'admin'.DS.'img');

require_once(INCLUDES_PATH.DS."functions.php");
require_once(INCLUDES_PATH.DS."config.php");
require_once(INCLUDES_PATH.DS."Database.php");
require_once(INCLUDES_PATH.DS."DbObject.php");
require_once(INCLUDES_PATH.DS."User.php");
require_once(INCLUDES_PATH.DS."Post.php");
require_once(INCLUDES_PATH.DS."Photo.php");
require_once(INCLUDES_PATH.DS."Category.php");
require_once(INCLUDES_PATH.DS."Comment.php");
require_once(INCLUDES_PATH.DS."Role.php");
require_once(INCLUDES_PATH.DS."Session.php");
?>
