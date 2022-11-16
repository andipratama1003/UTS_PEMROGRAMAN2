<?php

include "koneksi.php";
$id_guru=$_POST['id_guru'];
$nip=$_POST['nip'];
$nama=$_POST['nama'];
$agama=$_POST['agama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$no_telp=$_POST['no_telp'];
$mapel=$_POST['mapel'];
$alamat=$_POST['alamat'];

$ubah=$koneksi->query("update data_guru set nip='$nip', nama='$nama', agama='$agama', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp', mapel='$mapel', alamat='$alamat' where id_guru='$id_guru'");

if($ubah==true){

    header("location:tampil_profil.php?pesan=editBerhasil");
} else{
    echo"Error";
}



?>