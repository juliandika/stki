<?php

include "connect.php";

$nim = $_GET["nim"];


mysqli_query($conn, "UPDATE mahasiswa SET status = 'yes' WHERE nim=$nim");

?>

<script type="text/javascript">
	window.location="view_mhs.php";

</script>