
<?php $this->load->view('partials/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="account-wall">
                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                         alt="">
                        <form action="<?php echo base_url('con_login/login'); ?>" method="POST" class="form form-signin" role="form">
                            <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">
                                Sign in</button>
                            <label class="checkbox pull-left">
                                <input type="checkbox" value="remember-me">
                                Remember me
                            </label>
                            <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                        </form>
                </div>
                <a href="#" class="text-center new-account">Create an account </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
        </div>
    </div>
</div>

<?php $this->load->view('partials/footer_notext'); ?>