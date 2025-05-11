<?php

use core\App;
use core\Utils;
use core\SessionUtils;

$user = SessionUtils::loadObject('user',true);
 App::getSmarty()->assign('user',$user);
             
App::getRouter()->setDefaultRoute('Oferta'); #default action
App::getRouter()->setLoginRoute('Login'); #action to forward if no permissions



Utils::addRoute('Oferta', 'ItemCtrl'); //wyswietlanie wszystkich przedmiotw w bazie
Utils::addRoute('Przedmiot', 'ItemCtrl'); // wyswietlanie pojedynczego przedmiotu





//a

//Utils::addRoute('action_name', 'controller_class_name');