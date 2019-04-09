<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Cập nhật tin tức</div>
			<div class="card-body">
			<!-- neu muon upload duoc file, phai co thuoc tinh enctype="multipart/form-data" -->
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tên tin tức</div>
							<div class="col-md-10">
<input type="text" name="c_name_news" value="<?php echo isset($arr->name_news)?$arr->name_news:""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Mô tả ngắn</div>
							<div class="col-md-10">
								<textarea name="c_shortdescription" required class="form-control"><?php echo isset($arr->short_description)?$arr->short_description:""; ?></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Mô tả dài</div>
							<div class="col-md-10">
								<textarea name="c_description" required class="form-control"><?php echo isset($arr->description)?$arr->description:""; ?></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ghi chú</div>
							<div class="col-md-10">
								<textarea name="c_note" required class="form-control"><?php echo isset($arr->note)?$arr->note:""; ?></textarea>
							</div>
						</div>
					</div>
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
	<label><input type="checkbox" <?php echo isset($arr->hot_news)&&$arr->hot_news==1 ? "checked":""; ?> name="c_hotnews"> Hot news</label>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ngày đăng</div>
							<div class="col-md-10">
<input type="date" name="c_dateup" value="<?php echo isset($arr->date_news)?$arr->date_news:""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ảnh</div>
							<div class="col-md-10">
							
								<input type="file" name="c_img">
							
							</div>
						</div>
					</div>
					<!-- end form group -->
					
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
								<input type="submit" value="Process" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger">
							</div>
						</div>
					</div>
					<!-- end form group -->
				</form>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>