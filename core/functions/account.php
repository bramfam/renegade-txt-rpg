<?php
/*refers to the account / owner / the users table...*/
namespace Core\Functions ; 
ini_set('memory_limit', '-1');
class Account extends DBMethods { 

	public static function register($full_name, $email, $pwd )
	{
		// die(SITE_ROOT);
		global $db;

		print_r($GLOBALS);
	// associative array $result = $prep->fetchAll();		
		// ob_start();		
		
		$query = 'INSERT INTO users	($full_name, $email, $password)
		VALUES (:full_name, :email, :pwd)';

		var_dump($db);

		$statement = $db->prepare($query);
		$statement->bindValue(':full_name', $full_name);
		$statement->bindValue(':email', $email);
		$statement->bindValue(':password', $password);
		$statement->execute();
		$address_id = $db->lastInsertId();

		$statement->closeCursor();


		print $address_id;


// if the email is found then check if email's account is activated or not.


	//  if it's activated already then send a proper response
		if ( $status == 1){
			redirect('index.php');
		}

 // if it's not then send an email that he needs to verify his account. 	
	// 	change the activation status to active then go away.
		else { 
			$this->toggleActiveStatus();
		}

		// it's not found then send a proper response
		// then check if the user's status is 0 if 
	}
	public function toggleActiveStatus(){

	}
	
	protected function checkIfEmailIsFound($email){
		return $email ."is found";
	}

}	