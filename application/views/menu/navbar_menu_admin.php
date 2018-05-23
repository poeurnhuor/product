<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Welcome to Admin Page</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><?php echo "Welcome," . " " . $this->session->userdata('user_name') ;?></a></li>
                <li><a href="<?php echo base_url('admin/con_admin/logout') ;?>">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>