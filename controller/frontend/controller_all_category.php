<?php 
	class controller_all_category{
		public $model;
		public function __construct(){
			$this->model=new model();
			$arr=$this->model->get_all("select * from category_product ");
			include 'view/frontend/view_all_category.php';
		}
	}
	new controller_all_category();
 ?>