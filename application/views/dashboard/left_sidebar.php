<div class="well dash-box">
    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $this->session->userdata('num_user');?></h2>
    <?php
        if($this->session->userdata('num_user') == 1){
            echo "<h4>User</h4>";
        }else{
            echo "<h4>Users</h4>";
        }
    ?>
</div>
<div class="well dash-box">
    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <?php echo $this->session->userdata('num_category');?></h2>
    <?php
    if($this->session->userdata('num_category') == 1){
        echo "<h4>Category</h4>";
    }else{
        echo "<h4>Categories</h4>";
    }
    ?>
</div>
<div class="well dash-box">
    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <?php echo $this->session->userdata('num_post');?></h2>
    <?php
    if($this->session->userdata('num_post') == 1){
        echo "<h4>Post</h4>";
    }else{
        echo "<h4>Posts</h4>";
    }
    ?>
</div>