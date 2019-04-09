<?php 
    include './config.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "select * from customer where username='$username' and password='$password'";
        $query = mysqli_query($db, $sql);
        $num = mysqli_num_rows($query);
        if ($num > 0) {
            $row = mysqli_fetch_array($query);
            $_SESSION['id_customer']=$row['id_customer'];    
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['name_customer']=$row['name_customer'];    
            echo "<script>
            window.location='index.php'</script>";


        }
        else{
            echo "<script>alert('Đăng nhập không thành công')</script>";
        }
    }
?>
 <div class="col-sm-6">
                                                    <h4>Đăng nhập</h4>
                                                    <div class="line2 mtb20"></div>
                                                    <form method="POST">
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">Email address *</label>
                                                            <input type="text" name="username" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Password *</label>
                                                            <input type="password" name="password" class="form-control">
                                                        </div>
                                                        <!-- <p><a href="#">Forgot your password?</a></p> -->
                                                        <div class="form-group">
                                                            <button type="submit" name="submit" class="btn btn-danger btn-md btn-login fwb">Đăng nhập</button>
                                                        </div>
                                                    </form>
                                                </div>
