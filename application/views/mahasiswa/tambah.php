<div class="container">
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Form Tambah Data
        </div>
        <div class="card-body">
          <?php if (validation_errors()) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?= validation_errors(); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php endif; ?>
          <?= form_open('Mahasiswa/tambah'); ?>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
          </div>
          <div class="form-group">
            <label for="nim">Nim</label>
            <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan Nim">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" name="jurusan" id="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Teknik Kimia">Teknik Kimia</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
            </select>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email">
          </div>
          <div class="form-group">
            <label for="no_telp">No Telpon</label>
            <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Masukkan No Telpon">
          </div>
          <button type="submit" name="tambah" class="btn btn-primary float-right">Simpan</button>
          <?= form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>