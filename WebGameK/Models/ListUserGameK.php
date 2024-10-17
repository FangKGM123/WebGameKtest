<?php 
	require_once 'ModelGameK.php';
	class ListUser extends ModelGameK{
		public $tableName = 'users';
		public $columns = ['id_user','name','password'];
	}
 ?>