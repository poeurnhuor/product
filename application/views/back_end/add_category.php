<?php $this->load->view('partials/header_admin'); ?>

<?php $this->load->view('menu/navbar_menu_admin'); ?>

<?php $this->load->view('dashboard/header'); ?>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="<?php echo base_url('admin/con_admin')?>" class="list-group-item active main-color-bg">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                    </a>
                    <a href="<?php echo base_url('admin/con_admin/add_category') ;?>" class="list-group-item active">Add Category</a>
                    <a href="<?php echo base_url('admin/con_admin/list_category') ;?>" class="list-group-item">List Categories</a>
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
                        <a href="<?php echo base_url('admin/con_admin') ;?>"><button class="btn btn-primary pull-right" style="margin-top:-3px;">Back</button></a>
                        <form class="form-horizontal" method="POST" action="<?php echo base_url('admin/con_admin/do_add_category') ;?>">
                            <fieldset>
                                <!-- Form Name -->
                                <legend>Add category</legend>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="name">Name</label>

                                    <div class="col-md-5">
                                        <input id="name" name="name" type="text" placeholder="Category Name" class="form-control input-md" required>
                                    </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="description">Description</label>

                                    <div class="col-md-4">
                                        <textarea rows="3" class="form-control" id="description" name="description"
                                         style="margin: 0px -69.1719px 0px 0px; height: 89px; width: 320px;">

                                        </textarea>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="status">Status</label>

                                    <div class="col-md-5">
                                        <select id="status" name="status" class="form-control">
                                            <option value="1">Visible</option>
                                            <option value="0">Invisible</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Button (Double) -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="saveBtn"></label>

                                    <div class="col-md-8">
                                        <button id="saveBtn" name="saveBtn" class="btn btn-success">Save</button>
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
