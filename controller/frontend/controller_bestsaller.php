<?php 
	class controller_bestsaller{
		public $model;
		public function __construct(){
			$this->model = new model();
			$arr = $this->model->get_all('select * from product where sale >= 40 order by rand() limit 3');
			include 'view/frontend/view_bestsaller.php';
		}
	}
	new controller_bestsaller();
 ?>