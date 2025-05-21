<?php

namespace app\controllers;

use app\forms\RejestracjaForm;
use core\App;
use core\ParamUtils;
use core\SessionUtils;

class UsersCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new RejestracjaForm();
    }

    function getParamsLogin() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->id_roli = ParamUtils::getFromRequest('rola');
    }

    function isaccount($login) {
        if (App::getDB()->has("uzytkownicy", ["login" => $login])) {
            return true;
        } else
            return false;
    }

    function getid() {
        return App::getDB()->get("uzytkownicy", "id_uzytkownika", ["login" => $this->form->login]);
    }

    function currentpage() {

        if (ParamUtils::getFromRequest('page') > 0 & is_numeric(ParamUtils::getFromRequest('page')))
            return ParamUtils::getFromRequest('page');
        else
            return 1;
    }

  

    public function validateRegister() {


        $this->getParamsLogin();

        // sprawdzenie, czy parametry zostały przekazane sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza    
        if (!(isset($this->form->login) && isset($this->form->password))) {
            //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false;
        }



        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ($this->form->login == "") {

            App::getMessages()->addMessage(new \core\Message("nie podano Loginu", \core\Message::ERROR));
        }
        if ($this->form->password == "") {
            App::getMessages()->addMessage(new \core\Message("nie podano Hasła", \core\Message::ERROR));
        }
        if ($this->form->imie == "") {
            App::getMessages()->addMessage(new \core\Message("nie podano Imienia", \core\Message::ERROR));
        }
        if ($this->form->nazwisko == "") {
            App::getMessages()->addMessage(new \core\Message("nie podano Nazwiska", \core\Message::ERROR));
        }

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (App::getMessages()->isError())
            return false;

        if ($this->isaccount($this->form->login)) {

            App::getMessages()->addMessage(new \core\Message("Użytkownik o takim loginie już istnieje", \core\Message::ERROR));
        }


        if (strlen($this->form->login) <= 4) {

            App::getMessages()->addMessage(new \core\Message("login musi mieć minimum 5 znaków", \core\Message::ERROR));
        }
        //Prosta weryfiakcja sily hasla 
        // minimum 1 duża i mała litera, 1 cyfra, minimum 4 znaki 
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z]).{4,}$/", $this->form->password)) {

            App::getMessages()->addMessage(new \core\Message("Hasło musi mieć minimum 5 znaków, zawierać 1 dużą oraz 1 mała literę i 1 cyfrę", \core\Message::ERROR));
        }



        $user = SessionUtils::loadObject('user', true);
        if (!App::getMessages()->isError()) {
            try {

                App::getDB()->insert("uzytkownicy", [
                    "login" => $this->form->login,
                    "password" => $this->form->password,
                    "Imie" => $this->form->imie,
                    "Nazwisko" => $this->form->nazwisko,
                    "id_kto_stw" => $user["id_uzytkownika"],
                    "id_Roli" => $this->form->id_roli,
                ]);
            } catch (PDOException $e) {
                App::getMessages()->addError('Wystąpił błąd podczas dodawania uzytkownika');
                if (getConf()->debug)
                    getMessages()->addError($e->getMessage());
            }
        }





        return !App::getMessages()->isError();
    }

    public function action_AddUser() {

        if ($this->validateRegister()) {
            //poprawnie uzupelnione pola
            App::getMessages()->addMessage(new \core\Message("Poprawnie stworzone konto", \core\Message::INFO));
        }
        $this->action_adduser_view();
    }

    public function action_RemoveUser() {

        $userr = SessionUtils::loadObject('user', true);
        $login = ParamUtils::getFromRequest('users');
        $id_uzytkownika = App::getDB()->get("uzytkownicy", "id_uzytkownika", ["login" => $login]);

        $czy_uzywany_admin = App::getDB()->has("uzytkownicy", [
            "OR" => ["id_kto_stw" => $id_uzytkownika, "id_kto_stw" => $id_uzytkownika]
        ]);
        $czy_uzywany_klient = App::getDB()->has("zamowienia", [
            "id_zam_uz" => $id_uzytkownika
        ]);
        if (!isset($login)) {
            App::getMessages()->addMessage(new \core\Message("Brak zaznaczonych użytkowników", \core\Message::ERROR));
        } else if ($czy_uzywany_admin) {
            App::getMessages()->addMessage(new \core\Message("Nie można usunąć użytkownika ponieważ stworzyl lub edytował innego uztkownika", \core\Message::ERROR));
        } else if ($czy_uzywany_klient) {
            App::getMessages()->addMessage(new \core\Message("Nie można usunąć użytkownika ponieważ posiada koszyk lub zamowienia", \core\Message::ERROR));
        } else if ($userr["id_uzytkownika"] == $id_uzytkownika) {
            App::getMessages()->addMessage(new \core\Message("Nie można usunąć zalogowanego użytkownika", \core\Message::ERROR));
        } else {



            foreach ($login as $user) {

                App::getDB()->delete("uzytkownicy",
                        [
                            "login" => $user
                        ], [
                    "id_uzytkownika[!]" => $userr["id_uzytkownika"]
                        ]
                );
            }
            App::getMessages()->addMessage(new \core\Message("Użytkownicy poprawnie usunieci", \core\Message::INFO));
        }

        $this->action_wyswietl();
    }

    public function action_adduser_view() {
        //wyciaga z bazy wszystkie role za wyjatkiem systemowej
        $role = App::getDB()->select("role", ["id_Roli", "nazwa_roli"],
                [
                    "id_Roli[!]" => [1,3]
                ]
        );
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign("role", $role);
        App::getSmarty()->display("addUser_View.tpl");
    }

    function numpage() {
        $pagination=SessionUtils::load("pagination", $keep = true);
        $search = SessionUtils::load("search", $keep = true);
        if (is_null($search) || $search == "") {
            $num_page = ceil(App::getDB()->count("uzytkownicy") / $pagination);
        } else {
            $users_search = App::getDB()->select("uzytkownicy",
                    ["[><]role" => ["id_Roli" => "id_Roli"]],
                    [
                        "uzytkownicy.id_uzytkownika",
                        "role.nazwa_roli",
                        "uzytkownicy.login",
                        "uzytkownicy.imie",
                        "uzytkownicy.Nazwisko",
                        "uzytkownicy.Miasto",
                        "uzytkownicy.Ulica",
                        "uzytkownicy.KodPocztowy",
                        "uzytkownicy.email",
                        "uzytkownicy.data_stworzenia",
                        "uzytkownicy.id_kto_stw",
                        "uzytkownicy.data_modyfikacji",
                        "uzytkownicy.id_kto_modf",
                    ], [
                "OR" => [
                    "uzytkownicy.id_uzytkownika[~]" => $search,
                    "role.nazwa_roli[~]" => $search,
                    "uzytkownicy.login[~]" => $search,
                    "uzytkownicy.imie[~]" => $search,
                    "uzytkownicy.Nazwisko[~]" => $search,
                    "uzytkownicy.Miasto[~]" => $search,
                    "uzytkownicy.Ulica[~]" => $search,
                    "uzytkownicy.KodPocztowy[~]" => $search,
                    "uzytkownicy.email[~]" => $search,
                    "uzytkownicy.data_stworzenia[~]" => $search,
                    "uzytkownicy.id_kto_stw[~]" => $search,
                    "uzytkownicy.data_modyfikacji[~]" => $search,
                    "uzytkownicy.id_kto_modf[~]" => $search,
                ]
            ]);

            $num_page = ceil(sizeof($users_search) / $pagination);
            if ($num_page <= 0)
                $num_page = 1;
        }

        return $num_page;
    }

    function UserList() {
        $pagination=SessionUtils::load("pagination", $keep = true);
        $search = SessionUtils::load("search", $keep = true);
        if (is_null($search) || $search == "") {
            $page = $this->currentpage();
            $page--;
            $users = App::getDB()->select("uzytkownicy",
                    ["[><]role" => ["id_Roli" => "id_Roli"]],
                    [
                        "uzytkownicy.id_uzytkownika",
                        "role.nazwa_roli",
                        "uzytkownicy.login",
                        "uzytkownicy.imie",
                        "uzytkownicy.Nazwisko",
                        "uzytkownicy.Miasto",
                        "uzytkownicy.Ulica",
                        "uzytkownicy.KodPocztowy",
                        "uzytkownicy.email",
                        "uzytkownicy.data_stworzenia",
                        "uzytkownicy.id_kto_stw",
                        "uzytkownicy.data_modyfikacji",
                        "uzytkownicy.id_kto_modf",
                    ],
                    [
                        "ORDER" => "uzytkownicy.id_uzytkownika",
                        'LIMIT' => [$page * $pagination, $pagination],
            ]);
            $page++;
        } else {
            $page = $this->currentpage();
            $page--;
            $users = App::getDB()->select("uzytkownicy",
                    ["[><]role" => ["id_Roli" => "id_Roli"]],
                    [
                        "uzytkownicy.id_uzytkownika",
                        "role.nazwa_roli",
                        "uzytkownicy.login",
                        "uzytkownicy.imie",
                        "uzytkownicy.Nazwisko",
                        "uzytkownicy.Miasto",
                        "uzytkownicy.Ulica",
                        "uzytkownicy.KodPocztowy",
                        "uzytkownicy.email",
                        "uzytkownicy.data_stworzenia",
                        "uzytkownicy.id_kto_stw",
                        "uzytkownicy.data_modyfikacji",
                        "uzytkownicy.id_kto_modf",
                    ], [
                "OR" => [
                    "uzytkownicy.id_uzytkownika[~]" => $search,
                    "role.nazwa_roli[~]" => $search,
                    "uzytkownicy.login[~]" => $search,
                    "uzytkownicy.imie[~]" => $search,
                    "uzytkownicy.Nazwisko[~]" => $search,
                    "uzytkownicy.Miasto[~]" => $search,
                    "uzytkownicy.Ulica[~]" => $search,
                    "uzytkownicy.KodPocztowy[~]" => $search,
                    "uzytkownicy.email[~]" => $search,
                    "uzytkownicy.data_stworzenia[~]" => $search,
                    "uzytkownicy.id_kto_stw[~]" => $search,
                    "uzytkownicy.data_modyfikacji[~]" => $search,
                    "uzytkownicy.id_kto_modf[~]" => $search,
                ],
                "ORDER" => "uzytkownicy.id_uzytkownika",
                'LIMIT' => [$page * $pagination, $pagination],
            ]);
        }

        App::getSmarty()->assign('search', $search);
        App::getSmarty()->assign('page', $page);
        App::getSmarty()->assign('num_page', $this->numpage());

        return $users;
    }

    public function action_wyswietl() {
        SessionUtils::remove("search");
        
        //miejsca do ustawienia liczby rekordow na stronie
        SessionUtils::store("pagination","5");
        $users = $this->UserList();

        App::getSmarty()->assign('users', $users);
        App::getSmarty()->display("Users_View.tpl");
    }

    public function action_search() {

        SessionUtils::store("search", ParamUtils::getFromPost("search"));
        $users = $this->UserList();

        App::getSmarty()->assign('users', $users);
        App::getSmarty()->display("Search_View.tpl");
    }

    public function action_pages() {


        App::getSmarty()->assign('page', $this->currentpage());
        App::getSmarty()->assign('num_page', $this->numpage());
        App::getSmarty()->display("pages_view.tpl");
    }
}
