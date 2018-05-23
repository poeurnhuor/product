<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('partials/header'); ?>

    <title>All Product</title>

    <!--Block top menu-->

<?php $this->load->view('menu/navbar_menu'); ?>

    <!--End block top menu-->


    <!--Block slide show-->
    <div class="">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!--            <ol class="carousel-indicators">-->
            <!--                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
            <!--                <li data-target="#myCarousel" data-slide-to="1"></li>-->
            <!--                <li data-target="#myCarousel" data-slide-to="2"></li>-->
            <!--                <li data-target="#myCarousel" data-slide-to="3"></li>-->
            <!--                <li data-target="#myCarousel" data-slide-to="4"></li>-->
            <!--            </ol>-->

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo base_url('templates/front_end/images/slides/slide1.png'); ?>"
                         alt="Slide number one" style="width:100%;">
                </div>

                <div class="item">
                    <img src="<?php echo base_url('templates/front_end/images/slides/slide2.png'); ?>"
                         alt="Slide number two" style="width:100%;">
                </div>

                <div class="item">
                    <img src="<?php echo base_url('templates/front_end/images/slides/slide3.png'); ?>"
                         alt="Slide number three" style="width:100%;">
                </div>

                <div class="item">
                    <img src="<?php echo base_url('templates/front_end/images/slides/slide4.png'); ?>"
                         alt="Slide number four" style="width:100%;">
                </div>
                <div class="item">
                    <img src="<?php echo base_url('templates/front_end/images/slides/slide5.png'); ?>"
                         alt="Slide number five" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--End block slide show-->

    <!--BLock Recently Added-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="recently-see-all">
                    <div class="col-md-11">
                        <div><h4>Recently Added</h4></div>
                    </div>
                    <div class="col-md-1">
                        <a href="<?php echo base_url('con_product/all_products') ;?>"><div class="pull-right see-all">See all</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">

                <?php
                foreach ($products->result() as $product) {
                    ?>
                    <div class="col-md-2 col-sm-4 col-sm-4 col-xs-6">
                        <div class="computer-border grow">
                            <a href="<?php echo base_url('con_product/detail/') . $product->cat_id . '/' .$product->pro_id ;?>">
                                <img src="<?php echo base_url('templates/front_end/images/product_images/') .$product->image ?>"
                                     alt="Computer" style="width:100%;">
                                <div class="computer-name-price">
                                    <p><?php echo $product->pro_name ;?></p>
                                    <p class="price-color">Price : $ <?php echo $product->price ;?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!--End bLock Recently Added-->

    <!--bLock Dell Computer-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="recently-see-all">
                    <div class="col-md-11">
                        <div><h4>Dell Computer</h4></div>
                    </div>
                    <div class="col-md-1">
                        <a href="<?php echo base_url('con_product/dell_products') ;?>"><div class="pull-right see-all">See all</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12 col-lg-12 col-sm-12">

                <?php
                foreach ($dells->result() as $dell) {
                    ?>
                    <div class="col-md-2 col-sm-4 col-sm-4 col-xs-6">
                        <div class="computer-border grow">
                            <a href="<?php echo base_url('con_product/detail/') . $dell->cat_id . '/' .$dell->pro_id ;?>">
                                <img src="<?php echo base_url('templates/front_end/images/product_images/') .$dell->image ?>"
                                     alt="Computer" style="width:100%;">
                                <div class="computer-name-price">
                                    <p><?php echo $dell->pro_name ;?></p>
                                    <p class="price-color">Price : $ <?php echo $dell->price ;?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>
    </div>
    <!--End bLock Dell Computer-->

    <!--bLock ASUS Computer-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="recently-see-all">
                    <div class="col-md-11">
                        <div><h4>ASUS Computer</h4></div>
                    </div>
                    <div class="col-md-1">
                        <a href="<?php echo base_url('con_product/asus_products') ;?>"><div class="pull-right see-all">See all</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">

                <?php
                foreach ($asuses->result() as $asus) {
                    ?>
                    <div class="col-md-2 col-sm-4 col-sm-4 col-xs-6">
                        <div class="computer-border grow">
                            <a href="<?php echo base_url('con_product/detail/') . $asus->cat_id . '/' .$asus->pro_id ;?>">
                                <img src="<?php echo base_url('templates/front_end/images/product_images/') .$asus->image ?>"
                                     alt="Computer" style="width:100%;">
                                <div class="computer-name-price">
                                    <p><?php echo $asus->pro_name ;?></p>
                                    <p class="price-color">Price : $ <?php echo $asus->price ;?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!--End bLock ASUS Computer-->

    <!--bLock ACER Computer-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="recently-see-all">
                    <div class="col-md-11">
                        <div><h4>ACER Computer</h4></div>
                    </div>
                    <div class="col-md-1">
                        <a href="<?php echo base_url('con_product/acer_products') ;?>"><div class="pull-right see-all">See all</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">

                <?php
                foreach ($acers->result() as $acer) {
                    ?>
                    <div class="col-md-2 col-sm-4 col-sm-4 col-xs-6">
                        <div class="computer-border grow">
                            <a href="<?php echo base_url('con_product/detail/') . $acer->cat_id . '/' .$acer->pro_id ;?>">
                                <img src="<?php echo base_url('templates/front_end/images/product_images/') .$acer->image ?>"
                                     alt="Computer" style="width:100%;">
                                <div class="computer-name-price">
                                    <p><?php echo $acer->pro_name ;?></p>
                                    <p class="price-color">Price : $ <?php echo $acer->price ;?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!--End bLock ACER Computer-->

    <!--bLock Lenovo Computer-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="recently-see-all">
                    <div class="col-md-11">
                        <div><h4>Lenovo Computer</h4></div>
                    </div>
                    <div class="col-md-1">
                        <a href="<?php echo base_url('con_product/lenevo_products') ;?>"><div class="pull-right see-all">See all</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">

                <?php
                foreach ($lenevos->result() as $lenevo) {
                    ?>
                    <div class="col-md-2 col-sm-4 col-sm-4 col-xs-6">
                        <div class="computer-border grow">
                            <a href="<?php echo base_url('con_product/detail/') . $lenevo->cat_id . '/' .$lenevo->pro_id ;?>">
                                <img src="<?php echo base_url('templates/front_end/images/product_images/') .$lenevo->image ?>"
                                     alt="Computer" style="width:100%;">
                                <div class="computer-name-price">
                                    <p><?php echo $lenevo->pro_name ;?></p>
                                    <p class="price-color">Price : $ <?php echo $lenevo->price ;?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!--End bLock Lenovo Computer-->

    <!--bLock MacBook Computer-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="recently-see-all">
                    <div class="col-md-11">
                        <div><h4>MacBook Computer</h4></div>
                    </div>
                    <div class="col-md-1">
                        <a href="<?php echo base_url('con_product/macbook_products') ;?>"><div class="pull-right see-all">See all</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">

                <?php
                foreach ($macbooks->result() as $macbook) {
                    ?>
                    <div class="col-md-2 col-sm-4 col-sm-4 col-xs-6">
                        <div class="computer-border grow">
                            <a href="<?php echo base_url('con_product/detail/') . $macbook->cat_id . '/' .$macbook->pro_id ;?>">
                                <img src="<?php echo base_url('templates/front_end/images/product_images/') .$macbook->image ?>"
                                     alt="Computer" style="width:100%;">
                                <div class="computer-name-price">
                                    <p><?php echo $macbook->pro_name ;?></p>
                                    <p class="price-color">Price : $ <?php echo $macbook->price ;?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!--End bLock MacBook Computer-->


<?php $this->load->view('partials/footer'); ?>