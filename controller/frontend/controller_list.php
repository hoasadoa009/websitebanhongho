<?php 
	class controller_list{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_list.php";
		}
	}
	new controller_list();
 ?>