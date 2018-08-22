<?php 

    include_once("Database.php");
    require_once("Session.php");
    require_once("Functions.php");


class User{
    private $connection;
    
    public function __construct(){
        
        global $database;
        $this->connection = $database->getConnection();
        
        Session::startSession(); /*STATIC MEMEBER CAN BE ACCESSED WITH THE HELP OF SCOPE RESOLUTION OPERATOR IN PHP IE CLASS NAME :: AND METHOD NAME*/
    }
    
    /********************************************************************
    * THE BELOW FUNCTION IS USED TO LOG IN THE USER
    * IT AUTOMATICALLY ASSIGNS THE SESSION ATTRIBUTES
    * IT IS THE RESPOSIBILITY OF THE CALLEEE  TO START THE SESSION
    * RETURNS TRUE IF THE CREDENTIALS WERE CRRECT OTHERWISE FALSE
    *********************************************************************/
    
    
    public function processLogin($email, $password){
        
    /***********************************************************************************************
    * WE USED THIS SELECT USER TO BRING THE ROW IN PROCEDUAL 
    * BUT NOW IN OOP WE USED EXTRACT() WHICH IS USED TO BRING ALL THE ROWS FROM 
    * THE DB AND ECHO IT WHICHEVER WE WANT
    **************************************************************************************************/
        
        /*$query = "SELECT * FROM members WHERE member_email = ?";
        $select_user = mysqli_query($this->connection,$query);
        while($row = mysqli_fetch_assoc($select_user)){
            extract($row);
        }*/
        
        
        $query = "SELECT * FROM members WHERE member_email = ?";
        $preparedStatement = $this->connection->prepare($query);
        $preparedStatement->bind_param("s", $email); 
            /******************
            s stand for String
            b stand for blob
            i stand for Integer
            d stands for Double
            ******************/
        $preparedStatement->execute();      /*IT WILL RETURN A TABLE SO CATCHING IN A TABLE BY USING BIND RESULT*/
        
        $preparedStatement->store_result(); /*PHP 7 METHOD  BRING THE DATA FROM THE DB N STORES LOCALLY THIS IS REQUIRED TO USE NUM_ROWS*/
        
        $count =  $preparedStatement->num_rows;
        if($count == 1){                    /*IF ONLY 1 ENTRY FOR THAT USER IS DER THEN IT GOES INSIDES AND CHECKS*/   

            /****************************************************************************************
            * NOTE: THE NAME OF THE COLUMN NAME SHOULD BE SAME AS THE VARIBALE NAME eg $id, $member_email
            ****************************************************************************************/
            
            $preparedStatement->bind_result($id, $member_name, $member_email, $member_password, $member_role, $created_at);

            $preparedStatement->fetch();            /*1ST ROW IN FIRST TIME THEN 2ND ROW THEN 3RD*/
            
            if($password === $member_password){
                
                /*FOR GETTING THE ID AND ROLE FROM SESSION*/
                $_SESSION['login'] = true;
                $_SESSION['member_name'] = $member_name;
                $_SESSION['member_id'] = $id;           
                $_SESSION['member_role'] = $member_role;
                
                return true;
                //echo "<br>CONNECTED<br>";
            
            }else{
                return false;
                //echo "<br>WRONG CREDENTIALS";
            
            }
        }
        
        //echo $member_role;            //JUST FOR TESTING
        
    }//end of function
    
    
    
    
    public function processRegister($member_name, $member_email, $member_password){
        
        
        $query = "INSERT INTO members (member_name, member_email, member_password, member_role, created_at) VALUES (?, ?, ?, ?, ?)";
        
        $current_date = date("Y-m-d h:i:sa");
        $member_role = 'admin';

        $preparedStatement = $this->connection->prepare($query);
        
        $preparedStatement->bind_param("sssss", $member_name, $member_email, $member_password, $member_role, $current_date);
        
        if ($preparedStatement->execute()) {
            return $this->connection->insert_id;
            
        } else {
            die("ERROR WHILE INSERTING NEW USER");
            
        }
        
        
    }//end of function
    
    
    public function get_session(){
        /*FOR SECURITY CHECK KAR LE GE KI USER LOGGED IN H KI NAHI*/
        return $_SESSION['login'];          
        
    }
    
    
    
    public function user_logout(){
        $_SESSION['login'] = false;         /*GOOD PROGRAMMING PRACTICE*/
    
        /*IT IS SAFE SIDE TO MAKE IT NULL COZ IN DEPLOYMENT THIS WILL BE EASY*/
        $_SESSION['member_role'] = null;
        $_SESSION['member_id'] = null;
        $_SESSION['member_name'] = null;
        
        session_destroy();                  /*DELETING THE SESSION IE LOGOUT*/
    }
    
    
    public static function checkActiveSession(){
        if(!Session::isSessionStart()){
            Functions::redirect("login.php");
        }
    }

    
    
}
?>




























