<!doctype html>
<html>
<head>
        <tittle> </tittle>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-edit.php" method="post">
             <?php
             $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from data_guru where id_guru='$id'");
                $row=$tampil->fetch_assoc();
             ?>
            <div class="form-group">
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

            <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>