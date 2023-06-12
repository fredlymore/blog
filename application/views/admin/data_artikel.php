

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Data Artikel</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Url</th>
                        <th>Cover</th>
                        <th>Tanggal dan Waktu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $no=1; foreach($artikel as $r) : ?>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td><?php echo $r['content']; ?></td>
                        <td class="text-center"><?php echo $r['title']; ?></td>
                        <td class="text-center"><?php echo $r['url']; ?></td>
                        <td class="text-center"><?php echo $r['cover']; ?></td>
                        <td class="text-center"><?php echo $r['date']; ?></td>
                        <td>
                            <center>
                                <a class="btn btn-sm btn-info" href="<?php echo site_url(); ?>"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo site_url('data_artikel/hapus/'.$r['id']); ?>" onclick="return confrim('Yakin Anda Menghapus data')" class="btn btn-sm btn-danger mt-2"><i class="fas fa-trash"></i></a>
                            </center>
                        </td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>