<div class="top-menu">
    <nav class="navbar navbar-default navbar-fixed-top shadow">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img class="logo" src="<?php echo base_url('templates/front_end/images/logo/logo.png'); ?>"
                         alt="Logo"/>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <?php
                    if ($this->session->userdata('user_name') == "") {
                        ?>
                        <li><a href="<?php echo base_url('con_login/index'); ?>"><span
                                        class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php } ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php
                            if ($this->session->userdata('user_name') != "") {
                                echo "Welcome," . " " . $this->session->userdata('user_name');
                                echo '<span class="caret"></span>';
                            }
                            ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            if ($this->session->userdata('role_name') == "Administrator") {
                                ?>
                                <li><a href="<?php echo base_url('admin/con_admin'); ?>">Admin page</a></li>
                            <?php } ?>
                            <li><a href="<?php echo base_url('con_login/logout'); ?>">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

