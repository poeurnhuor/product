<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('partials/header'); ?>

<title>Product detail</title>

<!--Block top menu-->
<?php $this->load->view('menu/navbar_menu'); ?>
<!--End block top menu-->

<div class="container">
    <div class="padding-style">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!--block column 8-->
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="shadow" style="padding: 10px;">
                        <!--Block image detail-->
                        <div class="shrink">
                            <img src="<?php echo base_url('templates/front_end/images/product_images/') . $product->image; ?>"
                                 alt="Los Angeles" style="width:100%; height: 400px;">
                        </div>
                        <!--End block image detail-->

                        <!--Block computer info-->
                        <div>
                            <h3 class="computer-info">Computer Info...</h3>
                        </div>

                        <div>
                            <h4 class="computer-name"><?php echo $product->name; ?></h4>
                            <h5 class="computer-detail-price">Price : $ <?php echo $product->price; ?></h5>
                            <p>
                                <?php echo $product->description; ?>
                            </p>
                        </div>
                        <!--End block computer info-->
                    </div>
                </div>
                <!--End block column 8-->

                <!--block column 4-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <!--Form Sign up-->
                    <div class="sign-up-border shadow">
                        <legend><a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-globe"></i></a>
                            Sign up!
                        </legend>
                        <form action="<?php echo base_url('con_product/register'); ?>" method="POST" class="form"
                              role="form">
                            <div class="row">
                                <div class="col-xs-6 col-md-6">
                                    <input class="form-control" name="firstname" placeholder="First Name" type="text"
                                           required autofocus/>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <input class="form-control" name="lastname" placeholder="Last Name" type="text"
                                           required/>
                                </div>
                            </div>
                            <input class="form-control" name="youremail" placeholder="Your Email" type="email"/>
                            <input class="form-control" name="youremail" placeholder="Your Phone" type="text"/>
                            <input class="form-control" name="password" placeholder="New Password" type="password"/>
                            <input class="form-control" name="re_password" placeholder="Re-enter Password"
                                   type="password"/>
                            <button class="btn btn-primary btn-block" type="submit">Sign up</button>
                        </form>
                    </div>
                    <!--End form Sign up-->

                    <!--BLock Related Products-->

                    <div>
                        <h3 class="related-product">Related Products</h3>
                    </div>

                    <?php
                    foreach ($related_products->result() as $rel_product) {
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="<?php echo base_url('con_product/detail/') . $rel_product->cat_id . '/' .$rel_product->pro_id ;?>">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="image-thumbnail-style grow">
                                        <img style="height: 100px;"
                                             src="<?php echo base_url('templates/front_end/images/product_images/') . $rel_product->image; ?>"
                                             class="img-thumbnail" alt="Cinque Terre" width="100%">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <h5 class="computer-name"><?php echo $rel_product->pro_name; ?></h5>
                                    <h5 class="computer-detail-price">Price : $ <?php echo $rel_product->price; ?></h5>
                                    <p class="show-short-text">
                                        <?php echo $rel_product->pro_description; ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php } ?>

                    <!--End block Related Products-->

                </div>
                <!--End block column 4-->
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('partials/footer'); ?>
