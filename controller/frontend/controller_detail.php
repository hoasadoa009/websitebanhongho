<?php 
	class controller_detail{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_detail.php";
		}
	}
	new controller_detail();
 ?>