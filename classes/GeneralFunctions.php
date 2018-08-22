<?php
    /*THIS FILE IS VERY USEFUL SINCE THIS IS A TEMPLATE AND OUR WORK GETS EASIER*/
    include_once("Database.php");

class GeneralFunctions{      

    private $connection;
    public $recordsPerPage;
    private $tableName;     /*THIS IS FOR THE TABLE NAME*/
 
    
    /*WE ARE CREATING THE CONSTRUCTOR AND WE R USING EVERYWHERE*/
    public function __construct(){  
        
        global $database;
        $this->connection = $database->getConnection();/*TO BRIING CONNECTION FRO THE DATABSE FILE*/
        $this->recordsPerPage = 2;
        $this->tableName = "branch";

    }
    
   /*********************THERE IS DIFFERENCE IN COUNT AND SELECT *COZ COUNT IS VERY LIGHT IN COMPLEXITY*/
    public function getTotalRecordCount($tableName){
        $sql = "SELECT count(*) AS total_count from $tableName WHERE deleted=0 ";
        $result_set = $this->connection->query($sql);
        if($row = mysqli_fetch_assoc($result_set)){
            return $row['total_count'];
        }else{
            die("Error while Fetching total count of students");
        }
    }
    
    /****************THIS IS GET THE RECORDS WITH CONDITION****************************************/
    public function getTotalRecordCountWithCondition($tableName, $condition){
        $sql = "SELECT count(*) AS total_count from $tableName WHERE deleted=0 ".$condition;        
       
        $result_set = $this->connection->query($sql);
        
        if($row = mysqli_fetch_assoc($result_set)){
            return $row['total_count'];
        }else{
            die("Error while Fetching total count of branches");
        }
    }
    
    /********************************READ ALL GENEREAL**************************************************/    
    public function readAllRecords($tableName){
        
        /*COZ WE R USING THE OBJ OF SOME OTHER FILE THATS Y WE MAKE IT GLOBAL SAME AS EXTERN OF C*/
        $result_set = $this->connection->query ("SELECT * FROM $tableName WHERE deleted = 0");
        return $result_set;
        
    }
    
    
    /******************************FOR PAGINATION***************************************************/
     public function readAllRecordsWithCondition($tableName, $condition){
        
        $sql = "SELECT * FROM $tableName WHERE deleted = 0 ".$condition;
        $result_set = $this->connection->query ($sql);
        return $result_set;
        
    }

    /***************FUNCTION FOR GETTING THE DETAILS OF ANYONE THROUGH THE ID***************************/
    public function getAllDetailsByID($tableName, $id){

        $sql = "SELECT * FROM $tableName WHERE id = $id";
        $result_set = $this->connection->query($sql);
        if($this->connection->error)
            echo $this->connection->error;
        return ($result_set);
    }
    
    
    
   
}

?>