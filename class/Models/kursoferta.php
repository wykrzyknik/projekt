<?php
	namespace Models;
	use \PDO;

  class kursoferta extends PDODatabase {
		public function __construct() {
      	$this->table = 'kursoferta';
				parent::__construct();
    }

		public function selectAllInCategory($jezyk){
				$data = array();
				$this->testConnection();
				$this->testTable($this->table);
	      try	{
						$query = 'SELECT * FROM `'.$this->table.'` WHERE id = :jezyk';

						$stmt = $this->pdo->prepare($query);
						$stmt->bindValue(':jezyk', $jezyk, PDO::PARAM_INT);
						if($stmt->execute())
						     $data = $stmt->fetchAll();
						$stmt->closeCursor();
	      }
	      catch(\PDOException $e)	{
	          throw new \Exceptions\Query($e);
	      }
	      return $data;
		}
		public function insert($Idjezyka, $Nazwaoferty, $PoziomKursu, $Cena) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
			if(!isset($Idjezyka, $Nazwaoferty, $PoziomKursu, $Cena))
					throw new AppException(ErrorName::$empty);
			try	{
					$query = 'INSERT INTO `'.$this->table.'` (
										`Idjezyka`,
										`Nazwaoferty`,
										`PoziomKursu`,
										`Cena`)';
					$query .= ' VALUES (:Idjezyka,
														  :Nazwaoferty,
															:PoziomKursu,
															:Cena)';
					$stmt = $this->pdo->prepare($query);

					$stmt->bindValue(':Idjezyka', $Idjezyka, PDO::PARAM_STR);
					$stmt->bindValue(':Nazwaoferty', $Nazwaoferty, PDO::PARAM_STR);
					$stmt->bindValue(':PoziomKursu', $PoziomKursu, PDO::PARAM_STR);
					$stmt->bindValue(':Cena', $Cena, PDO::PARAM_INT);
					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}

		public function update($id, $Idjezyka, $Nazwaoferty, $PoziomKursu, $Cena) {
			$counter = 0;
			$this->testConnection();
			$this->testTable($this->table);
			$this->isEmpty([$Idjezyka, $Nazwaoferty, $PoziomKursu, $Cena]);
			try	{
					$query = 'UPDATE `'.$this->table.'`
										SET
										Idjezyka = :Idjezyka,
										Nazwaoferty = :Nazwaoferty,
										PoziomKursu = :PoziomKursu,
										Cena = :Cena';
					$query .= ' WHERE `id`= :id';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':Idjezyka', $Idjezyka, PDO::PARAM_STR);
					$stmt->bindValue(':Nazwaoferty', $Nazwaoferty, PDO::PARAM_STR);
					$stmt->bindValue(':PoziomKursu', $PoziomKursu, PDO::PARAM_STR);
					$stmt->bindValue(':Cena', $Cena, PDO::PARAM_STR);
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
