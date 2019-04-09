<?php 
	class controller_blog{
		public $model;
		public function __construct(){
			$this->model=new model();
			$arr=$this->model->get_all("select * from news order by date_news desc limit 6 ");
			include 'view/frontend/view_blog.php';
		}
	}
	new controller_blog();
 ?>