<?php 
    include './config.php';
    
    if (isset($_POST['submitdangki'])){
        
        $tenKH = $_POST['txtten'];
        $taikhoanKH = $_POST['txttaikhoan'];
        $matkhauKH = $_POST['txtmatkhau'];
        $diachiKH = $_POST['txtdiachi'];
        $sdtKH = $_POST['txtsdt'];
        $sql = "select * from customer where username = '$taikhoanKH'";
        if($tenKH == "" || $taikhoanKH =="" || $matkhauKH=="" || $diachiKH=="" || $sdtKH==""){
            echo "<h3 style='color: red'>Bạn hãy nhập đầy đủ thông tin</h3>";
        }else{
            $result = mysqli_query($db, $sql);
            if(mysqli_num_rows($result) > 0){
                echo '<script language="javascript">alert("Thông tin đã tồn tại");window.location="checkout.php"; </script>';
                die();
            }
            else {
                $sql = "insert into customer (name_customer, username, password, address, phone) values ('{$tenKH}','{$taikhoanKH}','{$matkhauKH}','{$diachiKH}','{$sdtKH}')";
                if (mysqli_query($db, $sql)){
                    echo '<script language="javascript">alert("Đăng ký thành công"); window.location="checkout.php";</script>';
                }
                else {
                    echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="checkout.php";</script>';
                }

            }
        }
        
        // if (mysqli_query($db, $sql)){
        //     echo '<script language="javascript">alert("Đăng ký thành công"); </script>';
        // }
        // else {
        //     echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); </script>';
        // }
        // echo $sql;
    }
                                                     
 ?>
<form method="POST">
    <div class="form-group">
        <label class="control-label">Tên khách hàng<sup>*</sup></label>
        <input type="text" class="form-control" name="txtten"   placeholder="Nhập tên khách hàng ...">
    </div>
    <div class="form-group">
        <label class="control-label">Tài khoản<sup>*</sup></label>
        <input type="text" class="form-control" name="txttaikhoan"   placeholder="Nhập vào tên tài khoản ...">
    </div>
    <div class="form-group password">
        <label class="control-label">Mật khẩu<sup>*</sup></label>
        <input type="password" class="form-control" name="txtmatkhau"  id="Mypassword" placeholder="Nhập vào mật khẩu ...">
        <span id="eyePassword" onclick="myFunction()"><i class="fa fa-eye" aria-hidden="true"></i></span>
    </div>
    <div class="form-group">
        <label class="control-label">Địa chỉ<sup>*</sup></label>
        <input type="text" class="form-control" name="txtdiachi"   placeholder="Nhập vào địa chỉ ...">
    </div>
    <div class="form-group">
        <label class="control-label">Số điện thoại<sup>*</sup></label>
        <input type="text" class="form-control" name="txtsdt"   placeholder="Nhập vào số điện thoại ...">
    </div>
    
    <button type="submit" name="submitdangki" class="btn btn-danger btn-md btn-continue fwb">Đăng kí</button></
</form>