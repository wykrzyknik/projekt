<?php
	namespace Models;


	/**
	 * Obsługa procesu logowania
	 */
	class Access extends \Models\PDODatabase {
		function __construct() {
			$this->table = 'uzytkownik';
			parent::__construct();
		}
		/**
		 * logowanie do systemu
		 */
		public function login($login, $haslo) {
			//pobranie z bazy informacji o użytkowniku posiadającym login
 		  	$data = array();
			$this->testConnection();
			$table = $this->getTableName();
			$this->testTable($table);
			try	{
					$query = 'SELECT * FROM ' . $table . ' WHERE login = :login AND haslo = :haslo';

					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':login', $login, \PDO::PARAM_STR);
					$stmt->bindValue(':haslo', md5($haslo), \PDO::PARAM_STR);
					if($stmt->execute())
							 $data = $stmt->fetchAll();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			$user = $data;
 			if(isset($user[0])){
				if($user[0]['ranga']==5){
				//if(isAdmin()==true){
				//zainicjalizowanie sesji
				\Tools\Access::login($login, $user[0]['imie'].' '.$user[0]['nazwisko'] , $user[0]['id'],$user[0]['ranga'],$user[0]['pesel'],$user[0]['miasto'],$user[0]['ulica'],$user[0]['numerdomu'],$user[0]['numerlokalu'],$user[0]['telefon'],$user[0]['email']);

 	        	return true;
					}
				if($user[0]['ranga']==1){
					\Tools\Access::login($login, $user[0]['imie'].' '.$user[0]['nazwisko'] , $user[0]['id'],$user[0]['ranga'],$user[0]['pesel'],$user[0]['miasto'],$user[0]['ulica'],$user[0]['numerdomu'],$user[0]['numerlokalu'],$user[0]['telefon'],$user[0]['email']);

	 	        	return true;
					//else{
					}
					//}
 			}
			return false;
		}

		/**
		 * Sprawdza zgodność hasła i jego powtórzenia
		 */

		public function checkPassword($haslo, $password2) {
			return $haslo === $password2;
		}
		/**
		 * Wylogowanie użytkownika z systemu
		 */
		 public function editPassword($id, $password) {

			$this->isEmpty([$id,$password]);
			$data = array();

			$model = new \Models\uzytkownik();
			$model->updatePassword($id, $password);
		}

	

		public function logout(){
			\Tools\Access::logout();
		}

		public function update($id, $login, $name, $surname,$password) {
			$counter = 0;
			$this->testConnection();
			$this->testTable($this->table);
			$this->isEmpty([$id, $login, $name, $surname,$password]);
			try	{
					$query = 'UPDATE `'.$this->table.'`
										SET
										name = :name,
										surname = :surname,
										password = :password';
					$query .= ' WHERE `id`= :id';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':login', $login, PDO::PARAM_STR);
					$stmt->bindValue(':name', $name, PDO::PARAM_STR);
					$stmt->bindValue(':surname', $surname, PDO::PARAM_STR);
					$stmt->bindValue(':password', md5($password), PDO::PARAM_STR);
					$stmt->bindValue(':id', $id, PDO::PARAM_INT);
					if($stmt->execute())
					  $counter += $stmt->rowCount();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $counter;
		}
	}
