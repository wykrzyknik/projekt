<?php
	namespace Models;
	use \PDO;

  class kurs extends PDODatabase {
		public function __construct() {
      	$this->table = 'kurs';
				parent::__construct();
    }

		public function selectAllInKursOferta($kursoferta){
				$data = array();
				$this->testConnection();
				$this->testTable($this->table);
	      try	{
						$query = 'SELECT * FROM `'.$this->table.'` WHERE id = :kursoferta';

						$stmt = $this->pdo->prepare($query);
						$stmt->bindValue(':kursoferta', $kursoferta, PDO::PARAM_INT);
						if($stmt->execute())
						     $data = $stmt->fetchAll();
						$stmt->closeCursor();
	      }
	      catch(\PDOException $e)	{
	          throw new \Exceptions\Query($e);
	      }
	      return $data;
		}

    public function selectAllInLektor($lektor){
				$data = array();
				$this->testConnection();
				$this->testTable($this->table);
	      try	{
						$query = 'SELECT * FROM `'.$this->table.'` WHERE id = :lektor';

						$stmt = $this->pdo->prepare($query);
						$stmt->bindValue(':lektor', $lektor, PDO::PARAM_INT);
						if($stmt->execute())
						     $data = $stmt->fetchAll();
						$stmt->closeCursor();
	      }
	      catch(\PDOException $e)	{
	          throw new \Exceptions\Query($e);
	      }
	      return $data;
		}
/*public function selectAllInKurs($kursoferta,$jezyk){
			$data = array();
			$this->testConnection();
			$this->testTable($this->table);
     	try{
       $query= 'SELECT `'.$this->table.'`.id, $kursoferta.Nazwaoferty, jezyk.NazwaJezyka FROM ((kurs INNER JOIN kursoferta ON kurs.Idkursuoferta = kursoferta.id) INNER JOIN jezyk ON kursoferta.Idjezyka = jezyk.id)'
			}

		}*/


		//try{
		// $query= 'SELECT `'.$this->table.'`.id, kursoferta.Nazwaoferty, jezyk.NazwaJezyka FROM ((kurs INNER JOIN kursoferta ON kurs.Idkursuoferta = kursoferta.id) INNER JOIN jezyk ON kursoferta.Idjezyka = jezyk.id)'
	//	}

		public function insert($Idkursuoferta, $Idlektora, $Maksymalna_liczba_os, $Nrsali,$data_rozpoczecia,$data_zakonczenia) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
			if(!isset($Idkursuoferta, $Idlektora, $Maksymalna_liczba_os, $Nrsali,$data_rozpoczecia,$data_zakonczenia))
					throw new AppException(ErrorName::$empty);
			try	{
					$query = 'INSERT INTO `'.$this->table.'` (
										`Idkursuoferta`,
										`Idlektora`,
										`Maksymalna_liczba_os`,
										`Nrsali`,
                  `data_rozpoczecia`,
              `data_zakonczenia`)';
					$query .= ' VALUES (:Idkursuoferta,
														  :Idlektora,
															:Maksymalna_liczba_os,
                              :Nrsali,
															:data_rozpoczecia,
                              :data_zakonczenia)';
					$stmt = $this->pdo->prepare($query);

					$stmt->bindValue(':Idkursuoferta', $Idkursuoferta, PDO::PARAM_STR);
					$stmt->bindValue(':Idlektora', $Idlektora, PDO::PARAM_STR);
					$stmt->bindValue(':Maksymalna_liczba_os', $Maksymalna_liczba_os, PDO::PARAM_STR);
					$stmt->bindValue(':Nrsali', $Nrsali, PDO::PARAM_INT);
          $stmt->bindValue(':data_rozpoczecia', $data_rozpoczecia, PDO::PARAM_STR);
					$stmt->bindValue(':data_zakonczenia', $data_zakonczenia, PDO::PARAM_INT);
					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}
		public function update($id, $Idkursuoferta, $Idlektora, $Maksymalna_liczba_os, $Nrsali,$data_rozpoczecia,$data_zakonczenia) {
				$counter = 0;
				$this->testConnection();
				$this->testTable($this->table);
				$this->isEmpty([$Idkursuoferta, $Idlektora, $Maksymalna_liczba_os, $Nrsali,$data_rozpoczecia,$data_zakonczenia]);
				try	{
						$query = 'UPDATE `'.$this->table.'`
											SET
											Idkursuoferta = :Idkursuoferta,
											Idlektora = :Idlektora,
											Maksymalna_liczba_os = :Maksymalna_liczba_os,
											Nrsali = :Nrsali,
											data_rozpoczecia = :data_rozpoczecia,
											data_zakonczenia = :data_zakonczenia';
						$query .= ' WHERE `id`= :id';
						$stmt = $this->pdo->prepare($query);
						$stmt->bindValue(':Idkursuoferta', $Idkursuoferta, PDO::PARAM_STR);
						$stmt->bindValue(':Idlektora', $Idlektora, PDO::PARAM_STR);
						$stmt->bindValue(':Maksymalna_liczba_os', $Maksymalna_liczba_os, PDO::PARAM_STR);
            $stmt->bindValue(':Nrsali', $Nrsali, PDO::PARAM_STR);
            $stmt->bindValue(':data_rozpoczecia', $data_rozpoczecia, PDO::PARAM_STR);
						$stmt->bindValue(':data_zakonczenia', $data_zakonczenia, PDO::PARAM_STR);
						$stmt->bindValue(':id', $id, PDO::PARAM_STR);
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
