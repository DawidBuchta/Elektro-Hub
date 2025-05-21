<?php


namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\ParamUtils;

class koszykCtrl {
     
     public function action_koszyk() {
 
 
         $this->generateView(); 
    }
    
    
     function DodajDoKoszyka()
    {
       $id_przedmiot= $_GET['id'];
       $user = SessionUtils::loadObject('user',true);
       //przeszukuje tabele zamowienia 
       $test=App::getDB()->get("zamowienia",["id_statusu","id_zamowienia"],[
           "AND"=>[
            "id_zam_uz"=>$user["id_uzytkownika"],
               "id_statusu"=>"1"
               
                  ]
               ]);

       //sprawdza czy uzytkownik nie posiada zamwoienie ze statusem " koszyk - id=1" (1 na uzytkownika)
       //jezeli posiada to idzie dalej jak nie to tworzy 
       if(!isset($test["id_statusu"]))
       {
        App::getDB()->insert("zamowienia", 
          [
            "id_zam_uz"=>$user["id_uzytkownika"],
             "id_statusu"=>"1" //koszyk  
        ]);}
        //ponowne przypisanie zmiennej
        $zamowienie=App::getDB()->get("zamowienia",["id_statusu","id_zamowienia","data_zlozenia_zam","cena_laczna"],[
           "AND"=>[
            "id_zam_uz"=>$user["id_uzytkownika"],
               "id_statusu"=>"1"
               
                  ]
               ]);
        //pobiera przedmiot do zmiennej
        $przedmiot=App::getDB()->get("przedmiot_koszyk",["ilosc","id_przedmiot_koszyk"],[
            
            "AND"=>
            [
                "id_zamowienia"=>$zamowienie["id_zamowienia"],
                "id_przedmiot"=>$id_przedmiot
            ]  
        ]);
        //pobiera cene do zmiennej
        $cena_przedmiot=App::getDB()->get("przedmioty","cena",["id_przedmiot"=>$id_przedmiot]);
        //jezeli przedmiot nie ma (ilosc jest null) ustawi ilosc na 1 i dodaj cene do zamowienia
        if(!isset($przedmiot["ilosc"]))
        {
        App::getDB()->insert("przedmiot_koszyk",[
            "id_zamowienia"=>$zamowienie["id_zamowienia"],
            "id_przedmiot"=>$id_przedmiot,
            "ilosc"=>"1",
            "cena_razem"=>$cena_przedmiot
        ] );
        
        App::getDB()->update("zamowienia",[
            
            "cena_laczna[+]"=>$cena_przedmiot
        ],[
            "id_zamowienia"=>$zamowienie["id_zamowienia"]
        ]
                );
        //w przeciwnym razie edytuj aktualny +1 oraz dodaj cene
        }else{
            App::getDB()->update("przedmiot_koszyk", [
                
                "ilosc[+]"=>1,
                "cena_razem[+]"=>$cena_przedmiot
                ],[ 
                "id_przedmiot_koszyk"=>$przedmiot["id_przedmiot_koszyk"]        
                ]); 
            
            App::getDB()->update("zamowienia",[
                
                "cena_laczna[+]"=>$cena_przedmiot  
            ],[
                
                "id_zamowienia"=>$zamowienie["id_zamowienia"]
                
            ]);
            }
              
    }
    
    public function action_DodanoDoKoszykaPrzedmiot_View()
    {
        $id_przedmiot= $_GET['id'];
        $this->DodajDoKoszyka();
        //przenisienie komunikatu oraz redirect
    
      SessionUtils::store("komunikat", "Dodano do koszyka"); 
      header("Location: ".App::getConf()->action_url."Przedmiot&id=".$id_przedmiot);
        
    }
     public function action_DodanoDoKoszykaOferta_View()
    {
        $this->DodajDoKoszyka();
        //przenisienie komunikatu oraz redirect
        App::getMessages()->addMessage(new \core\Message("Dodano do koszyka", \core\Message::INFO));
        App::getRouter()->forwardTo("Oferta");
        
    }
    
    function dane_koszyka()
    {
        
        $koszyk=0;
        $user = SessionUtils::loadObject('user',true);
        $id_zamowienia=App::getDB()->get("zamowienia","id_zamowienia",[
           "AND"=>[
            "id_zam_uz"=>$user["id_uzytkownika"],
               "id_statusu"=>"1"
                  ]
               ]);
        $koszyk=App::getDB()->select("przedmiot_koszyk",["[><]przedmioty"=>["id_przedmiot"=>"id_przedmiot"]],
                ["przedmioty.nazwa","przedmiot_koszyk.ilosc","przedmioty.cena","przedmiot_koszyk.cena_razem","przedmiot_koszyk.id_przedmiot_koszyk"],
                [
                    "id_zamowienia"=>$id_zamowienia
  
                ]      
                );
        
        //gdy koszyk pusty zwroc falsz
        if($koszyk == NULL)
        return false;
  
     
        //sumowanie całego koszyka
        $razem=App::getDB()->get("zamowienia","cena_laczna",["id_zamowienia"=>$id_zamowienia]);
        
                App::getSmarty()->assign("razem",$razem);
                App::getSmarty()->assign("koszyk",$koszyk);     
        return true;
    }
    
    
    public function action_Wyswietl_Koszyk()
    {
        if($this->dane_koszyka())
         App::getSmarty()->assign("status","ok");
        else
            App::getSmarty()->assign("status","pusty");
        
        $this->generateView();
        
    
    }
     public function action_RemoveItems()
    {
        $items=ParamUtils::getFromRequest('items');
            foreach( $items as $key=>$item   )
            {
                $cena=App::getDB()->get("przedmiot_koszyk","cena_razem",["id_przedmiot_koszyk"=>$item]);
                
                App::getDB()->delete("przedmiot_koszyk",
                     [
                         "id_przedmiot_koszyk"=>$item
                     ]
                     );
                App::getDB()->update("zamowienia",[
                    "cena_laczna[-]"=>$cena
                    
                ]);
             
                            
            }
            
            App::getMessages()->addMessage(new \core\Message("Przedmioty zostaly usuniete", \core\Message::INFO));
        
 
        $this->action_Wyswietl_Koszyk();
    }
    
    public function action_ZlozZamowienie(){
        
        
         $user = SessionUtils::loadObject('user',true);
         $id_zamowienia=App::getDB()->get("zamowienia","id_zamowienia",[
           "AND"=>[
            "id_zam_uz"=>$user["id_uzytkownika"],
               "id_statusu"=>"1"
                  ]
               ]);
         App::getDB()->update("zamowienia", [
             "id_statusu"=>"3",
             "data_zlozenia_zam"=>date('Y-m-d')
            ],[
                
               "id_zamowienia"=>$id_zamowienia 
                
            ]);
 
        
        App::getSmarty()->display("stonks_view.tpl");
            
            exit();
        
        
    }
    
     public function generateView(){
            App::getSmarty()->display("Koszyk_View.tpl");
            
            exit();
   
    }
    
    function OrderHistory()
    {
        $user = SessionUtils::loadObject('user',true);
        $zamowienia=App::getDB()->select("zamowienia",[
            "[><]status_zamowienia"=>["id_statusu"=>"id_statusu"]
        ],[
            "status_zamowienia.status_zamowienia","zamowienia.cena_laczna","zamowienia.data_zlozenia_zam","zamowienia.id_zamowienia"
        ],[
            "zamowienia.id_zam_uz"=>$user["id_uzytkownika"],
            "zamowienia.id_statusu[!]"=>"1"
            
        ]);
        
        if(isset($zamowienia[0]))
        {  
        App::getSmarty()->assign("zamowienia",$zamowienia);
        return true;
        }
        else
        return false;
        
    }
    
    public function action_OrderHistory(){
        
       
        
        if($this->OrderHistory())
         App::getSmarty()->assign("status","ok");
        else
            App::getSmarty()->assign("status","pusty");
        
        App::getSmarty()->display("OrderHistory_View.tpl");
    }
    
   
    
     function OrderDetail()
    {
        $id_zam=$_GET['id'];
        $status_zam=App::getDB()->get("zamowienia","id_statusu",["id_zamowienia"=>$id_zam]);
        $id_zam_uz = App::getDB()->get("zamowienia","id_zam_uz",["id_zamowienia"=>$id_zam]);
        $user = App::getDB()->get("uzytkownicy",
                    ["[><]zamowienia" => ["id_uzytkownika" => "id_zam_uz"]],
                    [
                        "uzytkownicy.imie",
                        "uzytkownicy.Nazwisko",
                        "uzytkownicy.Miasto",
                        "uzytkownicy.Ulica",
                        "uzytkownicy.KodPocztowy",
                        "uzytkownicy.email",
                    ],
                    [
                        "uzytkownicy.id_uzytkownika" => $id_zam_uz,
            ]);
        
         $koszyk=App::getDB()->select("przedmiot_koszyk",["[><]przedmioty"=>["id_przedmiot"=>"id_przedmiot"]],
                ["przedmioty.nazwa","przedmiot_koszyk.ilosc","przedmioty.cena","przedmiot_koszyk.cena_razem","przedmiot_koszyk.id_przedmiot_koszyk","przedmiot_koszyk.id_zamowienia"],
                [
                    "id_zamowienia"=>$id_zam
                ]      
                );
         $razem=App::getDB()->get("zamowienia","cena_laczna",["id_zamowienia"=>$id_zam]);
                App::getSmarty()->assign("razem",$razem);
                App::getSmarty()->assign("koszyk",$koszyk); 
                App::getSmarty()->assign("customer",$user);
                App::getSmarty()->assign("status",$status_zam);
    }
    
    function OrderStatus()
    {
        
         $zamowienia=App::getDB()->select("zamowienia",[
            "[><]status_zamowienia"=>["id_statusu"=>"id_statusu"]
        ],[
            "status_zamowienia.status_zamowienia","zamowienia.cena_laczna","zamowienia.data_zlozenia_zam","zamowienia.id_zamowienia"
        ],[
            "zamowienia.id_statusu"=>"3"
            
        ]);
         
          if(isset($zamowienia[0]))
        {  
        App::getSmarty()->assign("zamowienia",$zamowienia);
        return true;
        }
        else
        return false;
        
        
    }
    public function action_OrderStatus_View()
    {
        
         if($this->OrderStatus())
         { App::getSmarty()->assign("status","ok");}
        else
        {App::getSmarty()->assign("status","pusty");}

        App::getSmarty()->display("OrderStatus_View.tpl");

    }
    
    public function action_OrderDetail_View()
    {
        $this->OrderDetail();
        App::getSmarty()->display("OrderDetail.tpl");
    }
     public function action_OrderDetailMagazyn()
    {
        $this->OrderDetail();
        App::getSmarty()->display("OrderDetailMagazyn.tpl");
    }
    public function action_OrderCancel()
    {
        $id_zam=$_GET['id'];
        
        App::getDB()->update("zamowienia",[
            
            "id_statusu"=>"6" //anulowane
        ],[
            
            "id_zamowienia"=>$id_zam
           
        ]);

        $this->action_OrderHistory();
    }
     public function action_OrderSend()
    {
        $id_zam=$_GET['id'];
        
        App::getDB()->update("zamowienia",[
            
            "id_statusu"=>"4" //wyslane
        ],[
            
            "id_zamowienia"=>$id_zam
           
        ]);

        $this->action_OrderStatus_View();
    }
}


