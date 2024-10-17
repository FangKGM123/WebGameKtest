<?php 
	class ViewsGameK{
		public function getPageHome(){
			include "Public/home.php";
		}
		public function getPageLogin(){
			include_once "Public/formlogin.php";
		}
		public function getPageRegister(){
			include_once "Public/formregister.php";
		}
		public function getPageUser($listUser){
			include_once "Public/home.php";
		}
		public function getPageAdmin($listUser){
			include_once "Public/pageuser.php";
		}
		public function addUser(){
			include_once "Public/formregister.php";
		}
}
 ?>