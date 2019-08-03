<?php
namespace Core\Functions ; 

// this contains the methods that will be queried into the DB 

class DBMethods {
	
	public static function find_all($table) {
		global $db; 	
	}

	function rank_a_candidate()
	{
		// fetch all a candidates profile
		$sql = 'SELECT * from characters';		
		// rank the candidates by comparing them side by side
		var_dump($sql) ; 			
	}


	function insert_to_db($email,$full_name,$password)
	{
		$query = 'INSERT INTO $table_name($full_name, $email, $password)
		VALUES (:full_name, :email, :pwd)';
		$statement = $db->prepare($query);
		$statement->bindValue(':full_name', $full_name);
		$statement->bindValue(':email', $email);
		$statement->bindValue(':password', $password);
		$statement->execute();
		$address_id = $db->lastInsertId();
		$statement->closeCursor();
		return $address_id;		
	}
	
	public static function find_by_id($id) {
		$the_result_array = static::find_by_query("SELECT * FROM ". static::$db_table." WHERE id={$id} LIMIT 1");
		
		return !empty($the_result_array) ? array_shift($the_result_array) : false;     
		
	}
	

	public static function find_by_query($sql) {
		global $database;   
		$result_set = $database->query($sql);
		$the_object_array = array();
		
		while($row = mysqli_fetch_array($result_set)) {
			$the_object_array[] = static::instantiation($row);
		}
		
		return $the_object_array;
	}




	public static function find_by_table($table, $key) {

	}


	
	public static function instantiation($the_record){
		$calling_class = get_called_class();

		$the_object = new $calling_class;            
		
		foreach($the_record as $the_attribute => $value) {
			if($the_object->has_the_attribute($the_attribute)){
				$the_object->$the_attribute = $value;
			}
			
		}    
		/*
    $the_object->id = $found_user['id']; 
    $the_object->username = $found_user['username']; 
    $the_object->password = $found_user['password']; 
    $the_object->first_name = $found_user['first_name'];
    $the_object->last_name = $found_user['last_name'];   
    
    */
    
    return $the_object;  
}



private function has_the_attribute($the_attribute) {
	
	$object_properties = get_object_vars($this);
	
	return array_key_exists($the_attribute, $object_properties);
	
}   



protected function properties() {	
	     //return get_object_vars();   
	$properties = array();
	foreach(static::$db_table_fields as $db_field) {
		if(property_exists($this, $db_field)){
			$properties[$db_field] = $this->$db_field; 
		}   
	} 
	
	return $properties;

}


} 