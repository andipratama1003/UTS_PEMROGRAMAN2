<!doctype html>
<html>
<head>
    <tittle> </tittle>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>
    <body>
        <div class="container">
        <div class="row">
        <div clas="col-md-12">
        <h1> Data Barang</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){


?>
<div class="alert alert-success">
    Penyimpanan Berhasil!
</div>

<?php
}
?>
        <?php

        if(@$_GET['pesan']=="hapusBerhasil"){


        ?>
        <div class="alert alert-success">
            Data Berhasil DiHapus!
        </div>

        <?php
        }
        ?>
        
                <?php

                if(@$_GET['pesan']=="editBerhasil"){


                ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>

                <?php
                }
                ?>

<table id="datatables" class="table table-bordered">
    <thead>
    <tr> 
        <td><center><b>id guru</center></td>
        <td> <center><b> nip</center></td> <td> <center><b>nama</center></td>
        <td><center><b>agama</center></td> <td> <center><b>jenis kelamin</center></td>
            <td><center><b>no telephone</center></td> <td> <center><b>mata pelajaran</center></td><td> <center><b>alamat</center></td>

        <th> 
            <a href="input.php">
                <button class="btn btn-info glyphicon glyphicon-plus"></button>
            </a>
        </th>
    </tr>
</thead>
<tbody>
<?php  
   include "koneksi.php";
   $sql=$koneksi->query("select * from data_guru order by id_guru  ASC");

   while($row= $sql->fetch_assoc()){
?>
   <tr>
         <td> <center> <?php echo $row['id_guru'] ?> </center> </td>
         <td> <center> <?php echo $row['nip'] ?> </center> </td>
         <td> <center> <?php echo $row['nama'] ?> </center> </td>
         <td> <center> <?php echo $row['agama'] ?> </center> </td>
         <td> <center> <?php echo $row['jenis_kelamin'] ?> </center> </td>
         <td> <center> <?php echo $row['no_telp'] ?> </center> </td>
         <td> <center> <?php echo $row['mapel'] ?> </center> </td>
         <td> <center> <?php echo $row['alamat'] ?> </center> </td>
         <td>

         <a href="edit-profil.php?id=<?php echo $row['id_guru']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
            </a>
        <a href="hapus.php?id=<?php echo $row['id_guru']?>" onclick="return confirm('anda yakin ingin menghapus data?')">
        <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
            </a>

   </td>
   </tr>
<?php
 }
?>
</tbody>
</table>
</div> </div></div>
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="DataTables/datatables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatables').DataTable();
            });
        </script>
        <a href="index.php" class="btn btn-primary">back </a>


</body>
</html>