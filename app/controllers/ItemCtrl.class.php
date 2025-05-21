<?php


namespace app\controllers;

use app\forms\ItemForm;
use core\App;
use core\przedmiot;
use core\ParamUtils;
use core\SessionUtils;

class ItemCtrl {
    
     private $form; 
     
     public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new ItemForm();
	}
    function isItem($item_name)
        {
            if(App::getDB()->has("przedmioty",["Nazwa"=>$item_name])){
                  return true; 
            }else
                        return false;   
        }
        
        function setParams(){
            $this->form->Producent=App::getDB()->select("producenci",["id_Producenta","nazwa_producenta"]);
            $this->form->Kategoria=App::getDB()->select("kategorie",["id_Kategori","nazwa_kategori"]);
            $this->form->Atrybut=App::getDB()->select("atrybuty",["id_atrybutu","nazwa_atrybutu"],["id_atrybutu[!]"=>"1"]);
            
        }
        
        function getParamsLogin(){
          $this->form->Nazwa = ParamUtils::getFromRequest('nazwa');
          $this->form->Opis = ParamUtils::getFromRequest('opis');
          $this->form->Cena = ParamUtils::getFromRequest('cena');
          $this->form->Wartosc = ParamUtils::getFromRequest('wartosc');
          $this->form->id_producenta = ParamUtils::getFromRequest('producent');
          $this->form->id_kategori = ParamUtils::getFromRequest('kategorie');
          $this->form->id_atrybutu = ParamUtils::getFromRequest('atrybut');
          if(isset($_FILES['file']['name'])){
          $this->form->Zdjecie =$_FILES['file']['name'];
          }
        }
        
    
   public function action_Przedmiot() {
		        
        $id_przedmiot= $_GET['id'];
     $zdjecie = App::getDB()->get("atrybut_przedmiot","wartosc",
             ["AND"=>[
                 "id_atrybutu"=>"1",
                 "id_spec"=>$id_przedmiot           
                 ]
                  ]
             );
      $przedmiot = App::getDB()->get("przedmioty",[
             "[><]producenci"=>["id_Producenta"=>"id_Producenta"]
             ],
             ["przedmioty.cena","przedmioty.Nazwa","producenci.nazwa_producenta","przedmioty.opis"],
             [
                    "id_przedmiot"=>$id_przedmiot 
             ]
             );
       $atrybuty = App::getDB()->select("atrybut_przedmiot",
               ["[><]atrybuty"=>["id_atrybutu"=>"id_atrybutu"]]
               ,["atrybut_przedmiot.wartosc","atrybuty.nazwa_atrybutu"],
             ["AND"=>[
                 "atrybut_przedmiot.id_atrybutu[!]"=>"1",
                 "atrybut_przedmiot.id_spec"=>$id_przedmiot           
                 ]
                  ]
             );
        $komunikat=SessionUtils::load("komunikat", $keep = false);
      if($komunikat)
      {
       App::getSmarty()->assign("msg",$komunikat);
      }
       App::getSmarty()->assign("id_przedmiot",$id_przedmiot);
        App::getSmarty()->assign("zdjecie",$zdjecie);
        App::getSmarty()->assign("przedmiot",$przedmiot);
        App::getSmarty()->assign("atrybuty",$atrybuty);
        App::getSmarty()->display("Przedmiot_View.tpl");
        
    }
   public function action_Oferta() {
 
     $przedmiot = App::getDB()->select("przedmioty",[
             "[><]atrybut_przedmiot"=>["id_przedmiot"=>"id_spec"],
             "[><]producenci"=>["id_Producenta"=>"id_Producenta"]
             ],
             ["przedmioty.id_przedmiot","przedmioty.cena","atrybut_przedmiot.wartosc","przedmioty.nazwa","producenci.nazwa_producenta"],
             [
                 "AND"=>
                [
                    "atrybut_przedmiot.id_atrybutu"=>"1" //1 to id zdjecia
                ]
             ]
             );
      
  
        
        App::getSmarty()->assign("przedmiot",$przedmiot);
        App::getSmarty()->display("Oferta_View.tpl");
        
    }
   
   function validateParams(){
 
        $this->getParamsLogin();
        
        
            // sprawdzenie, czy parametry zostały przekazane sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza    
                 if ( ! (isset($this->form->Nazwa) && isset($this->form->Cena))) {
                    //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
                    return false;
            }
                


            // sprawdzenie, czy potrzebne wartości zostały przekazane
            if ( $this->form->Nazwa == "") {
                
               App::getMessages()->addMessage(new \core\Message("nie podano Nazwy", \core\Message::ERROR));
                    
            }
            if ( $this->form->Cena == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano Ceny", \core\Message::ERROR));
            }
            if ( $this->form->id_producenta == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano producenta", \core\Message::ERROR));
            }
            if ( $this->form->id_kategori == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano kategorii", \core\Message::ERROR));
            }
            if ( $this->form->id_atrybutu == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano Atrybutu", \core\Message::ERROR));
            }
            if ( $this->form->Wartosc == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano Wartości Atrybutu", \core\Message::ERROR));
            }
            if ( $this->form->Opis == "") {
                  App::getMessages()->addMessage(new \core\Message("nie podano Opisu", \core\Message::ERROR));
            }
            if ( $this->form->Zdjecie == "") {
                  App::getMessages()->addMessage(new \core\Message("nie wgrano Zdjęcia", \core\Message::ERROR));
            }
            //nie ma sensu walidować dalej, gdy brak parametrów
            if (App::getMessages()->isError()) return false;

            $item_name=App::getDB()->get("przedmioty","Nazwa",["Nazwa"=>$this->form->Nazwa]); 
            
            if($this->isItem($item_name))
                App::getMessages()->addMessage(new \core\Message("Przedmiot o podanej nazwie już istnieje", \core\Message::ERROR)); 
                
            //Prosta weryfiakcja ceny
            // cena musi myć pełna i mniejsza niz 9 znakow
            if(strlen($this->form->Cena)<9)
            {
                if (!preg_match('/^\d+(:?[.]\d{2})$/',$this->form->Cena))  {

                   App::getMessages()->addMessage(new \core\Message("Cena musi mieć format [wartosć w zł].[grosze] np. 23.00", \core\Message::ERROR)); 
                }  
            
            }else
            {
                App::getMessages()->addMessage(new \core\Message("cena nie moze byc wieksza niz 99999.99", \core\Message::ERROR));
            }
            
            if(!App::getMessages()->isError())
            {
            try {
                
               App::getDB()->insert("przedmioty",[
                    "id_Producenta"=>$this->form->id_producenta , 
                    "id_Kategori"=>$this->form->id_kategori ,
                     "Nazwa"=>$this->form->Nazwa,
                    "opis"=>$this->form->Opis,
                    "cena"=>$this->form->Cena,]);
               
               $id_przedmiotu=App::getDB()->get("przedmioty","id_przedmiot",["Nazwa"=>$this->form->Nazwa]);
               
               App::getDB()->insert("atrybut_przedmiot",[[
                   
                "id_spec"=>$id_przedmiotu,
                   
                "id_atrybutu"=>$this->form->id_atrybutu,
                "wartosc"=>$this->form->Wartosc 
               ],[
                "id_spec"=>$id_przedmiotu,
                "id_atrybutu"=>"1", //zdjecie
                "wartosc"=>$this->form->Zdjecie  
               ]]);

			} catch (PDOException $e){
				App::getMessages()->addError('Wystąpił błąd podczas dodawania uzytkownika');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
                    //przeniesienie jpg to lokalizacji ze zdjeciami
                   $image_name=$_FILES['file']['name'];
                   $tmp_name=$_FILES['file']['tmp_name'];
                   $Destination=App::getConf()->root_path."/Public/JPG/".$image_name;
                   move_uploaded_file($tmp_name,$Destination);        
                        
            }

            return ! App::getMessages()->isError();
    
   }
    
   function RemoveItem()
   {
       $item_id=$_GET["id"];
       
       $czy_wykorzystane=App::getDB()->has("przedmiot_koszyk",[
           
           "id_przedmiot"=>$item_id
       ]);
       if($czy_wykorzystane)
           App::getMessages()->addMessage(new \core\Message("Produktu nie można usunąć ponieważ ktoś go zamówił", \core\Message::ERROR));
       else{
       App::getDB()->delete("atrybut_przedmiot",["id_spec"=>$item_id]);
       App::getDB()->delete("przedmioty",["id_przedmiot"=>$item_id]);
       App::getMessages()->addMessage(new \core\Message("Poprawnie usunieto produkt", \core\Message::INFO));
       }
       
       
       
   }
      
    public function action_AddItemView(){
        
        
        $this->setParams(); 
        
        if($this->validateParams())
        {
            App::getMessages()->addMessage(new \core\Message("Poprawnie dodany produkt", \core\Message::INFO));
        }
         App::getSmarty()->assign("form",$this->form);
               App::getSmarty()->display("AddItem_View.tpl");
        
    }
    
    
    public function action_RemoveItem()
    {
        
        
        $this->RemoveItem();
        
        $this->action_Oferta();
        
    }
    
    
    
}
