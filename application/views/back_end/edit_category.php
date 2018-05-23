<?php $this->load->view('partials/header_admin'); ?>

<?php $this->load->view('menu/navbar_menu_admin'); ?>

<?php $this->load->view('dashboard/header'); ?>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="<?php echo base_url('admin/con_admin') ?>" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                    </a>
                    <a href="<?php echo base_url('admin/con_admin/add_category'); ?>" class="list-group-item active">Add
                        Category</a>
                    <a href="<?php echo base_url('admin/con_admin/list_category'); ?>" class="list-group-item">List
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
                        <a href="<?php echo base_url('admin/con_admin/list_category') ;?>"><button class="btn btn-primary pull-right" style="margin-top:-3px;">Back</button></a>
                        <form class="form-horizontal" method="POST"
                              action="<?php echo base_url('admin/con_admin/do_update_category'); ?>">
                            <fieldset>

                                <!-- Form Name -->
                                <legend>Categories</legend>


                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="name">Name</label>

                                    <div class="col-md-5">
                                        <input id="name" name="name" type="text" placeholder="Category Name"
                                               value="<?php echo $category->name; ?>"
                                               class="form-control input-md" required>
                                    </div>

                                    <input type="hidden" value="<?php echo $category->id ;?>" name="cat_id">
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="description">Description</label>

                                    <div class="col-md-4">
                                        <textarea rows="3" class="form-control" id="description" name="description"
                                                  style="margin: 0px -69.1719px 0px 0px; height: 89px; width: 320px;"><?php echo $category->description; ?>

                                        </textarea>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="status">Status</label>

                                    <div class="col-md-5">
                                        <select id="status" name="status" class="form-control">
                                            <?php
                                            if ($category->status == 1) {
                                                ?>
                                                <option selected value="1">Visible</option>
                                                <option value="0">Invisible</option>
                                                <?php
                                            }else{
                                            ?>
                                                <option value="1">Visible</option>
                                                <option selected value="0">Invisible</option>
                                           <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Button (Double) -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="saveBtn"></label>

                                    <div class="col-md-8">
                                        <button id="updateBtn" name="updateBtn" class="btn btn-success">Update</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('partials/footer_notext'); ?>
