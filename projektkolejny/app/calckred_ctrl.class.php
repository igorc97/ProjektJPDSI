<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/app/calckred_form.class.php';
require_once $conf->root_path.'/app/calckred_result.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';

class calckred_ctrl{
    private $msgs;
    private $form;
    private $result;

    public function __construct()
    {
        $this->msgs = new Messages();
        $this->form = new calckred_form();
        $this->result = new calckred_result();
    }

    public function getParams(){
        $this->form->x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
        $this->form->y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
        $this->form->z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
    }

    public function validate(){
        if ( ! (isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) {
            return false;
        }

        if ($this->form->x == "") {
            $this->msgs->addError('Nie podano kwoty');
        }
        if ($this->form->y == "") {
            $this->msgs->addError('Nie podano okresu');
        }
        if ($this->form->z == "") {
            $this->msgs->addError('Nie podano oprocentowania');
        }
        if (! $this->msgs->isError()){
            if (! is_numeric($this->form->x)) {
                $this->msgs->addError('Kwota nie jest liczbą całkowitą');
            }
            if (! is_numeric($this->form->z)) {
                $this->msgs->addError('Oprocentowanie nie jest liczbą całkowitą');
            }
        }

        return ! $this->msgs->isError();
    }
    public function process(){

        $this->getParams();

        if ($this->validate()){
            $this->form->x = intval($this->form->x);
            $this->form->y = intval($this->form->y);
            $this->form->z = floatval($this->form->z);
            $this->msgs->addInfo('Parametry poprawne.');

            $miesiac = $this->form->y*12;
            $oproc = ($this->form->z/100)*$this->form->x;
            $oprocwskalimiesiaca = $oproc / $miesiac;
            $result =$this->form->x/$miesiac;
            $result = $result + $oprocwskalimiesiaca;

        $this->msgs->addInfo('Wykonano obliczenia.');
    }
        $this->generateView();
}
public function generateView()
{
    global $conf;

    $smarty = new Smarty();
    $smarty->assign('conf', $conf);

    $smarty->assign('page_title', 'Kalkulator kredytowy');
    $smarty->assign('page_description', 'Zapraszam do skorzystania z kalkulatora');
    $smarty->assign('page_header', '1234');

    $smarty->assign('msgs', $this->msgs);
    $smarty->assign('form', $this->form);
    $smarty->assign('res', $this->result);

    $smarty->display($conf->root_path.'/app/calckred_view.html');
}
}


