<?php 
	class controller_topbrand{
		public $model;
		public function __construct(){
			$this->model = new model();
			$arr = $this->model->get_all('select * from category_brand order by rand() limit 7');
			include 'view/frontend/view_topbrand.php';
		}
	}
	new controller_topbrand();
 ?>