<?php
	namespace Models;
	use \PDO;

  class kursuczestnik extends PDODatabase {
		public function __construct() {
      	$this->table = 'kursuczestnik';
				parent::__construct();
    }

		public function selectAllInKurs($kurs){
				$data = array();
				$this->testConnection();
				$this->testTable($this->table);
	      try	{
						$query = 'SELECT * FROM `'.$this->table.'` WHERE id = :kurs';

						$stmt = $this->pdo->prepare($query);
						$stmt->bindValue(':kurs', $kurs, PDO::PARAM_INT);
						if($stmt->execute())
						     $data = $stmt->fetchAll();
						$stmt->closeCursor();
	      }
	      catch(\PDOException $e)	{
	          throw new \Exceptions\Query($e);
	      }
	      return $data;
		}

    public function selectAllInUczestnik($uczestnik){
				$data = array();
				$this->testConnection();
				$this->testTable($this->table);
	      try	{
						$query = 'SELECT * FROM `'.$this->table.'` WHERE id = :uczestnik';

						$stmt = $this->pdo->prepare($query);
						$stmt->bindValue(':uczestnik', $uczestnik, PDO::PARAM_INT);
						if($stmt->execute())
						     $data = $stmt->fetchAll();
						$stmt->closeCursor();
	      }
	      catch(\PDOException $e)	{
	          throw new \Exceptions\Query($e);
	      }
	      return $data;
		}
		public function insert($Idkursu, $Iduczestnika, $Oplacano, $Opis) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
			if(!isset($Idkursu, $Iduczestnika, $Oplacano, $Opis))
					throw new AppException(ErrorName::$empty);
			try	{
					$query = 'INSERT INTO `'.$this->table.'` (
										`Idkursu`,
										`Iduczestnika`,
										`Oplacano`,
										`Opis`)';
					$query .= ' VALUES (:Idkursu,
														  :Iduczestnika,
															:Oplacano,
                              :Opis)';
					$stmt = $this->pdo->prepare($query);

					$stmt->bindValue(':Idkursu', $Idkursu, PDO::PARAM_STR);
					$stmt->bindValue(':Iduczestnika', $Iduczestnika, PDO::PARAM_STR);
					$stmt->bindValue(':Oplacano', $Oplacano, PDO::PARAM_STR);
					$stmt->bindValue(':Opis', $Opis, PDO::PARAM_INT);
					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}
		public function update($id, $Idkursu, $Iduczestnika, $Oplacano, $Opis) {
			$counter = 0;
			$this->testConnection();
			$this->testTable($this->table);
			$this->isEmpty([$Idkursu, $Iduczestnika, $Oplacano, $Opis]);
			try	{
					$query = 'UPDATE `'.$this->table.'`
										SET
										Idkursu = :Idkursu,
										Iduczestnika = :Iduczestnika,
										Oplacano = :Oplacano,
										Opis = :Opis';
					$query .= ' WHERE `id`= :id';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':Idkursu', $Idkursu, PDO::PARAM_STR);
					$stmt->bindValue(':Iduczestnika', $Iduczestnika, PDO::PARAM_STR);
					$stmt->bindValue(':Oplacano', $Oplacano, PDO::PARAM_STR);
					$stmt->bindValue(':Opis', $Opis, PDO::PARAM_STR);
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
