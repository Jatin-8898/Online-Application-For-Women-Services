<?php

class Database{
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct(){     /*USED TO CREATE DEFAULT CONSTRUCTOR*/
        //echo "CHECK";
        $this->host = "localhost";
        $this->username = "Jatin8898";
        $this->password = "kingjatin";
        $this->database = "women";
        $this->connectDB();         /*THIS WILL AUTOMATCIALLY CALL THIS () WEN THE OBJ OF THE CLASS IS CREATED*/
        
    }
    
    
    
    /*NOTE: PHP DOESNT SUPORT CONSTRUCTOR OVERLOADING*/
    public function __connectionString($host, $username, $password, $database){//USED TO CREATE PARAMETERIZED CONSTRUCTOR
        //echo "CHECK";
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        
    }
    
    
    
    public function connectDB(){
        $this->connection = new mysqli($this->host, $this->username, $this->password);  /*new mysqli bhi chalega its OOP way*/
        
        if(mysqli_connect_error()){       /*ONE WAY TO DO THIS IS USING ERRNO   $this->connection->errno*/
            
            //IF THE CONN IS NOT SUCCESSFUL
            die("Connection Failed : " . mysqli_error()); /* ANOTHER WAY TO DO THIS IS  $this->connection->connect_error());*/
        }
        
        $db_selected = $this->connection->select_db($this->database);/*IT DOESNT NEEDS CONECTION COX USS CONNECTON PE WOH DB Ko CONNECT KR RHAh*/
        /*ISS CONN KO ISS DB KE SAATH LINK  and RETURNS BOOLEAN VALUE*/
        if(!$db_selected){
            /*****************************************************************************
                * FOR DEPLOYEMENT PURPOSE
                * THIS WILL AUTOMATICALLY CREATE THE DB AND THE TABLES IN THE CLIENT COMPUTER
                * THIS IS THE POWER OF OPEN SOURCE THIS WILL AUTOMATICALLY EVERYTHING
            *****************************************************************************/
            
        /*   $query = "CREATE DATABASE classmanagement";
            if(mysqli_query($this->connection, $query)){
                echo "DATABASE CREATED SUCCESSFULLY";
            }     */

           //echo "DATABASE NOT SELECTED";           /*MEANS DB NHI H */

        }else{
            //echo "DATABASE SELECTED";
        }
    
        //return $this->connection;         
        /*********************************
        DONT MAKE CONNECTION GLOBAL N DONT RETURN IT IN BIG PROJECTS MAKE CONNNECTION LOCAL 
        ******************************/
    }
    
    
    
    /****THIS FUNCTIN WILL BE USED EVERYWHERE IF QUERY IS UNSUCCESSFULL *********/
    public function query($sql){            
        $result = $this->connection->query($sql);           /*FOR A QUERY*/
        if(!$result){
            die("QUERY FAILED!!" . $sql);
        }
        return $result;
        
    }
    
    
    
    public function getConnection(){
        return $this->connection;
    }
    
    
    /*************FOR SECURITY IT WILL REMOVE ALL THE SLASHES**********************************/
    public function escape_string($string){     
        
        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;
    }
    
    
    function __destruct(){     /*THIS IS DESTRUCTOR IN PHP*/
        //echo "CHECK";
    }
    
    
    
}
/******************COZ WHENEVER THE DATABASE WILL BE INCLUDED IT WILL CREATE THE DB OBJ HERE ONLY**************/
    $database = new Database();         

?>