<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_category_product&act=add" class="btn btn-primary">Thêm mới</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Danh mục sản phẩm</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 150px;">Mã danh mục</th>
						<th style="width: 150px;">Tên danh mục</th>
						
					</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
					<tr>
						
						<td><?php echo $rows->id_category_product; ?></td>
						<td><?php echo $rows->name_category_product; ?></td>
						
						
						<td >
<a href="admin.php?controller=add_edit_category_product&act=edit&id=<?php echo $rows->id_category_product; ?>">Sửa</a>&nbsp;&nbsp;
<a onclick="return window.confirm('Bạn có chắc muốn xóa không?');" href="admin.php?controller=category_product&act=delete&id=<?php echo $rows->id_category_product; ?>">Xóa</a>
						</td>
					</tr>
				<?php } ?>
				</table>
				<!-- end table -->
				</div>
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang</a></li>
					<?php
						for($i = 1; $i <= $num_page; $i++)
						{
					 ?>
						<li class="page-item"><a class="page-link" href="admin.php?controller=category_product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>