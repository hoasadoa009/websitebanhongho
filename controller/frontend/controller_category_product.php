<?php 
	class controller_category_product{
		public $model;
		public function __construct(){
			$this->model=new model();
			$arr=$this->model->get_all("select * from category_product ");
			include 'view/frontend/view_category_product.php';
		}
	}
	new controller_category_product();
 ?>