
<?php
// search.php
include "master/header.php";
include "master/nav.php";

include "koneksi.php"; // Pastikan file koneksi.php sudah disertakan dengan benar

if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    // Lakukan logika pencarian pada database
    $query = "SELECT * FROM data_mahasiswa 
              WHERE nim LIKE '%$search_query%' 
                 OR nama LIKE '%$search_query%' 
                 OR tempat_lahir LIKE '%$search_query%' 
                 OR tanggal_lahir LIKE '%$search_query%' 
                 OR jurusan LIKE '%$search_query%'";

    $result = mysqli_query($conn, $query);
    ?>
<!-- Tampilan hasil pencarian -->
<div class="container mt-3">
    <h1>Hasil Pencarian</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nim</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['tempat_lahir']; ?></td>
                        <td><?php echo $row['tanggal_lahir']; ?></td>
                        <td><?php echo $row['jurusan']; ?></td>
                        <td class="d-block d-flex gap-3">
                            <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='7'>Tidak ada hasil pencarian.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<?php 
} else {
    echo "Tidak ada query pencarian. Masukkan kata kunci untuk mencari.";
}
?>


<?php 
    include "master/footer.php";
?>