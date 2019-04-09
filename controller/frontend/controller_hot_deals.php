<?php 
	class controller_hot_deals{
		public $model;
		public function __construct(){
			$this->model=new model();
			$arr=$this->model->get_all("select * from product where deals = 1");
			include 'view/frontend/view_hot_deals.php';
		}
	}
	new controller_hot_deals();
 ?>