<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location: login.php");
  }
?>
<?php
$nama=$_POST['nama'];
$email=$_POST['email'];
$nohp=$_POST['nohp'];
$subject=$_POST['subject'];
$message=$_POST['message'];



 include "koneksi.php";


 $simpan=$koneksi->query("insert into contact(nama,email,nohp,subject,message) 
 values ('$nama','$email','$nohp','$subject','$message')");
if($simpan==true){

    header("location:contact.php?pesan=inputBerhasil");
  
} else{
    echo "Error";
}

?>