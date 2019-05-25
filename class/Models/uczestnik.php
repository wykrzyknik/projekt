<?php
	namespace Models;
	use \PDO;

  class uczestnik extends PDODatabase {
		public function __construct() {
      	$this->table = 'uczestnik';
				parent::__construct();
    }
		public function insert($Nazwisko,$Imie,$Data_ur,$PESEL,$Kod_pocztowy,$Miasto,$Ulica,$Numerlokalu,$Telefon,$Email) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
      if(!isset($Nazwisko,$Imie,$Data_ur,$PESEL,$Kod_pocztowy,$Miasto,$Ulica,$Numerlokalu,$Telefon,$Email))
					throw new AppException(ErrorName::$empty);
			try	{
					$query = 'INSERT INTO `'.$this->table.'` (
										`Nazwisko`,
                    `Imie`,
                    `Data_ur`,
                    `PESEL`,
                    `Kod_pocztowy`,
                    `Miasto`,
                    `Ulica`,
                    `Numerlokalu`,
                    `Telefon`,
                    `Email`)';
					$query .= ' VALUES (:Nazwisko,
          :Imie,
          :Data_ur,
          :PESEL,
          :Kod_pocztowy,
          :Miasto,
          :Ulica,
          :Numerlokalu,
          :Telefon,
          :Email)';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':Nazwisko', $Nazwisko, PDO::PARAM_STR);
          $stmt->bindValue(':Imie', $Imie, PDO::PARAM_STR);
          $stmt->bindValue(':Data_ur', $Data_ur, PDO::PARAM_STR);
          $stmt->bindValue(':PESEL', $PESEL, PDO::PARAM_STR);
          $stmt->bindValue(':Kod_pocztowy', $Kod_pocztowy, PDO::PARAM_STR);
          $stmt->bindValue(':Miasto', $Miasto, PDO::PARAM_STR);
          $stmt->bindValue(':Ulica', $Ulica, PDO::PARAM_STR);
          $stmt->bindValue(':Numerlokalu', $Numerlokalu, PDO::PARAM_STR);
          $stmt->bindValue(':Telefon', $Telefon, PDO::PARAM_STR);
          $stmt->bindValue(':Email', $Email, PDO::PARAM_STR);
					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}


		public function update($id, $Nazwisko,$Imie,$Data_ur,$PESEL,$Kod_pocztowy,$Miasto,$Ulica,$Numerlokalu,$Telefon,$Email) {
			$counter = 0;
			$this->testConnection();
			$this->testTable($this->table);
			$this->isEmpty([$Nazwisko,$Imie,$Data_ur,$PESEL,$Kod_pocztowy,$Miasto,$Ulica,$Numerlokalu,$Telefon,$Email]);
			try	{
					$query = 'UPDATE `'.$this->table.'`
										SET
										Nazwisko = :Nazwisko,
                    Imie = :Imie,
                    Data_ur = :Data_ur,
										PESEL = :PESEL,
										Kod_pocztowy = :Kod_pocztowy,
                    Miasto = :Miasto,
                    Ulica = :Ulica,
                    Numerlokalu = :Numerlokalu,
										Telefon = :Telefon,
                    Email = :Email';
					$query .= ' WHERE `id`= :id';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':Nazwisko', $Nazwisko, PDO::PARAM_STR);
          $stmt->bindValue(':Imie', $Imie, PDO::PARAM_STR);
          $stmt->bindValue(':Data_ur', $Data_ur, PDO::PARAM_STR);
          $stmt->bindValue(':PESEL', $PESEL, PDO::PARAM_STR);
          $stmt->bindValue(':Kod_pocztowy', $Kod_pocztowy, PDO::PARAM_STR);
          $stmt->bindValue(':Miasto', $Miasto, PDO::PARAM_STR);
          $stmt->bindValue(':Ulica', $Ulica, PDO::PARAM_STR);
          $stmt->bindValue(':Numerlokalu', $Numerlokalu, PDO::PARAM_STR);
          $stmt->bindValue(':Telefon', $Telefon, PDO::PARAM_STR);
          $stmt->bindValue(':Email', $Email, PDO::PARAM_STR);
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
