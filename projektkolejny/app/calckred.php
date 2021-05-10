<?php

require_once dirname(__FILE__).'/../config.php';
// kontroler
require_once $conf->root_path.'/app/calckred_ctrl.class.php';

//tworzenie obiektu
$ctrl = new calckred_ctrl();
$ctrl->process();
