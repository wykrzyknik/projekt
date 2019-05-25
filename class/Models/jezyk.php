<?php
	namespace Models;
	use \PDO;

  class jezyk extends PDODatabase {
		public function __construct() {
      	$this->table = 'jezyk';
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
		public function update($id, $NazwaJezyka) {
			$counter = 0;
			$this->testConnection();
			$this->testTable($this->table);
			$this->isEmpty([$NazwaJezyka]);
			try	{
					$query = 'UPDATE `'.$this->table.'`
										SET
										NazwaJezyka = :NazwaJezyka';
					$query .= ' WHERE `id`= :id';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':NazwaJezyka', $NazwaJezyka, PDO::PARAM_STR);
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
