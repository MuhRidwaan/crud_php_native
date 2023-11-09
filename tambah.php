<?php
    include "master/header.php";
    include "master/nav.php";
?>
<div class="container mt-5">
    <h2>Masukan Data Mahasiswa</h2>
<div class="col-md-8">
<form action="tambahProses.php" method="post">

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nomor Induk Mahasiswa </label>
  <input type="number" class="form-control" id="nim" name="nim" placeholder="Masukan NIM" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
  <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
</div>
<div class="mb-3">
<label for="Jurusan" class="form-label">Jurusan</label>
<select class="form-select" name="jurusan" aria-label="Default select example" required>
  <option selected>Pilih Jurusan</option>
  <option value="Teknik Informatika">Teknik Informatika</option>
  <option value="Sistem Informasi">Sistem Informasi</option>
  <option value="DKV">DKV</option>
</select>
</div>

<button class="btn btn-primary" type="submit">Simpan</button>

</form>
</div>
</div>

<?php
  include "master/footer.php";
?>