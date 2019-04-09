<?php 
	class controller_topcategory{
		public $model;
		public function __construct(){
			$this->model = new model();
			$arr = $this->model->get_all('select * from category_brand order by rand() limit 4');
			include 'view/frontend/view_topcategory.php';
		}
	}
	new controller_topcategory();
 ?>