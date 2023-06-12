<header class="masthead" style="background-image: url('vendor/assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1><?php echo $halaman; ?></h1>
                    <span class="subheading">WEBSITE FREDLY ASMORO</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            <?php echo $this->session->flashdata('message'); ?>

            <form action="">
                <input type="text" name="find">
                <button type="submit">Cari</button>
            </form>
            <?php foreach ($blogs as $key => $blog): ?>
            <div class="post-preview">
                <a href="<?php echo site_url('blog/detail/'.$blog['url']);?>">
                    <h2 class="post-title"><?php echo $blog['title']; ?></h2>
                </a>
                <?php echo $blog['content']; ?>
                <p class="post-meta">
                    Posted <?php echo $blog['date']; ?>
                    <?php if(isset($_SESSION['username'])): ?>
                    <a href="<?php echo site_url('blog/edit/'.$blog['id']); ?>">Edit</a>
                    <a href="<?php echo site_url('blog/delete/'.$blog['id']); ?>" onclick="return confirm('Apa Anda Yakin?')">Delete</a>
                    <?php endif; ?>
                </p>
            </div>
            <?php endforeach; ?>
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>