<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['id_minuman'];
$nama=$_POST['nama'];
$jenis_minuman=$_POST['jenis_minuman'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$total=$_POST['total'];

$ubah=$koneksi->query("update minuman set nama='$nama', jenis_minuman='$jenis_minuman', jumlah='$jumlah', harga='$harga',total='$total' where id_minuman='$id'");

if($ubah==true){

    header("location:tampil-minuman.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>