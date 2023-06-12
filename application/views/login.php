
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="site-heading">
                    <h1>Login</h1>

                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
        <?php echo $this->session->flashdata('message'); ?>
        
        <?php echo form_open(); ?>

            <div class="form-group mt-2">
                <label for="username" class="">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group mt-2">
                <label for="password" class="">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Login</button>

        <?php echo form_close(); ?>

        </div>
    </div>
</div>