<?php
class User extends Db_methods  {

    protected static $db_table = "users";
    protected static $db_table_fields = array('username', 'password', 'first_name', 'last_name');
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    public static function verify_user($username, $password){
        global $database;
        $username = $database->escape_string($username);
        $password = $database->escape_string($password);
        
        $sql = "SELECT * FROM ".self::$db_table." WHERE ";
        $sql .= "username = '{$username}' ";
        $sql .= "AND ";
        $sql .= "password = '{$password}' ";
        $sql .= "LIMIT 1";

        $the_result_array = self::find_by_query($sql);
        
        return !empty($the_result_array) ? array_shift($the_result_array) : false;  
    }
    

    function is_valid_login($pin,$password)
    {
       global $db;
       $password = sha1($email . $password);
       $query = 'SELECT * FROM administrators
       WHERE emailAddress = :email AND password = :password';
       $statement = $db->prepare($query);
       $statement->bindValue(':email', $email);
       $statement->bindValue(':password', $password);
       $statement->execute();
       $valid = ($statement->rowCount() == 1);
       $statement->closeCursor();
       return $valid;
        
    }
    
    
} 



    // end User class


?>