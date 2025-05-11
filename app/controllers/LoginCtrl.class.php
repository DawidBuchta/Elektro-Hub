<?php
namespace app\controllers;

use app\forms\LoginForm;
use app\transfer\User;
use core\ParamUtils;
use core\App;
use core\SessionUtils;
use core\RoleUtils;

class LoginCtrl{
    
    private $form;  
   
    
    
    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new LoginForm();
	}

    function getParamsLogin(){
          $this->form->login = ParamUtils::getFromRequest('login');
          $this->form->password = ParamUtils::getFromRequest('pass');
    }
    //sprawdza czy uzytkownik jest w bazie
    function isaccount($login,$password)
    {
        if(App::getDB()->has("uzytkownicy",["AND"=>["login"=>$login,"password"=>$password]])){
              return true; 
        }else
                    return false;   
    }

    //walidacja parametrów z przygotowaniem zmiennych dla widoku
    public function validateLogin(){
        
        
      
        
       if(SessionUtils::loadObject('user', true))
              return true;
        
        $this->getParamsLogin();
        
        
            // sprawdzenie, czy parametry zostały przekazane
            if ( ! (isset($this->form->login) && isset($this->form->password))) {
                    //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
                    return false;
            }

            // sprawdzenie, czy potrzebne wartości zostały przekazane
            if ( $this->form->login == "") {
                
               App::getMessages()->addMessage(new \core\Message("nie podano loginu", \core\Message::ERROR));
                    
            }
            if ( $this->form->password == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano hasła", \core\Message::ERROR));
            }

            //nie ma sensu walidować dalej, gdy brak parametrów
            if (App::getMessages()->isError()) return false;
            
           

          // sprawdza czy uzytkownik jest w bazie i wrzuca dane uzytkownika do sesji oraz dodaje role
            if ($this->isaccount($this->form->login, $this->form->password)) {
                  
                   $data_user=App::getDB()->get(
                           "uzytkownicy",
                           ["[><]role"=>["id_Roli"=>"id_Roli"]],
                           ["uzytkownicy.id_uzytkownika","uzytkownicy.login","role.nazwa_roli"],
                           ["AND"=>["login"=>$this->form->login,"password"=>$this->form->password]]);
                    //  $rola=$data_user["nazwa_roli"];
                      
                    RoleUtils::addRole($data_user["nazwa_roli"]);
                    SessionUtils::storeObject('user',$data_user);
                    
                       
                     
            }else
            {
               App::getMessages()->addMessage(new \core\Message("Nie poprawny login lub hasło", \core\Message::ERROR));
            }
            return ! App::getMessages()->isError();
    }
    
    public function action_login(){
        
		$this->getParamsLogin();
		
		if ($this->validateLogin()){
			//zalogowany => przekieruj na stronę główną, gdzie uruchomiona zostanie domyślna akcja
              
                        
			header("Location: ".App::getConf()->app_url."/");
		} else {
			//niezalogowany => wyświetl stronę logowania
			$this->generateView(); 
		}
		
	}
        
    public function action_logout(){
		// 1. zakończenie sesji - tylko kończymy, jesteśmy już podłączeni w init.php
                unset($_SESSION);
		session_destroy();
		
		// 2. wyświetl stronę logowania z informacją
		 App::getMessages()->addMessage(new \core\Message("Poprawnie wylogowano z systemu", \core\Message::INFO));
                 // w celu poprawnego wyswietlania przyciskow po wylogowaniu
                $user = SessionUtils::loadObject('user',false);
                App::getSmarty()->assign('user',$user);
		$this->generateView();		 
	}
    
   public function generateView(){
            
         
            
            App::getSmarty()->display("login_view.tpl");
            
            exit();
   
    }
}


