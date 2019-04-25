<?php 
if(isset($_GET['id'])){
    $id=($_GET["id"]) ? $_GET["id"] : 0;
    // $key = ($_GET["search"]) ? $_GET["search"] : "";
     $arr = $this->model->get_a_record("select * from category_brand where id_category_brand=$id  ");
 }
	 if (isset($_GET['search'])) {
     $search = ($_GET['search']) ? $_GET['search'] : "";
     $arr = $this->model->get_a_record("select * from product inner join category_brand on product.id_category_brand = category_brand.id_category_brand where name_product like '%{$search}%'");
 }
	 
 ?>
<h1><?php echo $arr->name_category_brand ?></h1>