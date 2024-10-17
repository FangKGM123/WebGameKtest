<?php 
	require_once "Models/ModelGameK.php";
	require_once "Views/ViewGameK.php";
	class ControllerGameK
	{
		var $model,$view;
		public function __construct()
		{
			$this->view = new ViewsGameK();
			$this->model = new ModelGameK();
		}
		public function getPageHome(){
		$this->view->getPageHome();
	}
	public function getPageLogin(){
			$this->view->getPageLogin();
		}
		public function doLogin(){
			$result = $this->model->doLogin();
			$_SESSION['id_user'] = $result['id_user'];
			$_SESSION['name'] = $result['name'];
			$_SESSION['level'] = $result['level'];
			if ($result['level'] == 1){
				header("location:index.php?task=pageuser");
			}
			elseif($result['level'] == 2){
				header("location:index.php?task=pageadmin");
			}
		}
		public function deleteUser(){
			$this->model->deleteUser();
			header("location:index.php?task=getPageUser");
		}
		public function addUser(){
			$this->view->addUser();
		}
		public function doRegister($name,$password){
			$result = $this->model->doRegister($name,$password);
			$message = "Ban dang ki thanh cong";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$this->view->getPageRegister();
		}
		public function getPageUser(){
			$ListUser = $this->model->getDataUser();
			$this->view->getPageUser($ListUser);
		}
		public function getPageAdmin(){
			$ListUser = $this->model->getDataUser();
			$this->view->getPageAdmin($ListUser);
		}
		public function getPageRegister(){
			$this->view->getPageRegister();
		}
}
 ?>