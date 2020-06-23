<?php
class UserSession
{

    public function _construct()
    {

        session_start();

    }

    
    public function SetCurrentUser($user)
    {

        $_SESSION['user']=$user;

    }

    
    public function GetCurrentUser()
    {

        return $_SESSION['user'];

    }

    public function CloseSession()
    {

        session_unset();
        Session_destroy();
    }

}


?>