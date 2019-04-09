<?php 
	class controller_login{
		//tao bien model
		public $model;
		public function __construct(){
			//khoi tao object cua class model, gan vao bien model
			$this->model = new model();
			//----------------
			//neu user an nut submit
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$username = $_POST["username"];
				$password = $_POST["password"];

				//kiem tra dang nhap
				$check = $this->model->get_a_record("select username, password from admin where username='$username'");
				if(isset($check->username)){
					if($check->password == $password){
						//gan vao session
						$_SESSION["username"] = $username;

						//quay tro lai trang admin
						header("location:admin.php");
					}
				}else{
					
				}
			}

			//----------------
			//load view
			include "view/backend/view_login.php";
		}
	}
	new controller_login();
 ?>