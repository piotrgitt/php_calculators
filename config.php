<?php
$config->server_name = 'localhost';
$config->server_url = 'http://'.$config->server_name;
$config->app_root = '/php_calculators';
$config->app_url = $config->server_url.$config->app_root;
$config->root_path = dirname(__FILE__);


$config->action_root = $config->app_root.'/ctrl.php?action=';
$config->action_url = $config->app_url.'/ctrl.php?action=';

?>