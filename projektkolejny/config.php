<?php

$conf->server_name = 'localhost:80';
$conf->server_url = 'https://'.$conf->server_name;
$conf->app_root = '/projektkolejny';
$conf->action_root = $conf->app_root.'/calckred.php?action=';

$conf->action_url = $conf->server_url.$conf->action_root;
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);
?>

