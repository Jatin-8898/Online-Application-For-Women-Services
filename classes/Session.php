

<?php

class Session{
    
    public  static function startSession(){
        if(!Session::isSessionStart()){
            session_start();
        }
    }
    
    public static function isSessionStart(){
        if(isset($_SESSION['login'])){
            return true;
        }else{
            return false;
        }
    }
    
    
}

?>