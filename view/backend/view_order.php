<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Danh sách sản phẩm</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 150px;">Mã hóa đơn</th>
						<th  style="width: 150px;">Tên sản phẩm</th>
						<th  style="width: 150px;">Ảnh sản phẩm</th>
						<th style="width: 150px;">Số lượng</th>
						<th style="width: 150px;">Tên khách hàng</th>
						<th style="width: 120px;">Địa chỉ khách hàng</th>
						<th style="width: 150px;">Số điện thoại khách hàng</th>
						<th style="width: 150px;">Giá bán</th>
						<th style="width: 150px;">Thời gian tạo</th>
						<th style="width: 150px;">Tùy chỉnh</th>
					</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
					<tr>
						<td><?php echo $rows->id_order; ?></td>
						<td><?php echo $rows->name_product; ?></td>
						<td>
<?php if(file_exists("public/frontend/".$rows->img_product)) { ?>
<img src="public/frontend/<?php echo $rows->img_product; ?>" style="width: 150px;height: 150px">
<?php } ?>
						</td>
						<td><?php echo $rows->quality; ?></td>
						<td><?php echo $rows->name_customer; ?></td>
						<td><?php echo $rows->address_customer; ?></td>
						<td><?php echo $rows->phone_customer; ?></td>
						<td><?php echo $rows->current_price; ?></td>
						<td><?php echo $rows->date_created; ?></td>
						<td style="text-align: center;">
<a onclick="return window.confirm('Bạn có chắc muốn xóa sản phẩm này?');" href="admin.php?controller=order&act=delete&id=<?php echo $rows->id_product; ?>">Delete</a>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=order&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>