<?php
$db = new PDO('mysql:host=localhost;dbname=mypro_bbms','root','');







/*
namespace App\Database;
use PDO;
use PDOException;
class Database{
	
	public $db;
	public $host='localhost';
	public $dbname='e-travle';
	public $user ='root';
	public $password="";
	public function __construct(){
		try{
			$this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->password);
			catch(PDOException $error){
				echo $error->getMessage();
			}
		}
	}
}
*/
?>