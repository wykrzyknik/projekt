<?php
	namespace Models;
	use \PDO;

    class uzytkownik extends PDODatabase {

    public function __construct() {
            $this->table = 'uzytkownik';
            parent::__construct();
    }

    public function getUser($login) {
            $this->isEmpty([$login]);
            $data = array();
            try {
                $query = 'SELECT * FROM '.$this->table.' WHERE login = :login';
                $stmt = $this->pdo->prepare($query);
                $stmt->bindValue(':login', $login, PDO::PARAM_STR);
                if($stmt->execute())
					 $data = $stmt->fetchAll();
                $stmt->closeCursor();
            } catch(\PDOException $e)	{
				throw new \Exceptions\Query($e);
            }
            return $data;
		}

		public function getLogin($id) {
			$login='';
			$this->isEmpty([$id]);
			$data = array();
			$this->testConnection();
			$this->testTable($this->table);
			try {
								$query = 'SELECT login FROM `'.$this->table.'` WHERE id = :id';
                $stmt = $this->pdo->prepare($query);
                $stmt->bindValue(':id', $id, PDO::PARAM_STR);
                if($stmt->execute())
					 				$data = $stmt->fetch();
                $stmt->closeCursor();
			}catch(\PDOException $e){
				throw new \Exceptions\Query($e);
      }
				$login=$data['login'];

        return $login;
		}
		public function getRanga($id) {
			$ranga='';
			$this->isEmpty([$id]);
			$data = array();
			$this->testConnection();
			$this->testTable($this->table);
			try {
								$query = 'SELECT ranga FROM `'.$this->table.'` WHERE id = :id';
                $stmt = $this->pdo->prepare($query);
                $stmt->bindValue(':id', $id, PDO::PARAM_STR);
                if($stmt->execute())
					 				$data = $stmt->fetch();
                $stmt->closeCursor();
			}catch(\PDOException $e){
				throw new \Exceptions\Query($e);
      }
				$ranga=$data['ranga'];

        return $ranga;
		}

		public function isRangaAdmin($ranga){
				if($ranga==5){
					return true;
				}
				return false;
		}
		public function isRangaUczestnik($ranga){
				if($ranga==1){
					return true;
				}
				return false;
		}

		public function updatePassword($id, $password) {
			$counter = 0;
			$this->testConnection();
			$this->testTable($this->table);
			$this->isEmpty([$id, $password]);
			try	{
				$query = 'UPDATE `'.$this->table.'` SET `Haslo`= :password';
				$query .= ' WHERE `id`= :id';
				$stmt = $this->pdo->prepare($query);
				$stmt->bindValue(':password', $Haslo, PDO::PARAM_STR);
				$stmt->bindValue(':id', $id, PDO::PARAM_INT);
				if($stmt->execute())
					$counter += $stmt->rowCount();
				$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
				print($e);
				throw new \Exceptions\Query($e);
			}

				return $counter;
      }
    }
