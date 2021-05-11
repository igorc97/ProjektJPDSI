<?php

require_once dirname(__FILE__).'/../config.php';
$action = $_REQUEST["action"];

switch ($action) {
    default : // 'calcView'
        // załaduj definicję kontrolera
        include_once $conf->root_path.'/app/calckred/calckred_ctrl.class.php';
        // utwórz obiekt i uzyj
        $ctrl = new calckred_ctrl();
        $ctrl->generateView ();
        break;
    case 'calcCompute' :
        // załaduj definicję kontrolera
        include_once $conf->root_path.'/app/calckred/calckred_ctrl.class.php';
        // utwórz obiekt i uzyj
        $ctrl = new calckred_ctrl();
        $ctrl->process ();
        break;
    case 'action1' :
        // zrób coś innego ...
        break;
    case 'action2' :
        // zrób coś innego ...
        break;
}
//// kontroler
//require_once $conf->root_path.'/app/calckred_ctrl.class.php';
//
////tworzenie obiektu
//$ctrl = new calckred_ctrl();
//$ctrl->process();
