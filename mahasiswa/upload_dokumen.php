<?php


include "connect.php";

session_start();

if(!isset($_SESSION['username'])){

    header('location: login.php');
}

?>

<?php

$nim = $_SESSION['nim'];

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = md5($_FILES['fupload']['name']);

$folder = "fileupload/$nama_file";

if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

  $query = "INSERT INTO dokumen (nim, nama_file)
            VALUES('$nim', '$nama_file')";
            
  mysqli_query($conn, $query);
}
else{
  echo "File gagal di upload";
}
?>