<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Danh sách thành viên</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th>Họ và tên</th>
						<th>Tài khoản</th>
						<th>Mật khẩu</th>
						<th>Địa chỉ</th>
						<th>Số điện thoại</th>
						<th style="width: 150px;"></th>
					</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
					<tr>
						<td><?php echo $rows->name_customer; ?></td>
						<td><?php echo $rows->username; ?></td>
						<td><?php echo $rows->password; ?></td>
						<td><?php echo $rows->address; ?></td>
						<td><?php echo $rows->phone; ?></td>
						<td style="text-align: center;">
							<!-- <a href="admin.php?controller=add_edit_user&act=edit&id=<?php echo $rows->id_customer; ?>">Edit</a>&nbsp;&nbsp; -->
							<a onclick="return window.confirm('Bạn có chắc muốn xóa không?');" href="admin.php?controller=user&act=delete&id=<?php echo $rows->id_customer; ?>">Delete</a>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=user&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>