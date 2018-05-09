<style type="text/css">
/*nav.navbar.navbar-expand-lg.navbar-dark.primary-color.fixed-top.scrolling-navbar{ background: transparent !important; }*/
</style>
<section class="hm_carsal">
<!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <!-- <ol class="carousel-indicators">
        <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
        <li data-target="#video-carousel-example2" data-slide-to="1"></li>
        <li data-target="#video-carousel-example2" data-slide-to="2"></li>
    </ol> -->
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!-- First slide -->
        <div class="carousel-item active">
            <!--Mask color-->
            <div class="view">
                <!--Video source-->
                 <video class="video-cover" autoplay loop>
                    <source src="<?php echo base_url();?>video/Mobile-Games.mp4" type="video/mp4" />
                </video>
                <div class="mask rgba-indigo-light"></div>
            </div>

            <!--Caption-->
            <div class="carousel-caption">
                <div class="animated fadeIn" id="carsl-text">
                    <h3 class="h3-responsive"><b>Step In</b></h3>
                    <p>The world of multitasking.</p>
                </div>
            </div>
            <!--Caption-->
        </div>
        <!-- /.First slide -->

        <!-- Second slide -->
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <!--Video source-->
                <video class="video-fluid" autoplay loop>
                    <source src="<?php echo base_url();?>video/Procrastination.mp4" type="video/mp4" />
                </video>
                <div class="mask rgba-indigo-light"></div>
            </div>

            <!--Caption-->
            <div class="carousel-caption">
                <div class="animated fadeIn" id="carsl-text">
                    <h3 class="h3-responsive"><b>Super light mask</b></h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <!--Caption-->
        </div>
        <!-- /.Second slide -->

        <!-- Third slide -->
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <!--Video source-->
                <video class="video-fluid" autoplay loop>
                    <source src="<?php echo base_url();?>video/Love-iOS.mp4" type="video/mp4" />
                </video>
                <div class="mask rgba-indigo-light"></div>
            </div>

            <!--Caption-->
            <div class="carousel-caption">
                <div class="animated fadeIn" id="carsl-text">
                    <h3 class="h3-responsive"><b>Strong mask</b></h3>
                    <p>Third text</p>
                </div>
            </div>
            <!--Caption-->
        </div>
        <!-- /.Third slide -->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
        <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--Carousel Wrapper-->
<!--/.Carousel Wrapper-->
</section>
<main>
<section class="prod_dck1">
        	<div class="cotainer">
        	<!--Carousel Wrapper-->
        	<div class="row">
        		<div class="col-md-9">
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <!-- <div class="controls-top">
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            </div> -->
            <!--/.Controls-->

            <!--Indicators-->
            <!-- <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
                <li data-target="#multi-item-example" data-slide-to="2"></li>
            </ol> -->
            <!--/.Indicators-->
            
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
             <!-- <?php // for($i=0;$i<sizeof($Product);$i++): ?> -->
                <!--First slide-->
                
                <div class="carousel-item active">
                    <?php foreach($Product as $item):// if($item['ID']==1): ?>
                    <?php if($item['ID']>=1 && $item['ID']<=3):?>
                    <div class="col-md-4">
                        <!-- <div class="card mb-2">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><?php // echo $item['Name'];?></h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a class="btn aqua-gradient">BUY</a>
                            </div>
                        </div> -->

                        <!--Card-->
                        <div class="card mb-2 card-cascade card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay" id="ProductCard">
                                <?php if($item['Images']):
                                    $imgcover=explode(" , ", $item['Images']);
                                ?>
                                <img class="card-img-top" src="<?php echo $imgcover[0]; ?>" height="185" style="    width: 35%; left: 33%; margin-top: 1em;">
                            <?php else:?>
                                 <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" alt="">
                            <?php endif;?>
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">
                                <!--Category & Title-->
                                <h5><?php echo $item['Brand']; ?></h5>
                                <!-- Item name -->
                                <?php $itemName=explode("(",$item['Name']);
                                if($itemName[1]!=""):
                                ?>
                                <h4 class="card-title" id="homedTitle"><strong><a href=""><?php echo $itemName[0];?></a></strong></h4>
                                <?php else:?>
                                    <h4 class="card-title" id="homedTitle"><strong><a href=""><?php echo $item['Name'];?></a></strong></h4>
                                <?php endif; ?>
                                <!--Description-->
                                <div class="short_dem">
                                <p class="card-text"><?php
                                 echo $item['Short_Description'];
                                ?>
                                </p>
                                </div>
                                <!--Card footer-->
                                <div class="card-footer">
                                    <span class="float-left">₹<?php echo $item['Price'];?> <span class="discount"><?php if($item['Old_Price']!=0):?><strike>₹<?php echo $item['Old_Price'];?></strike><?php endif;?></span></span>
                                    <span class="float-right"><a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-lg"></i></a></span>
                                </div>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->
                
                    </div>
                    <?php endif; ?>
                 <?php endforeach; ?>
                </div>
               
                <!--/.Rest slides-->
                <div class="carousel-item">
                    <?php foreach($Product as $item):// if($item['ID']==1): ?>
                    <?php if($item['ID']>=4 && $item['ID']<=6):?>
                    <div class="col-md-4">
                        <!--Card-->
                        <div class="card mb-2 card-cascade card-ecommerce">

                            <!--Card image-->
                            <div class="view overlay" id="ProductCard">
                                <?php if($item['Images']):
                                    $imgcover=explode(" , ", $item['Images']);
                                ?>
                                <img class="card-img-top" src="<?php echo $imgcover[0]; ?>" height="185" style="    width: 35%; left: 33%; margin-top: 1em;">
                            <?php else:?>
                                 <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg" alt="">
                            <?php endif;?>
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-body text-center">
                                <!--Category & Title-->
                                <h5><?php echo $item['Brand']; ?></h5>
                                <!-- Item name -->
                                <?php $itemName=explode("(",$item['Name']);
                                if($itemName[1]!=""):
                                ?>
                                <h4 class="card-title" id="homedTitle"><strong><a href=""><?php echo $itemName[0];?></a></strong></h4>
                                <?php else:?>
                                    <h4 class="card-title" id="homedTitle"><strong><a href=""><?php echo $item['Name'];?></a></strong></h4>
                                <?php endif; ?>
                                <!--Description-->
                                <div class="short_dem">
                                <p class="card-text"><?php
                                 echo $item['Short_Description'];
                                ?>
                                </p>
                                </div>
                                <!--Card footer-->
                                <div class="card-footer">
                                    <span class="float-left">₹<?php echo $item['Price'];?> <span class="discount"><?php if($item['Old_Price']!=0):?><strike>₹<?php echo $item['Old_Price'];?></strike><?php endif;?></span></span>
                                    <span class="float-right"><a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="zmdi zmdi-shopping-cart-plus zmdi-hc-lg"></i></a></span>
                                </div>

                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->
                    </div>
                    <?php endif; ?>
                 <?php endforeach; ?>
                </div>

                <!-- <?php // endfor; ?> -->

            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->
        </div>
        <div class="col-md-3">
        	<div class="card card-dark">
            <!--Card image-->
            <div class="view overlay">
                <img src="https://i1.wp.com/www.yugatech.com/wp-content/uploads/2018/04/Black-Shark-x-Widget-City.jpg?w=720" class="img-fluid" alt="work desk" style="    height: 23em !important;">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>
            <!--/.Card image-->
            <!--Card content-->
            <div class="card-body elegant-color white-text" style="display: none;">
                <!--Social shares button-->
                <a class="activator p-3 mr-2"><i class="fa fa-share-alt white-text"></i></a>
                <!--Title-->
                <h4 class="card-title">Card title</h4>
                <hr class="hr-light">
                <!--Text-->
                <p class="font-small mb-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#!" class="white-text d-flex justify-content-end"><h5>Read more</h5><span><i class="fa fa-chevron-right pl-2"></i></span></a>
            </div>
            <!--/.Card content-->
        </div>
        <!--/.Card Dark-->
        	
        </div>
        </div>
        </div>
</section>
<section class="prod_adv1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                   <!-- Card -->
                    <div class="card card-image" style="background-image: url(<?php echo base_url();?>img/samsung_xl.jpg);">

                        <!-- Content -->
                        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" style="background-color: transparent !important;">
                            <div style="padding-top:11em; ">
                                <!-- <h5 class="pink-text"><i class="fa fa-pie-chart"></i> Marketing</h5>
                                <h3 class="card-title pt-2"><strong>This is card title</strong></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                                    optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                                    Odit sed qui, dolorum!.</p> -->
                                <a class="btn btn-pink" style="background-color: transparent !important;"><i class="fa fa-clone left"></i> Read More</a>
                            </div>
                        </div>
                        <!-- Content -->
                    </div>
                    <!-- Card -->
            </div>
            <div class="col-md-6">
                   <!-- Card -->
<div class="card card-image" style="background-image: url(<?php echo base_url();?>img/redmi_xl.png);">

    <!-- Content -->
    <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4" style="background-color:transparent;">
        <div style="    padding-top: 11em; margin-left: 19em; ">
           <!--  <h5 class="pink-text"><i class="fa fa-pie-chart"></i> Marketing</h5>
            <h3 class="card-title pt-2"><strong>This is card title</strong></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat, laboriosam, voluptatem,
                optio vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum dignissimos.
                Odit sed qui, dolorum!.</p> -->
            <a class="btn btn-pink" style="background-color:transparent !important; box-shadow: none"><i class="fa fa-clone left"></i> Read More</a>
        </div>
    </div>
    <!-- Content -->
</div>
<!-- Card -->
            </div>
            
        </div>
        
    </div>
</section>
</main>
<script type="text/javascript">
    scrllNav('home');
    // $('#ProductCard').css("box-shadow","none");
</script>