<?php

    require_once("Database.php");
    require_once("Session.php");

/*************************SCHEMA OF STUDENT TABLE******************************************
    sid, student_first_name, student_last_name,	student_email, student_number, student_address,	student_branch,	student_dob, student_college, student_gender, stream_id, created_at, updated_at, updated_by, deleted, deleted_at, deleted_by
    *****************************************************************************************/



class Upload{
    private $connection;
    
    /*WE ARE CREATING THE CONSTRUCTOR AND WE R USING EVERYWHERE*/
    public function __construct(){  
        
        global $database;
        $this->connection = $database->getConnection();/*TO BRIING CONNECTION FRO THE DATABSE FILE*/
        
        Session::startSession();    /*STATIC MEMEBER CAN BE ACCESSED WITH THE HELP OF SCOPE RESOLUTION OPERATOR IN PHP IE CLASS NAME :: AND METHOD NAME*/
        echo "HERE";
        
    }
    
    public function uploadDocuments($doc_name,$doc_size){
        
        $query = "INSERT INTO documents(doc_name, doc_size, uploaded_at, uploaded_by) VALUES (?,?,?,?)";         
            
        if(!$preparedStatement = $this->connection->prepare($query)){     /*FOR DEBUGGING*/
            die($this->connection->error);
        }

        $current_date = date("Y-m-d h:i:sa");
        $uploaded_by = $_SESSION['member_id'];
        $preparedStatement->bind_param("sisi", $doc_name, $doc_size, $current_date, $uploaded_by); 

       if($preparedStatement->execute()){
           echo "DONE SUCCESSFULLY"; 
           return true;        /*HERE WE USED TRUE COZ WE DONT WANT TO RETURN ANYTHING*/
        }else{
            die("ERROR WHILE Uploading the Document" .$this->connection->error);   /*FOR DEBUGGING PURPOSE*/
        }    
    }
    
    
}

?>