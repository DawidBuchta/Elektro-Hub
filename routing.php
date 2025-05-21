<?php

use core\App;
use core\Utils;
use core\SessionUtils;

$user = SessionUtils::loadObject('user',true);
 App::getSmarty()->assign('user',$user);
             
App::getRouter()->setDefaultRoute('Oferta'); #default action
App::getRouter()->setLoginRoute('Login'); #action to forward if no permissions
Utils::addRoute('Login', 'LoginCtrl'); //logowanie
Utils::addRoute('logout', 'LoginCtrl'); // wylogowanie

Utils::addRoute('Zarejestruj', 'RejestracjaCtrl'); //rejestracja

Utils::addRoute('Oferta', 'ItemCtrl'); //wyswietlanie wszystkich przedmiotw w bazie
Utils::addRoute('Przedmiot', 'ItemCtrl'); // wyswietlanie pojedynczego przedmiotu
Utils::addRoute('AddItemView', 'ItemCtrl',["Marketing"]); // dodawanie przedmiotu
Utils::addRoute('RemoveItem', 'ItemCtrl',["Administrator","Marketing"]); // usuwanie przedmiotu z poziomu samego przedmiotu


Utils::addRoute('wyswietl', 'UsersCtrl',["Administrator"]); // wyswietla lsite wszystkich uzytkownikow
Utils::addRoute('RemoveUser', 'UsersCtrl',["Administrator"]); // usuwa uzytkownika z wyswietlanej lsity po zaznaczeniu
Utils::addRoute('adduser_view', 'UsersCtrl',["Administrator"]); // wyswietlanie formularza do doania uzytkownika
Utils::addRoute('AddUser', 'UsersCtrl',["Administrator"]); // dodanie uzytkownika z formularza
Utils::addRoute('search', 'UsersCtrl',["Administrator"]); // 
Utils::addRoute('pages', 'UsersCtrl',["Administrator"]); // 


Utils::addRoute('Wyswietl_Koszyk', 'koszykCtrl',["Klient"]); // wyswietla koszyk uzytkownika
Utils::addRoute('DodanoDoKoszykaOferta_View', 'koszykCtrl',["Klient"]); // dodaje do koszyka przedmiot z "oferta_view"
Utils::addRoute('DodanoDoKoszykaPrzedmiot_View', 'koszykCtrl',["Klient"]); // dodaje do koszyka przedmiot z "przedmiot_view"
Utils::addRoute('RemoveItems', 'koszykCtrl',["Klient"]);  // usuwa przedmiot z koszyka z poziomu :koszyk_view"
Utils::addRoute('ZlozZamowienie', 'koszykCtrl',["Klient"]); // przycisk w koszyku do usuwnaia zamowienia
Utils::addRoute('OrderHistory', 'koszykCtrl',["Klient"]); // 
Utils::addRoute('OrderDetail_View', 'koszykCtrl',["Klient"]); // 
Utils::addRoute('OrderDetailMagazyn', 'koszykCtrl',["Magazynier"]); // 
Utils::addRoute('OrderCancel', 'koszykCtrl',["Klient"]); // 
Utils::addRoute('OrderStatus_View', 'koszykCtrl',["Magazynier"]); // 
Utils::addRoute('OrderSend', 'koszykCtrl',["Magazynier"]); // 

//Utils::addRoute('action_name', 'controller_class_name');