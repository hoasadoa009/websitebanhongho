<?php
// include "model/model.php";
	class controller_cart1{
		public $model;
		public function __construct(){			
			$this->model = new model();
			//khoi tao gio hang
			if(isset($_SESSION["cart"]) == false) {
				$_SESSION["cart"] = array();
			}
			//-----------
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;

			switch($act){
				case "add":					
					//them san pham vao gio hang: gio ham card_add(product_id)
					$this->cart_add($id);
					//header("location:index.php?controller=cart");
					echo "<script>location.href='cart.php?controller=cart';</script>";
				break;
				case "delete":
					//goi ham xoa phan tu trong session array
					$this->cart_delete($id);
					echo "<script>location.href='cart.php?controller=cart';</script>";
				break;
				case "update":
					//duyet cac phan tu cua session array
					foreach($_SESSION["cart"] as $product){
						$tag = "product".$product["id_product"];
						$number = $_POST[$tag];
						//update lai so luong phan tu
						$this->cart_update($product["id_product"],$number);
					}
					echo "<script>location.href='index.php?controller=cart';</script>";
					break;

			}
			//===========
			//load view
			include "view/frontend/view_giohang.php";
			//=================
		}

		public function cart_add($id_product){
		    if(isset($_SESSION['cart'][$id_product])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['cart'][$id_product]['number']++;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		         $product = $this->model->get_a_record("select * from product where id_product=$id_product");

		        $_SESSION['cart'][$id_product] = array(
		            'id_product' => $id_product,
		            'name_product' => $product->name_product,
		            'img_product' => $product->img_product,
		            'number' => 1,
		            'price' => $product->price,
		            'sale' => $product->sale
		        );
		    }
		}
		/**
		 * Cập nhật số lượng sản phẩm
		 * @param int
		 * @param int
		 */
		public function cart_update($id_product, $number){
		    if($number==0){
		        //xóa sp ra khỏi giỏ hàng
		        unset($_SESSION['cart'][$id_product]);
		    } else {
		        $_SESSION['cart'][$id_product]['number'] = $number;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function cart_delete($id_product){
		    unset($_SESSION['cart'][$id_product]);
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		public function cart_total(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['c_price'] * $product['number'];
		    }
		    return $total;
		}
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		public function cart_number(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		public function cart_list(){
		    return $_SESSION['cart'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		public function cart_destroy(){
		    $_SESSION['cart'] = array();
		}

	}
	new controller_cart1();
?>