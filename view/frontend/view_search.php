<?php 
	if(isset($_REQUEST['ok'])){
		
		

	};

 ?>
<form class="form-search" action="grid.php" method="GET">
                                <input type="text" class="input-text" name="search" id="search" placeholder="Tìm kiếm sản phẩm ...">
                                <div class="dropdown">
                                    <button type="button" class="btn" data-toggle="dropdown">Danh mục <span class="fa fa-angle-down"></span></button>
                                    <?php include "controller/frontend/controller_all_category.php" ?>
                                </div>
                                <button type="submit" name="ok" class="btn btn-danger"><span class="fa fa-search"></span></button>
                            </form>