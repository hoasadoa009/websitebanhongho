<?php 
	class controller_product_sale{
		public $model;
		public function __construct(){
			$this->model = new model();
			$arr = $this->model->get_all('select * from product where new = 1 and sale >= 20 limit 0,7');
			include 'view/frontend/view_product_sale.php';
		}
	}
	new controller_product_sale();
 ?>