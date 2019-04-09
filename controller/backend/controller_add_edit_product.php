<?php 
	function input_post($key, $default = ""){
		return isset($_POST[$key]) ? $_POST[$key] : $default;
	}

	class controller_add_edit_product{
		public $model;
		public function __construct(){
			$this->model = new model();
			//--------
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_product&act=do_edit&id=$id";
					//lay mot ban ghi
					$arr = $this->model->get_a_record("select * from product where id_product=$id");
					//load view
					include "view/backend/view_add_edit_product.php";
				break;
				case "do_edit":
					$c_name=input_post("c_name");
					$c_price=input_post("c_price");
					$c_color=input_post("c_color");
					$c_new = isset($_POST["c_new"]) ? 1 : 0;
					$c_deals=isset($_POST['c_deals']) ? 1 : 0;
					$c_special=isset($_POST['c_special']) ? 1 : 0;
					$c_sale=input_post("c_sale");
					

					$c_shortdescription=input_post("c_shortdescription");
					$c_description=input_post("c_description");
					$c_quality=input_post("c_quality");
					$c_category_product=input_post("id_category_product");
					$c_category_brand=input_post("id_category_brand");
							
					//edit ban ghi
					$this->model->execute("update product set name_product='{$c_name}',price='{$c_price}',new=$c_new,sale='{$c_sale}',deals=$c_deals,special=$c_special,short_description='{$c_shortdescription}',description='{$c_description}',quality='{$c_quality}',id_category_product='{$c_category_product}',id_category_brand='{$c_category_brand}' where id_product=$id");					
					//upload image
					$img_product = "";
					if($_FILES["img_product"]["tmp_name"] != ""){
						//-----------
						//kiem tra, neu co anh cu thi xoa anh do di
						//lay anh o truong c_img trong table tbl_product ung voi id truyen vao
						$old_img = $this->model->get_a_record("select img_product from product where id_product=$id");
						//kiem tra, neu file ton tai thi xoa file nay
						if(file_exists("public/frontend/".$old_img->img_product)&&$old_img->img_product!=""){
							//xoa anh bang ham unlink
							unlink("public/frontend/".$old_img->img_product);
						}
						//-----------
						$img_product = time().$_FILES["img_product"]["tmp_name"];
						//upload file
						move_uploaded_file($_FILES["img_product"]["tmp_name"], "public/frontend/$img_product");
						//update truong c_img cua ban ghi co id truyen vao
						$this->model->execute("update product set img_product='$img_product' where id_product=$id");
					}
					//------------
					//quay lai trang tin tuc
					header("location:admin.php?controller=product");
				break;
				case "add":
					//dinh nghia bien $form_action de chi action cua form
					$form_action = "admin.php?controller=add_edit_product&act=do_add";
					//load view
					include "view/backend/view_add_edit_product.php";
				break;
				case "do_add":
					
					$c_name=input_post("c_name");
					$c_price=$_POST['c_price'];
					$c_color=input_post("c_color");
					$c_new = isset($_POST["c_new"]) ? 1 : 0;
					$c_deals=isset($_POST['c_deals']) ? 1 : 0;
					$c_special=isset($_POST['c_special']) ? 1 : 0;
					$c_sale=$_POST['c_sale'];
					

					$c_shortdescription=input_post("c_shortdescription");
					$c_description=input_post("c_description");
					$c_quality=$_POST['c_quality'];
					$c_category_product=$_POST['id_category_product'];
					$c_category_brand=$_POST['id_category_brand'];

					//upload image
					$c_img = "";
					if($_FILES["c_img"]["tmp_name"] != ""){
						$c_img = $_FILES["c_img"]["name"];
						//upload file
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/frontend/$c_img");
					}
					//them ban ghi vao csdl
					// var_dump("insert into product(name_product,price,color,img_product,new,deals,special,sale,short_description,description,quality,id_category_product,id_category_brand) values('$c_name','$c_price','$c_color','$c_img',$c_new,$c_deals,$c_special,'$c_sale','$c_shortdescription','$c_description',$c_quality,$c_category_product,$c_category_brand 	)"); exit;
					$check = $this->model->execute("insert into product(name_product,price,color,img_product,new,deals,special,sale,short_description,description,quality,id_category_product,id_category_brand) values('$c_name',$c_price,'$c_color','$c_img',$c_new,$c_deals,$c_special,'$c_sale','$c_shortdescription','$c_description',$c_quality,$c_category_product,$c_category_brand )");


					//------------
					//quay lai trang tin tuc
					if($check){header("location:admin.php?controller=product");}
					
				break;
			}
			//--------
		}
	}
	new controller_add_edit_product();
 ?>