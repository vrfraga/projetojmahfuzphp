<?php 

namespace Hcode\DB;


class Sql {

 //public function __construct()
//	{
// 
//       $this->conn = new \PDO (
//
//			"(DESCRIPTION =
//				(ADDRESS_LIST =
//				  (ADDRESS = (PROTOCOL = TCP)(HOST = 192.42.103.5)(PORT = 1521))
//				)
//				(CONNECT_DATA =
//				  (SERVICE_NAME = DBHOM00)
//				)
//			  )"
			   
				   

				   
//			$db_username = "prdgemco";
//			$db_password = "prdgemco";

//			try{
//				$conn = new PDO("oci:dbname=".$tns,$db_username,$db_password);
//				return $conn;
//				echo "conectado com sucesso";
//			}catch(PDOException $e){
//				echo ($e->getMessage());
			   // echo "erro de cconexao";
//			}
      

//	}	
	
	
			
	private function setParams($statement, $parameters = array())
	{

		foreach ($parameters as $key => $value) {
			
			$this->bindParam($statement, $key, $value);

		}

	}

	private function bindParam($statement, $key, $value)
	{

		$statement->bindParam($key, $value);

	}

	public function query($rawQuery, $params = array())
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);

	}

}


?>