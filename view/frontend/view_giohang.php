 <?php 
                foreach($_SESSION["cart"] as $rows)
                {
             ?>
                        	<tr>
            					<td class="text-center"><a class="btn-remove" href="cart.php?controller=cart&act=delete&id=<?php echo $rows['id_product'] ?>"><span class="fa fa-trash-o"></span></a></td>
            					<td><a class="product-image" title="Primis in faucibus" href="#">
                                	<img alt="Primis in faucibus" src="public/frontend/<?php echo $rows['img_product'] ?>">
                                </a></td>
            					<td>

                                	<a href="#"><?php echo $rows['name_product'] ?></a>
                                    
                                </td>
            					<!-- <script type="text/javascript">
                                    $(document).ready(function(){
                                                alert('data1');
                                        // $(document).on('click', '.btndown', function() {
                                        //         alert('data');
                                            // $.get("cart.php?controller=cart&act=down").function(data){
                                            //     alert(data);
                                            // }
                                        });
                                                  
                                </script>-->
                                

                                <td class="qty text-center">
                               		<div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btndown" type="button" data-id="<?php echo $rows['id_product'] ?>">-</button>
                                        </span>
                                        <input type="text" class="form-control" value="<?php echo $rows['number'] ?>">
                                        <span class="input-group-btn">
                                            <button class="btn btnup" type="button" data-id="<?php echo $rows['id_product'] ?>">+</button>
                                        </span>
                                    </div><!-- /input-group -->
                            	</td>
                                <?php 
                                    $quality = $rows['number'];
                                    $sale = $rows['sale'];
                                    $price =  $rows['price'];
                                    $result_sale = ($price * $sale) / 100;
                                    $result = $price - $result_sale ;
                                 ?>
                        		<td class="subtotal">$<?php echo $result ?></td>
                				<td class="grandtotal"><p data-id="<?php echo $rows['id_product'] ?>">$<?php echo $result * $quality ?></p></td>
        					</tr>
                       <?php } ?>