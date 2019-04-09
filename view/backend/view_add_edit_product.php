<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Add edit product</div>
			<div class="card-body">
			<!-- neu muon upload duoc file, phai co thuoc tinh enctype="multipart/form-data" -->
				<form method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tên sản phẩm</div>
							<div class="col-md-10">
<input type="text" name="c_name" placeholder="Nhập tên sản phẩm" value="<?php echo isset($arr->name_product)?$arr->name_product:""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giá</div>
							<div class="col-md-10">

<input type="number" value="100" name="c_price" value="<?php echo isset($arr->price)?$arr->price:""; ?>" required class="form-control">
								
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Màu</div>
							<div class="col-md-10">

<input type="text" placeholder="Nhập màu sản phẩm" name="c_color" value="<?php echo isset($arr->color)?$arr->color:""; ?>" required class="form-control">
								
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Khuyến mại</div>
							<div class="col-md-10">

<input type="number" value="0" name="c_sale" value="<?php echo isset($arr->sale)?$arr->sale:""; ?>" required class="form-control">
								
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Số lượng</div>
							<div class="col-md-10">

<input type="number" value="1" name="c_quality" value="<?php echo isset($arr->quality)?$arr->quality:""; ?>" required class="form-control">
								
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Danh mục</div>
							<div class="col-md-10">
							<select name="id_category_product">
								<option value="0"></option>
	<?php 
		//lay toan bo ban ghi trong tbl_category_product
		$category = $this->model->get_all("select * from category_product");
		foreach($category as $rows)
		{
	 ?>
<option <?php if(isset($arr->id_category_product)&&$arr->id_category_product==$rows->id_category_product){ echo "selected"; } ?> value="<?php echo $rows->id_category_product; ?>"><?php echo $rows->name_category_product; ?></option>
	<?php } ?>
	</select>
							</div>
						</div>
					</div>

					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Thương hiệu</div>
							<div class="col-md-10">
							<select name="id_category_brand">
								<option value="0"></option>
	<?php 
		//lay toan bo ban ghi trong tbl_category_product
		$category = $this->model->get_all("select * from category_brand");
		foreach($category as $rows)
		{
	 ?>
<option <?php if(isset($arr->id_category_brand)&&$arr->id_category_brand==$rows->id_category_brand){ echo "selected"; } ?> value="<?php echo $rows->id_category_brand; ?>"><?php echo $rows->name_category_brand; ?></option>
	<?php } ?>
	</select>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giới thiệu ngắn</div>
							<div class="col-md-10">
								<textarea name="c_shortdescription" required class="form-control">
<?php echo isset($arr->short_description)?$arr->short_description:""; ?></textarea>
					<script type="text/javascript">
						CKEDITOR.replace("short_description");
					</script>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giới thiệu</div>
							<div class="col-md-10">
								<textarea name="c_description" class="form-control">
<?php echo isset($arr->description)?$arr->description:""; ?></textarea>
					<script type="text/javascript">
						CKEDITOR.replace("description");
					</script>
							</div>
						</div>
					</div>
					<!-- end form group -->
					
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
	<label><input type="checkbox" <?php echo isset($arr->new)&&$arr->new==1 ? "checked":""; ?> name="c_new"> Sản phẩm mới</label>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
	<label><input type="checkbox" <?php echo isset($arr->deals)&&$arr->deals==1 ? "checked":""; ?> name="c_deals"> Hot deals</label>
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
								<label><input type="checkbox" <?php echo isset($arr->special)&&$arr->special==1 ? "checked":""; ?> name="c_special"> Hot special</label>
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