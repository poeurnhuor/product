<?php $this->load->view('partials/header_admin'); ?>

<?php $this->load->view('menu/navbar_menu_admin'); ?>

<?php $this->load->view('dashboard/header'); ?>

<section id="main">
    <div class="container">
        <input type="hidden" id="save_success" value="<?php echo $this->session->flashdata('btn_save_product'); ?>">
        <input type="hidden" id="update_product_success" value="<?php echo $this->session->flashdata('btn_update_product'); ?>">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="<?php echo base_url('admin/con_admin') ?>" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                    </a>
                    <a href="<?php echo base_url('admin/con_admin/add_category'); ?>" class="list-group-item">Add
                        Category</a>
                    <a href="<?php echo base_url('admin/con_admin/list_category'); ?>" class="list-group-item">List
                        Categories</a>
                    <a href="<?php echo base_url('admin/con_admin/add_product'); ?>" class="list-group-item">Add
                        Product</a>
                    <a href="<?php echo base_url('admin/con_admin/list_product'); ?>" class="list-group-item active">List
                        Products</a>
                </div>

                <?php $this->load->view('dashboard/left_sidebar'); ?>

            </div>
            <div class="col-md-9">
                <!-- Website Overview -->
                <div class="panel panel-default">
                    <div class="panel-heading main-color-bg">
                        <h3 class="panel-title">Website Overview</h3>
                    </div>

                </div>

                <!-- Latest Users -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>List Products</h3>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Discription</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th colspan="2" class="center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            foreach ($products->result() as $product) {
                                ?>
                                    <tr>
                                        <td><?php echo $i ;?></td>
                                        <td><?php echo $product->pro_name ;?></td>
                                        <td><?php echo $product->cat_name ;?></td>
                                        <td style="white-space: nowrap;">$ <?php echo $product->price ;?></td>
                                        <td><?php echo $product->pro_description ;?></td>
                                        <td>
                                            <img width="50" height="50" src="<?php echo base_url('templates/front_end/images/product_images/'.$product->image) ;?>" alt="Product image">
                                        </td>
                                        <td>
                                            <?php
                                            if($product->pro_status == 1){
                                                echo "Visible";
                                            }else{
                                                echo "Invisible";
                                            }
                                            ?>
                                        </td>
                                        <td class="center"><a href="<?php echo base_url('admin/con_admin/edit_product/') . $product->pro_id ;?>"> <span class="glyphicon glyphicon-edit"></span></a></td>
                                        <td class="center">
                                            <a href="javascript:void(0);" onclick="deleteProduct(<?php echo $product->pro_id;?>);">
                                                <span style="color: red;" class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                $i++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('partials/footer_notext'); ?>
