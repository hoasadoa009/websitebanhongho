<?php 
	class controller_checkout{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_checkout.php";
		}
	}
	new controller_checkout();
 ?>