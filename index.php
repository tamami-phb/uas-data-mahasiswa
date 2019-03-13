<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h2>Aplikasi Perekaman Data Mahasiswa</h2>
    </div>

    <div class="d-flex flex-row">
        <a class="btn btn-success w-100" href="input.php">Tambah Data</a>
    </div>
    <br>
    <div class="row">
        <table class="table">
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>KELAS</th>
            </tr>
    
        <?php 
include "koneksi.php";

$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error) {
    echo '<tr><td colspan="3">';
    echo "Gagal koneksi : " . $koneksi->connect_error;
    echo "</td></tr>";
} 

$query = "select * from data_mahasiswa";
$data = $koneksi->query($query);
if($data->num_rows <= 0) {
    echo '<tr><td colspan="3">';
    echo "DATA NIHIL";
    echo "</td></tr>";
} else {
    while($row = $data->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nim"] . "</td>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["kelas"] . "</td>";
        echo '<td><a href="form-edit.php?kode=' . 
            $row["kode"] . '">Edit</a></td>';
        echo '<td><a href="hapus.php?kode=' . 
            $row["kode"] . '">Hapus</a></td>';
        echo "</tr>";
    }
}
        ?>
    
        </table>
    </div>
</body>