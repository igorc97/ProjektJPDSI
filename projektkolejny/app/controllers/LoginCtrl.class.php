<?php
namespace app\controllers;
use app\transfer\User;
use app\forms\LoginForm;

class LoginCtrl
{
    private $form;

    public function __construct(){
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function getParams(){
        // 1. pobranie parametrów
        $this->form->login = getFromRequest('login');
        $this->form->pass = getFromRequest('pass');
    }

    public function validate() {
        // sprawdzenie, czy parametry zostały przekazane
        if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
            // sytuac wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false;
        }

        // nie ma sensu walidować dalej, gdy brak parametrów
        if (! getMessages()->isError ()) {


            if ($this->form->login == "") {
                getMessages()->addError ( 'Nie podano loginu' );
            }
            if ($this->form->pass == "") {
                getMessages()->addError ( 'Nie podano hasła' );
            }
        }


        if ( !getMessages()->isError() ) {
            // sprawdzenie, czy dane logowania poprawne
            // (takie informacje najczęściej przechowuje się w bazie danych)
            if ($this->form->login == "admin" && $this->form->pass == "admin") {


                $user = new User($this->form->login, 'admin');

                $_SESSION['user'] = serialize($user);

                addRole($user->role);

            } else if ($this->form->login == "user" && $this->form->pass == "user") {


                $user = new User($this->form->login, 'user');

                $_SESSION['user'] = serialize($user);

                addRole($user->role);
            } else {
                getMessages()->addError('Niepoprawny login lub hasło');
            }
        }

        return ! getMessages()->isError();
    }

    public function action_login(){

        $this->getParams();

        if ($this->validate()){
            //zalogowany => przekieruj na stronę główną, gdzie uruchomiona zostanie domyślna
            header("Location: ".getConf()->app_url."/");
        } else {
            //niezalogowany => wyświetl stronę logowania
            $this->generateView();
        }

    }

    public function action_logout(){
        session_destroy();

        getMessages()->addInfo('Poprawnie wylogowano z systemu');

        $this->generateView();
    }

    public function generateView(){

        getSmarty()->assign('page_title','Strona logowania');
        getSmarty()->assign('form',$this->form);
        getSmarty()->display('LoginView.tpl');
    }
}