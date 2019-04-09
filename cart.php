<?php
    session_start();
 include "config.php";
         //load file model.php
         include "model/model.php";
         include "header.php";
 ?>
<?php 
                   
                    if(isset($_POST['submit'])){
                        
                        
                        if(isset($_SESSION['cart'])){
                            $diachi = $_POST['txtdiachi'];
                            $sodienthoai = $_POST['txtsdt'];
                            // var_dump($_POST);
                            $sql = "insert into `order` (address_customer, phone_customer, id_customer)values ('{$diachi}','{$sodienthoai}','{$_SESSION['id_customer']}')";
                            mysqli_query($db, $sql);

                           $result =  mysqli_query($db, "select id_order from `order` ORDER BY date_created DESC LIMIT 1");
                           $id_order = mysqli_fetch_object($result)->id_order;
                           var_dump($id_order);
                           foreach ($_SESSION['cart'] as $arr) { 
                                $id_product = $arr['id_product'];
                                $number = $arr['number'];
                                $price = $arr['price'];
                               $sql2= "insert into `order_detail`(`id_order`, `id_product`, `quality`, `current_price`) values ('{$id_order}','{$id_product}','{$number}','{$price}')";
                               mysqli_query($db, $sql2);
                               var_dump($sql2);

                           }
                           
                           


                        }
                    }
                        
                   ?>
        
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                	<li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
               	</ul>
            </div>
        </div>

        <!-- Button trigger modal -->
            

            <!-- Modal -->

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin khách hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label>Tên khách hàng</label>
                            <input type="text" name="txtten" class="form-control" placeholder="Nhập vào họ tên" value="<?php echo $_SESSION['name_customer']; ?>" />
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="txtdiachi" class="form-control" placeholder="Nhập vào số địa chỉ" value="<?php echo $_SESSION['address']; ?>" />
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="txtsdt" class="form-control" placeholder="Nhập vào số điện thoại" value="<?php echo $_SESSION['phone']; ?>" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" name="submit" value="huynh" class="btn btn-primary">Hoàn tất</button>
                          </div>
                    </form>
                  </div>
                  
                </div>
              </div>
            </div>
        <div class="main">
        	<div class="container">
                <div class="cart">
                	<form id="frm" method="post" action="index.php?controller=cart&act=update>
                    <div class="table-responsive">
                	<table class="table custom-table">
                        <thead>
                            <tr class="first last">
                                <th>Xóa sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'controller/frontend/controller_cart1.php' ?>
                    	</tbody>
                    </table>
                    </div>
                    <div class="text-right">
                    	<a href="index.php" class="btn btn-danger btn-md">Tiếp tục mua hàng</a>
                        <!-- <a href="cart.php?controller=cart&act=update" class="btn btn-danger btn-md">Cập nhật giỏ hàng</a> -->
                    </div>
                    <div class="line2"></div>
                    <div class="row">
                    	
                    	<div class=" col-sm-4 col-md-4 col-lg-4 offset-8">
                        	<table class="table table-cart-total">
                            	
                            	<tr>
                                	<td>Tổng tiền:</td>
                                    <td class="text-right">$250.00</td>
                                </tr>
                            </table>
							<div class="text-right">
                            	<p><button type="button" class="btn btn-default btn-md fwb" data-toggle="modal" data-target="#exampleModal">Thanh toán</button></p>
                                
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.main -->
        
        
        
        
        <?php include "footer.php" ?>