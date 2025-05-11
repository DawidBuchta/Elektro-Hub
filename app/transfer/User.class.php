<?php

namespace app\transfer;

class User{
	public $login;
	public $role;
	private $id;
        
       
	public function __construct($login, $role,$id){
		$this->login = $login;
		$this->role = $role;
                $this->id = $id;
	}
        
        public function getid()
        {
            
            return $this->id;
            
        }
     
}