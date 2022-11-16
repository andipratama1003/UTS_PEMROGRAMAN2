<?php
$id=$_GET['id'];

include "koneksi.php";
$hapus=$koneksi->query("delete from data_guru where id_guru='$id'");

if($hapus==true){

    header("location:tampil_profil.php?pesan=hapusBerhasil");

}else{
    echo"Error"; 
}


?>