<?php 
	class controller_giohang{
		public $model;
		public function __construct(){
			$this->model = new model();
			
			
			//load view
			include "view/frontend/view_listgiohang.php";
		}
	}
	new controller_giohang();
 ?>