<?php


include "connect.php";
include "toIndex.php";

session_start();

if(!isset($_SESSION['username'])){

    header('location: login.php');
}

?>

<?php

	$nim = $_SESSION['nim'];

	$lokasi_file_cover = $_FILES['cover']['tmp_name'];
	$nama_file_cover   = ($_FILES['cover']['name']);

	$lokasi_file_pengesahan = $_FILES['pengesahan']['tmp_name'];
	$nama_file_pengesahan  = ($_FILES['pengesahan']['name']);

	$folder1 = "fileupload/$nama_file_cover";
	$folder2 = "fileupload/$nama_file_pengesahan";


	if(move_uploaded_file($lokasi_file_cover,"$folder1")){

	  $query = "INSERT INTO documents (nim, id_label, nama_file)
	            VALUES('$nim', 1, '$nama_file_cover')";
	            
	  mysqli_query($conn, $query);

	  toIndex($nama_file_cover);
	}

	if(move_uploaded_file($lokasi_file_pengesahan,"$folder2")){

	  $query = "INSERT INTO documents (nim, id_label, nama_file)
	            VALUES('$nim', 2, '$nama_file_pengesahan')";
	            
	  mysqli_query($conn, $query);

	  toIndex($nama_file_pengesahan);


	}

?>