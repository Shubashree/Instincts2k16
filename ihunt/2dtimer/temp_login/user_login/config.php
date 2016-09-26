<?php

require_once 'messages.php';


define( 'BASE_PATH', 'http://www.instincts.org.in/temp_login/user_login/index.php');
define( 'DB_HOST', 'http://www.instincts.org.in/' );
define( 'DB_USERNAME', 'dbadmin');
define( 'DB_PASSWORD', 'zyqugagu5');
define( 'DB_NAME', 'zadmin_instincts');

define('FB_APP_ID', '1376181406028283');
define('FB_APP_SECRET', 'b289ba0ecc26ac57ec721b15c74fb88c');
define('FB_REDIRECT_URI', 'http://www.instincts.org.in/temp_login/user_login/');

function __autoload($class)
{
  $parts = explode('_', $class);
  $path = implode(DIRECTORY_SEPARATOR,$parts);
  require_once $path . '.php';
}
