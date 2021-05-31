<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcShow');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('calcShow',    'calckred_ctrl',  ['user','admin']);
getRouter()->addRoute('calcCompute', 'calckred_ctrl',  ['user','admin']);
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);

getRouter()->go();
