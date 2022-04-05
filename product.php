<?php
 require('top.php');
 $product_id=mysqli_real_escape_string($con,$_GET['id']);
 $get_product=get_product($con,'','',$product_id);
?>

<div class="container py-4 my-4 mx-auto d-flex flex-column">
    <div class="header">
        
    </div>
    <div class="container-body mt-1 px-2">
        <div class="row r3">
        <div class="col-md-7"> <img src="media/product/<?php echo $get_product['0']['image']?>" width="80%" height="100%"> </div>
           
        <div class="col-md-5 p-0 klo">
            <div class="col-md-9 abc">
                <h1 class="trending1"><?php echo $get_product['0']['name']  ?></h1>
                
                <p class="prc">₹
<?php echo $get_product['0']['price']?> <span class="px-2 mrp">₹
<?php echo $get_product['0']['mrp']  ?></span></p>
            </div>
                <ul>
                    
                    <p style="color: rgb(248, 26, 92)"><?php echo $get_product['0']['short_desc']  ?></p>
                    
                    <li>12 Months Warranty</li>
                    <li>EMI Starting from (On Credit Cards)</li>
                    <li>Normal Delivery : 4-5 Days</li>
                    <div class="sin__desc">
                                        <p><span>Qty:</span> 
										<select id="qty">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
										</p>
                                    </div>
                    
                    <li><span>Categories: </span><?php echo $get_product['0']['categories']?></li>
                </ul>
            </div>
            
        </div>
    </div>
    <div class="footer d-flex flex-column mt-5 mb-5">
        <div class="row r4">
            
            
            
             <div class="col-md-4"><button type="button" class="btn1">ADD TO CART</button></a></div> 
           
            <div class="col-md-4"><button type="button" class="btn1">BUY NOW</button></div>
        </div>
        <hr>
        <div class="col-md-2 pt-5 myt des"><a href="#">Description</a></div>
        <div class="row"><?php echo $get_product['0']['description']  ?></div>
    </div>
</div>

<?php
require('footer.php');
?>

