<?php 
	class controller_dangki{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_dangki.php";
		}
	}
	new controller_dangki();
 ?>