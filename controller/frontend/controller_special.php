<?php 
	class controller_special{
		public $model;
		public function __construct(){
			$this->model = new model();
			$arr = $this->model->get_all('select * from product where special = 1 order by rand() limit 4');
			include 'view/frontend/view_special.php';
		}
	}
	new controller_special();
 ?>