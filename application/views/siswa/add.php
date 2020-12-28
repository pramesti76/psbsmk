<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Quick Example</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="<?= base_url()?>jurusan/add" method="post">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Jurusan</label>
        <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Jurussan">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Ketua Jurussan</label>
        <input name="kajur" type="text" class="form-control" id="exampleInputEmail1" placeholder="Ketua Jurusan">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Ketua Jurussan</label>
        <textarea name="keterangan" class="form-control" cols="30" rows="4"></textarea>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>