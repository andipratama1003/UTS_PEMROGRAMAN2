<!doctype html>
<html>
<head>
        <tittle><center>ISI DATA DI BAWAH INI</tittle></center>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-input.php" method="post">
            <div class="form-group">
                 <label for="nim"><b>Id guru</b></label>
                <Input type="text" name="id_guru" class="form-control">
            </div>
            <div class="form-group">
                <label for="nim"><b>Nip</b></label>
                <Input type="text" name="nip" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Nama</b></label>
                <Input type="text" name="nama"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Agama</b></label>
                <Input type="text" name="agama"class="form-control">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin"><b>Jenis Kelamin</b></label>
                <select name="jenis_kelamin" class="form-control">
                <option value ="Laki-laki"> Laki-Laki</option>
                <option value ="Perempuan"> Perempuan</option>
            </select>
        </div>
            <div class="form-group">
                <label for="nama"><b>no telephone</b></label>
                <Input type="text" name="no_telp"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Mata Pelajaran</b></label>
                <Input type="text" name="mapel"class="form-control">
            </div>
            <div class="form-group">
                <label for="nama"><b>Alamat</b></label>
                <Input type="text" name="alamat"class="form-control">
            </div>

            <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
          
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>