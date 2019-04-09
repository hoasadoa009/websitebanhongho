<?php 
	class controller_list_title{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_list_title.php";
		}
	}
	new controller_list_title();
 ?>