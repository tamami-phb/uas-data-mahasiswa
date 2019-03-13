<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="jumbotron">
    <h2>Formulir Entry Data</h2>
</div>
<form action="simpan-baru.php" method="post">
    <div class="form-group">
        <label>NIM</label>
        <input type="text" class="form-control" name="nim" />
    </div>
    <div class="form-group">
        <label>NAMA</label>
        <input type="text" class="form-control" name="nama" />
    </div>
    <div class="form-group">
        <label>KELAS</label>
        <input type="text" class="form-control" name="kelas" />
    </div>
    <br>
    <input type="submit" class="btn btn-primary" value="Simpan">
</form>
</div>
</body>