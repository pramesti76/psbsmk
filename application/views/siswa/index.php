<div class="card">
    <div class="card-header">
        <h4>Tambah Jurusan</h4>
    </div>
    <div class="card-body">
        <a href="<?= base_url()?>jurusan/addindex" class="btn btn-primary">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jurusan</th>
                    <th>Ketua Jurusan</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($data as $key=>$value): ?>
                <tr>
                    <td scope="row"><?= $key +1?></td>
                    <td><?= $value['jurusan']?></td>
                    <td><?= $value['kajur']?></td>
                    <td><?= $value['keterangan']?></td>
                    <td>
                        <a href="<?= base_url()?>jurusan/editindex/<?=$value['id']?>" class="btn btn-warning">Edit</a>
                        <a href="<?= base_url()?>jurusan/delete/<?=$value['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>