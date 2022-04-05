<?php
 require('top.php');
 $cat_id=mysqli_real_escape_string($con,$_GET['id']);
 $get_product=get_product($con,'',$cat_id);
?>

<!--<section class="main1">
        <div class="row">
        <div class="col-md-6 pt-5">
        </div>
        <div class="col-md-6 pt-5 text-center">
            <h1 style="color: rgb(248, 26, 92);" class="trending">Summer Fashion Sale</h1>
            <h5 class="pt-3 trending2" style="color: rgb(16, 51, 107); ">Explicabo esse amet tempora hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi</h5>
            <button class="btn1 mt-3">Shop Now</button>
        </div>
        </div>
    </section>-->

    
    <div id="header-carousel" class="carousel slide" data-interval="2500" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="img/arrival-bg.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="img/banner1.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="row">
                                <div class="col-md-7"></div>
                                <div class="col-md-5">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="img/banner3.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>



    

    <section class="product">
        <div class="container py-5">
            <div class="row py-5">
                <?php if (count($get_product)>0){?>
                <div class="col-lg-5 m-auto text-center">
                    <h1 class="trending1">Our Products</h1>
                    <h6 style="color: rgb(248, 26, 92);" class="mb-2">Grab these latest products </h6>
                </div>
            </div>
            <div class="row">
                           <?php
							
							foreach($get_product as $list){
							?>
                
                <div class="col-lg-3 text-center ">
                    <div class="card border-0 bg-light mb-2">
                        <div class="card-body">

                        <a href="product.php?id=<?php echo $list['id']?>">
    
                            <img src="media/product/<?php echo $list['image']?>" alt="product images" class="img-fluid">
                        </a>
                            
                       </div>
                    </div>
                    <h6 class="prd"><a href="product-details.html"><?php echo $list['name']?></a></h6>
                    <p class="mrp">₹<?php echo $list['mrp']?></p>
                    <p class="prc">₹<?php echo $list['price']?></p>
                </div>
             <?php }?>
             
            </div>
            <?php } else{echo"Data Not Found";}?>
        </div>
    </section>

    <?php
    require('footer.php');
    ?>