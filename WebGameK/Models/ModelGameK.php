<?php 
	class ModelGameK{
		public function __construct(){
		$db = mysqli_connect("localhost","root","","demogamk");
		mysqli_set_charset($db,"utf8");
		$this->db = $db;
		}
		public function doLogin(){
			$query = "SELECT * FROM `users` WHERE name = '".$_POST['name']."' AND password = '".$_POST['password']."'";

			$result = mysqli_query($this->db,$query);
			if(mysqli_num_rows($result)>0){
				$row = mysqli_fetch_assoc($result);
				return $row;
			}
			return false;
		}
		public function getDataUser(){
			$query = "SELECT * FROM users WHERE level = '1'";
			$listUser = mysqli_query($this->db,$query);
			return $listUser;
		}
		public function deleteUser(){
			$query = "DELETE FROM users WHERE id_user = '{$_GET['id_user']}'";
			$result = mysqli_query($this->db,$query);
			return $result;
		}
		public function doRegister($name,$password){
			$query = "INSERT INTO users (name,password,level) values ('".$name."','".$password."','1')";
				$result = mysqli_query($this->db,$query);
				return $result;
		}
	}
 ?>