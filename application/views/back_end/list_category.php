<?php $this->load->view('partials/header_admin'); ?>

<?php $this->load->view('menu/navbar_menu_admin'); ?>

<?php $this->load->view('dashboard/header'); ?>

<section id="main">
    <div class="container">
        <input type="hidden" id="save_success" value="<?php echo $this->session->flashdata('btn_save_message'); ?>">
        <input type="hidden" id="update_success" value="<?php echo $this->session->flashdata('btn_update_message'); ?>">
        <input type="hidden" id="isDelete" value="<?php echo $this->session->flashdata('isDelete'); ?>">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="<?php echo base_url('admin/con_admin') ?>" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                    </a>
                    <a href="<?php echo base_url('admin/con_admin/add_category'); ?>" class="list-group-item">Add
                        Category</a>
                    <a href="<?php echo base_url('admin/con_admin/list_category'); ?>" class="list-group-item active">List
                        Categories</a>
                    <a href="<?php echo base_url('admin/con_admin/add_product') ;?>" class="list-group-item">Add Product</a>
                    <a href="<?php echo base_url('admin/con_admin/list_product') ;?>" class="list-group-item">List Products</a>
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
                        <h3>List Categories</h3>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Category Name</th>
                                <th>Category Discription</th>
                                <th>Status</th>
                                <th colspan="2" class="center">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $i = 1;
                            foreach ($categories->result() as $category) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $category->name; ?></td>
                                    <td><?php echo $category->description; ?></td>
                                    <td>
                                        <?php
                                             if($category->status == 1){
                                                 echo "Visible";
                                             }else{
                                                 echo "Invisible";
                                             }
                                        ?>
                                    </td>
                                    <td class="center"><a href="<?php echo base_url('admin/con_admin/edit_category/') . $category->id ;?>"> <span class="glyphicon glyphicon-edit"></span></a></td>
                                    <td class="center">
                                        <a href="javascript:void(0);" onclick="deleteCategory(<?php echo $category->id;?>);">
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
