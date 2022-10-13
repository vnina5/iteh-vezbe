<?php

class User{

    protected $username;
    public $password;
    public $id;

    public function __construct($id=null, $username=null, $password=null)
    {
        $this->$id = $id;
        $this->$username = $username;
        $this->$password = $password;
    }

    public static function loginUser($user, $baza){
        if (
            $baza[0]['username'] == $user->username && 
            $baza[0]['password'] == $user->pasword
            ){
                return true;
        }

        return false;

    }

}

