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

$simpan=$koneksi->query("insert into data_guru(id_guru,nip,nama,agama,jenis_kelamin,no_telp,mapel,alamat) 
                        values('$id_guru','$nip','$nama','$agama','$jenis_kelamin','$no_telp','$mapel','$alamat')");



if($simpan==true){

    header("location:tampil_profil.php?pesan=inputBerhasil");
} else {
    echo "Error";
}


?>