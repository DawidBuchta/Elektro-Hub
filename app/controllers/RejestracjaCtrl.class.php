<?php
namespace app\controllers;

use app\forms\RejestracjaForm;
use app\transfer\User;
use core\ParamUtils;
use core\App;
use core\SessionUtils;
use core\RoleUtils;

class RejestracjaCtrl{
    
    private $form;  

    
    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new RejestracjaForm();
	}

    function getParamsLogin(){
          $this->form->login = ParamUtils::getFromRequest('login');
          $this->form->password = ParamUtils::getFromRequest('password');
          $this->form->imie = ParamUtils::getFromRequest('imie');
          $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
          $this->form->miasto = ParamUtils::getFromRequest('miasto');
          $this->form->ulica = ParamUtils::getFromRequest('ulica');
          $this->form->kodpocztowy = ParamUtils::getFromRequest('kodpocztowy');
          $this->form->email = ParamUtils::getFromRequest('email');
          
    }
    //sprawdza czy uzytkownik jest w bazie
    function isaccount($login)
    {
        if(App::getDB()->has("uzytkownicy",["login"=>$login])){
              return true; 
        }else
                    return false;   
    }
    function getid()
    {       
                return App::getDB()->get("uzytkownicy","id_uzytkownika",["login"=>$this->form->login]);
        
    }

    //walidacja parametrów z przygotowaniem zmiennych dla widoku
    public function validateRegister(){
        
    
        $this->getParamsLogin();
        
        
            // sprawdzenie, czy parametry zostały przekazane sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza    
                 if ( ! (isset($this->form->login) && isset($this->form->password))) {
                    //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
                    return false;
            }
                


            // sprawdzenie, czy potrzebne wartości zostały przekazane
            if ( $this->form->login == "") {
                
               App::getMessages()->addMessage(new \core\Message("nie podano Loginu", \core\Message::ERROR));
                    
            }
            if ( $this->form->password == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano Hasła", \core\Message::ERROR));
            }
            if ( $this->form->imie == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano Imienia", \core\Message::ERROR));
            }
            if ( $this->form->nazwisko == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano Nazwiska", \core\Message::ERROR));
            }
            if ( $this->form->miasto == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano Miasta", \core\Message::ERROR));
            }
            if ( $this->form->ulica == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano Ulicy", \core\Message::ERROR));
            }
            if ( $this->form->kodpocztowy == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano Kodu Pocztowego", \core\Message::ERROR));
            }
            if ( $this->form->email == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano Email", \core\Message::ERROR));
            }
            
            if (App::getMessages()->isError()) return false;

            if ($this->isaccount($this->form->login)) {
                
              App::getMessages()->addMessage(new \core\Message("Użytkownik o takim loginie już istnieje", \core\Message::ERROR));
                    
            }
            //nie ma sensu walidować dalej, gdy brak parametrów
            
            
             if ( strlen($this->form->login)<=4 ) {
                
               App::getMessages()->addMessage(new \core\Message("login musi mieć minimum 5 znaków", \core\Message::ERROR));
                    
            }
            //Prosta weryfiakcja sily hasla 
            // minimum 1 duża i mała litera, 1 cyfra, minimum 4 znaki 
            if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z]).{4,}$/",$this->form->password))  {
                
               App::getMessages()->addMessage(new \core\Message("Hasło musi mieć minimum 5 znaków, zawierać 1 dużą oraz 1 mała literę i 1 cyfrę", \core\Message::ERROR));
                    
            }

            //weryfikacja adresu email
            
            if (!filter_var($this->form->email, FILTER_VALIDATE_EMAIL)) {
            
            App::getMessages()->addMessage(new \core\Message("niepoprawny adres email", \core\Message::ERROR));

            }
            //weryfiakcja kodu pocztowego
            if (!preg_match("/^\d{2}-\d{3}$/",$this->form->kodpocztowy))  {
                
               App::getMessages()->addMessage(new \core\Message("Nieporpawny kod pocztowy, wymagany format to XX-XXX", \core\Message::ERROR));
                    
            }
            
            
            if(!App::getMessages()->isError())
            {
            try {
                
               App::getDB()->insert("uzytkownicy",[
                    "login"=>$this->form->login , 
                    "password"=>$this->form->password ,
                     "Imie"=>$this->form->imie,
                    "Nazwisko"=>$this->form->nazwisko,
                    "Miasto"=>$this->form->miasto,
                    "Ulica"=>$this->form->ulica,
                    "KodPocztowy"=>$this->form->kodpocztowy,
                    "email"=>$this->form->email,
                    "id_kto_stw"=>"1",
                    "id_Roli"=>"3",
                    ]);
			} catch (PDOException $e){
				App::getMessages()->addError('Wystąpił błąd podczas dodawania uzytkownika');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
            }
            
            
            
            
            
            return ! App::getMessages()->isError();
       
    }
    
    public function action_Zarejestruj(){
       

		
		if ($this->validateRegister()){
			//zarejestrowany poprawnie-> przejdz na strone logowania
                        App::getMessages()->addMessage(new \core\Message("Poprawnie stworzone konto prosimy się zalogować", \core\Message::INFO));
                        App::getSmarty()->display("login_view.tpl"); 
                        
		} else {
			//niezalogowany => wyświetl stronę rejestrowania
			$this->generateView(); 
		}
		
	}
        
   
    
   public function generateView(){
            
            $this->getParamsLogin();
       
                App::getSmarty()->assign('form',$this->form);
               App::getSmarty()->display("Rejestracja_view.tpl");
               
            exit();
   
    }
}


