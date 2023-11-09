<?php 
  include "master/header.php"
?>
  <body>
  <?php 
  include "master/nav.php";
?>



<div class="d-flex justify-content-center mt-4">
<?php
// Menampilkan notifikasi jika ada
session_start();
if (isset($_SESSION['notif'])) {
    echo '<div class="alert alert-success col-lg-8" role="alert">' . $_SESSION['notif'] . '</div>';
    unset($_SESSION['notif']); // Hapus notifikasi setelah ditampilkan
}
?>
</div>


    <div class="container mt-3">
        <h1>Data Mahasiswa</h1>
        <a class="btn btn-primary mb-3" href="tambah.php">Tambah</a>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">jurusan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  
  <tbody>
  <?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from data_mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nim']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['tempat_lahir']; ?></td>
        <td><?php echo $d['tanggal_lahir']; ?></td>
				<td><?php echo $d['jurusan']; ?></td>
				
				<td class="d-block d-flex gap-3">
					<a class="btn btn-warning" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
         <a href="delete.php?id=<?php echo $d['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
  </tbody>
</table>
    </div>

<?php
  include "master/footer.php";
?>