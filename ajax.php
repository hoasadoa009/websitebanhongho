<?php 
	session_start();

    $act = isset($_GET["act"])?$_GET["act"]:"";
    $id = isset($_GET["id"])?$_GET["id"]:0;
   
    switch ($act) {
    	case 'down':
    		# code...
    		if(isset($_SESSION['cart'][$id])){
                //nếu đã có sp trong giỏ hàng thì số lượng lên 1
                $_SESSION['cart'][$id]['number']--;
                $quality = $_SESSION['cart'][$id]['number'];
                $sale = $_SESSION['cart'][$id]['sale'];
                $price = $_SESSION['cart'][$id]['price']; 
                $result_sale = ($price * $sale) / 100;
                $result = $price - $result_sale;
                $result1 = ($result * $quality);
                $_SESSION['cart'][$id]['total'] = $result1;

                echo $result1;

            }
    		break;
    	
    	case 'up':
    		# code...
    	if(isset($_SESSION['cart'][$id])){
        //nếu đã có sp trong giỏ hàng thì số lượng lên 1carrt
        $_SESSION['cart'][$id]['number']++;
        $quality = $_SESSION['cart'][$id]['number'];
        $sale = $_SESSION['cart'][$id]['sale'];
        $price = $_SESSION['cart'][$id]['price'];
        $result_sale = ($price * $sale) / 100;
        $result = $price - $result_sale;
        $result1 = ($result * $quality);
        $_SESSION['cart'][$id]['total'] = $result1;

        echo $result1;

    }
    		break;
    }
    


 ?>