<?php 
	class controller_slide{
		public $model;
		public function __construct(){
			$this->model = new model();
			$arr = $this->model->get_all('select * from slide');
			include 'view/frontend/view_slide.php';
			
		}
	}
	new controller_slide();
 ?>