<?php 
	class controller_add_edit_category_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//--------
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_category_product&act=do_edit&id=$id";
					//lay mot ban ghi
					$arr = $this->model->get_a_record("select * from category_product where id_category_product=$id");
					//load view
					include "view/backend/view_add_edit_category_product.php";
				break;
				case "do_edit":
					$c_name_category = $_POST["c_name_category"];
					
					//edit ban ghi
					$this->model->execute("update category_product set name_category_product='$c_name_category' where id_category_product=$id");					
					
					
					header("location:admin.php?controller=category_product");
				break;
				case "add":
					//dinh nghia bien $form_action de chi action cua form
					$form_action = "admin.php?controller=add_edit_category_product&act=do_add";
					//load view
					include "view/backend/view_add_edit_category_product.php";
				break;
				case "do_add":
					$c_name_category = $_POST["c_name_category"];
					
					//them ban ghi vao csdl
					$this->model->execute("insert into category_product(name_category_product) values('$c_name_category')");
					//------------
					//quay lai trang tin tuc
					header("location:admin.php?controller=category_product");
				break;
			}
			//--------
		}
	}
	new controller_add_edit_category_product();
 ?>