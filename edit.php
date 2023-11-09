<?php
    include "master/header.php";
    include "master/nav.php";
?>
<div class="container mt-5">
    <h2>Edit Data Mahasiswa</h2>
  <?php 
  include "koneksi.php";
  $id = $_GET['id'];
  $data = mysqli_query($conn, "select * from data_mahasiswa where id = '$id'");
  while($d = mysqli_fetch_array($data)){
    ?>

<div class="col-md-8">
<form action="update.php" method="post">

<div class="mb-3 col-lg-5">
  <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
  <label for="exampleFormControlInput1" class="form-label">Nomor Induk Mahasiswa </label>
  <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM" required value="<?php echo $d['nim']; ?>"  readonly>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" required value="<?php echo $d['nama']; ?>">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required value="<?php echo $d['tempat_lahir']; ?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
  <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required value="<?php echo $d['tanggal_lahir']; ?>">
</div>
<div class="mb-3">
<label for="Jurusan" class="form-label">Jurusan</label>
<select class="form-select" name="jurusan" aria-label="Default select example" required >
  <option selected><?php echo $d['jurusan']?></option>
  <option value="Teknik Informatika">Teknik Informatika</option>
  <option value="Sistem Informasi">Sistem Informasi</option>
  <option value="DKV">DKV</option>
</select>
</div>

<button class="btn btn-primary" type="submit">Simpan</button>
<?php 
}
?>

</form>
</div>
</div>

<?php
  include "master/footer.php";
?>