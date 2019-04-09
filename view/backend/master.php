
<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/png" href="./images/avatar/icon.png"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">TRANG QUẢN LÍ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=category_product">Danh mục sản phẩm</a>
          </li>
		      <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=product">Sản phẩm</a>
          </li>
          
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=news">Tin tức</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=user">Danh sách người dùng</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=order">Đơn hàng</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php?controller=logout">Logout</a>
          </li>
        </ul>        
      </div>
</nav>
    <div class="container" style="margin-top: 70px;">
    <?php 
        //kiem tra, neu duong dan ton tai thi load mvc do ra
        if(file_exists($controller))
          include $controller;
     ?>
    </div>
</body>
</html>