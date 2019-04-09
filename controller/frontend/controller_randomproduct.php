<?php 
	class controller_randomproduct{
		public $model;
		public function __construct(){
			$this->model = new model();
			$arr = $this->model->get_all('select * from product order by rand() limit 3');
			include 'view/frontend/view_randomproduct.php';
		}
	}
	new controller_randomproduct();
 ?>