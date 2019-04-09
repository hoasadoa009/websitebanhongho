<?php 
	class controller_hotdeals{
		public $model;
		public function __construct(){
			$this->model = new model();
			$arr = $this->model->get_all('select * from product where deals = 1 limit 3');
			include 'view/frontend/view_hotdeals.php';
		}
	}
	new controller_hotdeals();
 ?>