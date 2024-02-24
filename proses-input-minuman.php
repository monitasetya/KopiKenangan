<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location: login.php");
  }
?>
<?php

$nama=$_POST['nama'];
$jenis_minuman=$_POST['jenis_minuman'];
$jumlah=$_POST['jumlah'];
// Tambahkan logika pengambilan harga berdasarkan nama minuman
$harga = gethargaByJenis_minuman($jenis_minuman)*1000;
$total = $harga  * $jumlah ;
$formatted_total = number_format($total, 2, '.', ',');
echo $formatted_total;

echo $harga;
// Kirim harga sebagai respons


function gethargaByjenis_minuman($jenis_minuman) {
  // Implementasi logika pengambilan harga sesuai dengan nama minuman
  // Misalnya, Anda dapat menggunakan database atau array sebagai referensi harga
  $hargaReference = [
      "Mango Yuzu Raspberry" => 15,
      "Raspberry Hibiscus" => 15,
      "Lemon Black Tea" => 20,
      "1 Kopi Kenangan Mantan (R) 1 Roti Martabak" => 40,
      "1 Americano (R) 1 Roti Coklat Klasik" => 45,
      "Black aren" => 10,
      "MANTANCINO" => 10,
      "Avocuddle" => 10,
      
      // Tambahkan minuman dan harga sesuai kebutuhan
  ];

  // Kembalikan harga jika nama minuman ada dalam referensi, jika tidak kembalikan pesan kesalahan atau nilai default
  return isset($hargaReference[$jenis_minuman]) ? $hargaReference[$jenis_minuman] : 'Minuman tidak ditemukan';
}

include "koneksi.php";

$simpan = $koneksi->query("insert into minuman(nama, jenis_minuman, jumlah, harga, total) 
                           values ('$nama', '$jenis_minuman', '$jumlah', '$harga', '$total')");
                           
if($simpan==true){

    header("location:detail-product.php? pesan=inputBerhasil");
} else{
    echo "Error";
}




?>
<?php



