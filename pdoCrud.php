<?php
class pdoCrud{
	private $host="localhost";
	private $user="root";
	private $db="test";
	private $pass="";
	private $conn;

	public function __construct(){
		$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
	}

	public function getData($short_url){
		$sql="SELECT * FROM `url_shortener` WHERE short_url = :short_url";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':short_url'=>$short_url));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		return $data;
	}


	public function insert($actual_url,$short_url){
		$sql = "INSERT INTO `url_shortener` SET actual_url=:actual_url,short_url=:short_url";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':actual_url'=>$actual_url,':short_url'=>$short_url));
		return true;
	}
}
