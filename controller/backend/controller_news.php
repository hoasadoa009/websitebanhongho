<?php 
	class controller_news{
		//tao bien $model
		public $model;
		public function __construct(){
			$this->model = new model();
			//------------
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "delete":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//-----------
					//kiem tra, neu co anh cu thi xoa anh do di
					//lay anh o truong c_img trong table tbl_product ung voi id truyen vao
					$old_img = $this->model->get_a_record("select img_news from product where id_news=$id");
					//kiem tra, neu file ton tai thi xoa file nay
					if(file_exists("public/frontend/".$old_img->img_news)&&$old_img->img_news!=""){
						//xoa anh bang ham unlink
						unlink("public/frontend/".$old_img->img_news);
					}
					//thuc hien xoa ban ghi co id truyen vao
					$this->model->execute("delete from news where id_news=$id");
					//quay lai trang tin tuc
					header("location:admin.php?controller=news");
					//-----------
				break;
			}
			//------------
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 5;
			//Tinh tong so ban ghi trong table
			$total = $this->model->num_rows("select name_news from news");
			//sotrang = tong-so-ban-ghi/so-ban-ghi-tren-mot-trang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai (bien nay truyen tren url)
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"]-1) : 0;
			//tu trang hien tai, xac dinh lay tu ban ghi nao
			$from = $page * $record_per_page;
			//------------
			$arr = $this->model->get_all("select * from news order by id_news desc limit $from,$record_per_page");
			//load view
			include "view/backend/view_news.php";
			//------------
		}
	}
	new controller_news();
 ?>