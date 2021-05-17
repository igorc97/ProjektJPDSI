<?php
require_once 'init.php';

switch ($action) {
    default : // 'calcView'
        // załaduj definicję kontrolera
        include_once $conf->root_path.'/app/controllers/calckred_ctrl.class.php';
        // utwórz obiekt i uzyj
        $ctrl = new calckred_ctrl();
        $ctrl->generateView ();
        break;
    case 'calcCompute' :
        // załaduj definicję kontrolera
        include_once $conf->root_path.'/app/controllers/calckred_ctrl.class.php';
        // utwórz obiekt i uzyj
        $ctrl = new calckred_ctrl();
        $ctrl->process ();
        break;
    case 'action1' :

        break;
    case 'action2' :

        break;
}
//// kontroler
//require_once $conf->root_path.'/app/calckred_ctrl.class.php';
//
////tworzenie obiektu
//$ctrl = new calckred_ctrl();
//$ctrl->process();
