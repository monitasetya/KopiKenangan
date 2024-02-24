<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location: login.php");
  }
?>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


 include "koneksi.php";


 $simpan=$koneksi->query("insert into contact(name,email,subject,message) 
 values ('$name','$email','$subject', '$message')");
if($simpan==true){

    header("location:contact.php?pesan=inputBerhasil");
  
} else{
    echo "Error";
}

?>