<?php
// database host
$db_host   = "120.25.84.174:3306";

// database name
$db_name   = "jingdong";

// database username
$db_user   = "root";

// database password
$db_pass   = "admin";

// table prefix
$prefix    = "ecs_";

$timezone    = "UTC";

$cookie_path    = "/";

$cookie_domain    = "";

$session = "1440";

define('EC_CHARSET','utf-8');

if(!defined('ADMIN_PATH'))
{
define('ADMIN_PATH','admin');
}

define('AUTH_KEY', 'this is a key');

define('OLD_AUTH_KEY', '');

define('API_TIME', '2016-09-19 00:51:11');

?>
