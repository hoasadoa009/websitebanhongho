<?php 
	class controller_product_detail_new{
		public $model;
		public function __construct(){
			$this->model = new model();
			$arr = $this->model->get_all('select * from product where new = 1 limit 0,7');
			include 'view/frontend/view_product_detail_new.php';
			
		}
	}
	new controller_product_detail_new();
 ?>