<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('partials/header'); ?>

    <title>MacBook Computer</title>

    <!--Block top menu-->

<?php $this->load->view('menu/navbar_menu'); ?>

    <!--End block top menu-->


    <!--Block slide show-->
    <div class="">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

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

    <!--BLock all product-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="recently-see-all">
                    <div class="col-md-11">
                        <div><h4>MacBook Computers</h4></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">

                <?php
                foreach ($macbook_products->result() as $product) {
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
    <!--End bLock all product-->

<?php $this->load->view('partials/footer'); ?>