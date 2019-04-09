<?php 
	$id=($_GET["id"]) ? $_GET["id"] : 0;
	// $key = ($_GET["search"]) ? $_GET["search"] : "";
	 $arr = $this->model->get_a_record("select * from category_brand where id_category_brand=$id  ");
 ?>
<h1><?php echo $arr->name_category_brand ?></h1>