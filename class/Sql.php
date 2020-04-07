<?php

class Sql extends PDO{ // a classe é extendida da Classe nativa "PDO", ou seja ela herda todas as funções

		private $conn;


		public function __construct(){ // metodo que faz a conexão ser automatica quando instanciar a class "Sql"

		$this->conn = new PDO ("mysql:dbname=dbphp7;host=localhost", "root","");
		}


		private function setParams($statemant,$parameters = array()){

			foreach ($parameters as $key => $value) {

				$this->setParam($statemant,$key,$value);

			}

		}

		private function setParam($statemant, $key, $value){
			$statemant->bindParam($key,$value);
		}

		public function query($rawQuery, $params = array()){


			$stmt = $this->conn->prepare($rawQuery);

			$this->setParams($stmt,$params);

			$stmt->execute();

			return $stmt;

		}


		public function select($rawQuery, $params = array()):array{
			$stmt = $this->query($rawQuery,$params);

			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}










}






?>