<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_news&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Tin tức</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 150px;">Ảnh</th>
						<th  style="width: 150px;">Tên tin tức</th>
						<th  style="width: 150px;">Mô tả ngắn</th>
						<th style="width: 150px;">Mô tả dài</th>
						<th style="width: 120px;">Tin hot</th>
						<th style="width: 150px;">Ngày đăng</th>
					</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
					<tr>
						<td>
<?php if(file_exists("public/frontend/blog/".$rows->img_news)) { ?>
<img src="public/frontend/blog/<?php echo $rows->img_news; ?>" style="width: 150px;">
<?php } ?>
						</td>
						<td><?php echo $rows->name_news; ?></td>
						<td><?php echo $rows->short_description; ?></td>
						<td><?php echo $rows->description; ?></td>
						
						<td style="text-align: center;">
						<?php if($rows->hot_news == 1){ ?>
						Hot
						<?php } ?>
						</td>
						<td><?php echo $rows->date_news; ?></td>

						<td style="text-align: center;">
<a href="admin.php?controller=add_edit_news&act=edit&id=<?php echo $rows->id_news; ?>">Edit</a>&nbsp;&nbsp;
<a onclick="return window.confirm('Are you sure?');" href="admin.php?controller=news&act=delete&id=<?php echo $rows->id_news; ?>">Delete</a>
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
						<li class="page-item"><a class="page-link" href="admin.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>