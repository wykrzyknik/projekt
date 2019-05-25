<?php
	namespace Models;
	use \PDO;

  class jezyk_archiwizacja extends PDODatabase {
		public function __construct() {
      	$this->table = 'jezyk_archiwizacja';
				parent::__construct();
    }


		public function insert($NazwaJezyka) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
			$this->isEmpty([$NazwaJezyka]);

			try	{
					$query = 'INSERT INTO `'.$this->table.'` (
						`NazwaJezyka`)';
					$query .= ' VALUES (:NazwaJezyka)';
					$stmt = $this->pdo->prepare($query);

          $stmt -> bindValue(':NazwaJezyka', $NazwaJezyka, PDO::PARAM_STR);

					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}
		public function update($idu, $NazwaJezyka) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
			if(!isset($idu, $NazwaJezyka))
					throw new AppException(ErrorName::$empty);
			try	{
					$query = 'UPDATE `'.$this->table.'`
										SET
										NazwaJezyka = :NazwaJezyka,

										WHERE id = :idu';
					$stmt = $this->pdo->prepare($query);

					$stmt->bindValue(':idu', $idu, PDO::PARAM_STR);
					$stmt->bindValue(':imie', $imie, PDO::PARAM_STR);
          d($query);
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
