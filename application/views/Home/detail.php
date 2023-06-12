<?php
if(!empty($blog['cover']))
$cover = base_url() .'vendor/assets/img/home-bg.jpg';
else
$cover = base_url() .'uploads/'. $blog['cover'];
?>
<header class="masthead" style="background-image: url('<?php echo $cover; ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1><?php echo $blog['title']; ?></h1>
                    <span class="meta">
                        Posted 
                        on <?php echo $blog['date']; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" href="<?php echo site_url('/'); ?>">Back to Home</a>
    </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Detail</a>
  </li>
</ul>
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
            <?php echo $blog['content']; ?>
        </div>
        </div>
    </div>
</article>
<!-- <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <h1></h1>
            
        </div>
    </div>
</div> -->