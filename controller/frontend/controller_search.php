<?php 
	class controller_search{
		public $model;
		public function __construct(){
			$this->model = new model();
			//load view
			include "view/frontend/view_search.php";
		}
	}
	new controller_search();
 ?>