<?php
namespace app\controllers;
use app\forms\calckred_form;
use app\transfer\calckred_result;

class calckred_ctrl{
    private $form;
    private $result;

    public function __construct()
    {
        $this->form = new calckred_form();
        $this->result = new calckred_result();
    }

    public function getParams(){
        $this->form->x = getFromRequest('x');
        $this->form->y = getFromRequest('y');
        $this->form->z = getFromRequest('z');
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
        if(!getMessages()->isError()){
            if(!is_numeric($this->form->x)){
                getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
            }
            if(!is_numeric($this->form->y)){
                getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
            }
        }
        return ! getMessages()->isError();
    }
    public function action_calcCompute(){

        $this->getParams();

        if ($this->validate()){
            $this->form->x = intval($this->form->x);
            $this->form->y = intval($this->form->y);
            $this->form->z = floatval($this->form->z);
            getMessages()->addInfo('Parametry poprawne');

            $this->form->miesiac = $this->form->y*12;
          //  $miesiac = $this->form->y*12;
            $this->form->oproc = ($this->form->z/100)*$this->form->x;
           // $oproc = ($this->form->z/100)*$this->form->x;
            $this->form->oprocwskalimiesiaca = $this->form->oproc / $this->form->miesiac;
          //  $oprocwskalimiesiaca = $oproc / $miesiac;
            $this->result->result = $this->form->x/$this->form->miesiac;
            $this->result->resultfinal = $this->result->result + $this->form->oprocwskalimiesiaca;
           // $result =$this->form->x/$miesiac;
         //   $resultfinal = $result + $oprocwskalimiesiaca;

        getMessages()->addInfo('Wykonano obliczenia');
            try {
                $database = new \Medoo\Medoo([
                   'database_type' => 'mysql',
                   'database_name' => 'kredyt',
                   'server' => 'localhost',
                   'username' => 'root',
                   'password' => '',
                   'charset' => 'utf8',
                   'collation' => 'utf8_polish_ci',
                   'port' => 3306,
                   'option' => [
                       \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                       \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                   ]
                ]);
                $database->insert("wynik",[
                    "kwota" => $this->form->x,
                    "lat" => $this->form->y,
                    "procent" => $this->form->z,
                    "rata" => $this->result->resultfinal,
                    "data" => date("Y-m-d H:i:s")
                ]);
            } catch (\PDOException $exception){
                getMessages()->addError("DB Error: ".$exception->getMessage());
            }
    }
        $this->generateView();
}
    public function action_calcShow(){
        getMessages()->addInfo('Witaj w kalkulatorze');
        $this->generateView();
    }

    public function generateView()
{
    getSmarty()->assign('user',unserialize($_SESSION['user']));
    getSmarty()->assign('page_title','Role');
    getSmarty()->assign('form', $this->form);
    getSmarty()->assign('res', $this->result);

    getSmarty()->display('calckred_view.tpl');
}
}


