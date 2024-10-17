<?php 
	require_once "Controller/ControllerGameK.php";
	session_start();

	$ControllerGameKs = new ControllerGameK();

	$task = isset($_GET['task'])?$_GET['task']:null;
	
	//login
	$name = isset($_POST['name'])?$_POST['name']:null;
	$password = isset($_POST['password'])? $_POST['password']:null;
	$repassword = isset($_POST['repassword'])? $_POST['repassword']:null;

	if(isset($_POST['login'])){
		$ControllerGameKs->doLogin();
	}

	if(isset($_POST['register'])){
		if (empty($name) || empty($password) || empty($repassword)){
			$message = "Ban khong duoc de trong";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		elseif($password != $repassword){
		$message = "Mat khau khong trugn nhau";
			echo "<script type='text/javascript'>alert('$message');</script>";
	}
	elseif(isset($name) && isset($password) && isset($repassword)){
		$ControllerGameKs->doRegister($name,$password);
	}
}
	switch ($task) {
		case 'pagehome':
			$ControllerGameKs->getPageHome();
			break;
		case 'pagelogin':
			$ControllerGameKs->getPageLogin();
			break;
		case 'pageregister':
			$ControllerGameKs->getPageRegister();
			break;
			
		case 'pageuser':
			$ControllerGameKs->getPageUser();
			break;
		case 'pageadmin':
			$ControllerGameKs->getPageAdmin();
			break;
		case 'deleteUser':
			$ControllerGameKs->deleteUser();
			break;
		case 'addUser':
			$ControllerShoe->addUser();
			break;
			default:
			$ControllerGameKs->getPageHome();
			break;
	}
 ?>