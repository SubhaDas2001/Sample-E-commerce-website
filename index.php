<?php
 require('top.php');
 
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <title>Estore</title>
</head>

<body>
<!--<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slider-bg.jpg" alt="First slide">
    </div>
    <div class="carousel-caption d-none d-md-block">
    <h5>dghgk ihukg gkugu </h5>
    <p>>dghgk ihukg gkugu</p>
  </div>
    
  </div>
</div>>-->


<!--<section class="main">
        <div class="container">
            <div class="row">
               <div class="col-md-4 pt-5 text-center">
                    <h1 pt-4>Nature Has Always Cared For Us!</h1>
                    <button class="btn1 mt-3">More Tips</button>
                </div>
            </div>
        </div>
    </section>-->

    <section class="main">
        <div class="row">
        <div class="col-md-6 pt-5 text-center">
            <h1 style="color: rgb(248, 26, 92);" class="trending">Sale 20% Off
            On Everything</h1>
            <h5 class="pt-3 trending2" style="color: rgb(16, 51, 107); ">Explicabo esse amet tempora hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi</h5>
            <button class="btn1 mt-3">Shop Now</button>
        </div>
        </div>
    </section>




    <div class="offers">
        <div class="container">
            <div class="row">
                <!-- offer box one -->
                <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4" >
                    <a href="#">
                        <div class="offer-box text-center position-relative">
                            <div class="offer-inner">
                                <div class="offer-image position-relative overflow-hidden">
                                    <img src="img/offer1.jpg" alt="offers" class="img-fluid">
                                    <div class="offer-overlay"></div>
                                </div>
                                <div class="offer-info">
                                <div class="offer-info-inner">
                                    <p class="heading-bigger text-capitalize">Sale 30%</p>
                                    <p class="offer-title-1 text-uppercase font-weight-bold">Don't miss this chance</p>
                                    <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- offer box two -->
                <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4 d-flex flex-column justify-content-between" >
                    <a href="#">
                        <div class="offer-box text-center position-relative mb-4 mb-sm-0 mb-lg-0">
                            <div class="offer-inner">
                                <div class="offer-image position-relative overflow-hidden">
                                    <img src="img/offer2.jpg" alt="offers" class="img-fluid">
                                    <div class="offer-overlay"></div>
                                </div>
                                <div class="offer-info">
                                    <div class="offer-info-inner">
                                    <p class="heading-bigger text-capitalize">Sale 70%</p>
                                    <p class="offer-title-1 text-uppercase font-weight-bold">Don't miss this chance</p>
                                    <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </a>
                     <!-- offer box three -->
                    <a href="#">
                        <div class="offer-box text-center position-relative">
                            <div class="offer-inner">
                                <div class="offer-image position-relative overflow-hidden">
                                    <img src="img/offer3.jpg" alt="offers" class="img-fluid">
                                    <div class="offer-overlay"></div>
                                </div>
                                <div class="offer-info">
                                    <div class="offer-info-inner">
                                    <p class="heading-bigger text-capitalize">Sale 50%</p>
                                    <p class="offer-title-1 text-uppercase font-weight-bold">Don't miss this chance</p>
                                    <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- offer box three -->
                <div class="col-sm-6 col-lg-4 mb-lg-0 mb-4" >
                    <a href="#">
                        <div class="offer-box text-center position-relative">
                            <div class="offer-inner">
                                <div class="offer-image position-relative overflow-hidden">
                                    <img src="img/offer4.jpg" alt="offers" class="img-fluid">
                                    <div class="offer-overlay"></div>
                                </div>
                                <div class="offer-info">
                                <div class="offer-info-inner">
                                    <p class="heading-bigger text-capitalize">Sale 30%</p>
                                    <p class="offer-title-1 text-uppercase font-weight-bold">Don't miss this chance</p>
                                    <button type="button" class="btn btn-outline-danger text-uppercase mt-4">Shop Now</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="product">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-5 m-auto text-center">
                    <h1 class="trending1">Latest Products</h1>
                    <h6 style="color: rgb(248, 26, 92);" class="mb-2">Grab Our Latest Products</h6>
                </div>
            </div>
            <div class="row">
                           <?php
							$get_product=get_product($con,8);
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
                    <h6 ><a href="product.php?id=<?php echo $list['id']?>" class="prd"><?php echo $list['name']?></a></h6>
                    <p class="mrp">₹<?php echo $list['mrp']?></p>
                    <p class="prc">₹<?php echo $list['price']?></p>
                </div>
             <?php }?>

            </div>
            
        </div>
    </section>



    
    

        <!-- Featured Start -->
        <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 mt-5">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check m-0 mr-2" style=" color: rgb(248, 26, 92);"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 mt-5">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-truck m-0 mr-2"  style="color: rgb(248, 26, 92);"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 mt-5">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt m-0 mr-3"  style="color: rgb(248, 26, 92);"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1 mt-5">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume m-0 mr-3"  style="color: rgb(248, 26, 92);"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


 
    </body>
    </html>

    <?php
    require('footer.php');
    ?>
