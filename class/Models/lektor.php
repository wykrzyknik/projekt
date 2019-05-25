<?php
	namespace Models;
	use \PDO;

  class lektor extends PDODatabase {
		public function __construct() {
      	$this->table = 'lektor';
				parent::__construct();
    }
		public function insert($Nazwisko,$Imie,$Telefon,$Email,$Miasto,$Ulica,$Numerdomu,$Numerlokalu) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
      if(!isset($Nazwisko, $Imie, $Telefon,$Email ,$Miasto,$Ulica,$Numerdomu,$Numerlokalu))
					throw new AppException(ErrorName::$empty);
			try	{
					$query = 'INSERT INTO `'.$this->table.'` (
										`Nazwisko`,
                    `Imie`,
                    `Telefon`,
                    `Email`,
                    `Miasto`,
                    `Ulica`,
                    `Numerdomu`,
                    `Numerlokalu`)';
					$query .= ' VALUES (:Nazwisko,
          :Imie,
          :Telefon,
          :Email,
          :Miasto,
          :Ulica,
          :Numerdomu,
          :Numerlokalu)';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':Nazwisko', $Nazwisko, PDO::PARAM_STR);
          $stmt->bindValue(':Imie', $Imie, PDO::PARAM_STR);
          $stmt->bindValue(':Telefon', $Telefon, PDO::PARAM_STR);
          $stmt->bindValue(':Email', $Email, PDO::PARAM_STR);
          $stmt->bindValue(':Miasto', $Miasto, PDO::PARAM_STR);
          $stmt->bindValue(':Ulica', $Ulica, PDO::PARAM_STR);
          $stmt->bindValue(':Numerdomu', $Numerdomu, PDO::PARAM_STR);
          $stmt->bindValue(':Numerlokalu', $Numerlokalu, PDO::PARAM_STR);
					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}

		public function update($id, $Nazwisko,$Imie,$Telefon,$Email,$Miasto,$Ulica,$Numerdomu,$Numerlokalu) {
			$counter = 0;
			$this->testConnection();
			$this->testTable($this->table);
			$this->isEmpty([$Nazwisko,$Imie,$Telefon,$Email,$Miasto,$Ulica,$Numerdomu,$Numerlokalu]);
			try	{
					$query = 'UPDATE `'.$this->table.'`
										SET
										Nazwisko = :Nazwisko,
                    Imie = :Imie,
                    Telefon = :Telefon,
                    Email = :Email,
                    Miasto = :Miasto,
                    Ulica = :Ulica,
                    Numerdomu = :Numerdomu,
                    Numerlokalu = :Numerlokalu';
					$query .= ' WHERE `id`= :id';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':Nazwisko', $Nazwisko, PDO::PARAM_STR);
					$stmt->bindValue(':Imie', $Imie, PDO::PARAM_STR);
					$stmt->bindValue(':Telefon', $Telefon, PDO::PARAM_STR);
					$stmt->bindValue(':Email', $Email, PDO::PARAM_STR);
					$stmt->bindValue(':Miasto', $Miasto, PDO::PARAM_STR);
					$stmt->bindValue(':Ulica', $Ulica, PDO::PARAM_STR);
					$stmt->bindValue(':Numerdomu', $Numerdomu, PDO::PARAM_STR);
					$stmt->bindValue(':Numerlokalu', $Numerlokalu, PDO::PARAM_STR);
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
