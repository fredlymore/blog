
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>Tambah Artikel Baru</h1>

                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>Tambah</h1>
            <div class="alert alert-danger">
                <?php echo validation_errors();?>
            </div>
            
            <?php echo form_open_multipart(); ?>
                <div class="form-group mt-2">
                    <label for="">Judul</label><br>
                    <?php echo form_input('title', set_value('title'), 'class="form-control"'); ?>
                    <!-- <input class="form-control" type="text" name='title'> -->
                </div>
                <div class="form-group mt-2">
                    <label for="">url</label>
                    <?php echo form_input('url', set_value('url'), 'class="form-control"'); ?>
                    <!-- <input class="form-control" type="text" name='url'> -->
                </div>
                <div class="form-group mt-2">
                    <label for="">Konten</label>
                    <?php echo form_textarea('content', set_value('content'), 'class="form-control"'); ?>
                    <!-- <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea> -->
                </div>

                <div class="form-group mt-2">
                    <label for="">Gambar</label>
                    <?php echo form_upload('cover', set_value('cover'), 'class="form-control"'); ?>
                </div>
                
                <button class="btn btn-primary mt-2 mb-2" type="submit" >Simpan</button>
            <?php echo form_close(); ?>

        </div>
    </div>
</div>
            