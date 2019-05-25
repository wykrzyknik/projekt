<?php
	namespace Models;


	/**
	 * Obsługa procesu rejestracji
	 */
	class Reg extends \Models\PDODatabase {
		function __construct() {
			$this->table = 'user';
			parent::__construct();
		}
		/**
		 * rejestracja
		 */
		/*public function register($login, $name, $surname,$password) {

 		  	$data = array();
			$this->testConnection();
			$table = $this->getTableName();
			$this->testTable($table);
			try	{
        $query = 'INSERT INTO `'.$this->table.'` (
                  `login`,
                  `name`,
                  `surname`,
                  `password`)';
        $query .= ' VALUES (:login,
                  :name,
                  :surname,
                  :password)';

                  /*$query= 'INSERT INTO user (`login`,`name`, `surname`, `password`)
VALUES ($login, $name, $surname:, $password)';*/
					/*$query = 'INSERT INTO .$table(login, name, surname, password). VALUES($login,$name,$surname,$password)';*/
					/*$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':login', $login, \PDO::PARAM_STR);
					$stmt->bindValue(':name', $name, \PDO::PARAM_STR);
					$stmt->bindValue(':surname', $surname, \PDO::PARAM_STR);
          $stmt->bindValue(':password', md5($password), \PDO::PARAM_STR);
					if($stmt->execute())
					$data = $stmt->fetchAll();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			$user = $data;
 			if(isset($user[0])){
 	        	return true;
 			}
			return false;
		}*/


		public function register($login, $name, $surname,$password) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
			$this->isEmpty([$login, $name, $surname,$password]);

			try	{
				$query = 'INSERT INTO `'.$this->table.'` (
									`login`,
									`name`,
									`surname`,
									`password`)';
				$query .= ' VALUES (:login,
									:name,
									:surname,
									:password)';
									$stmt = $this->pdo->prepare($query);
									$stmt->bindValue(':login', $login, \PDO::PARAM_STR);
									$stmt->bindValue(':name', $name, \PDO::PARAM_STR);
									$stmt->bindValue(':surname', $surname, \PDO::PARAM_STR);
									$stmt->bindValue(':password', md5($password), \PDO::PARAM_STR);
					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}

	}
