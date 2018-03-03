<?php

include "header.php";
include "connect.php";

?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Plain Page</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <?php

                                    $result = mysqli_query($conn, "SELECT m.nim, m.nama, j.nama_jurusan, f.nama_fakultas, m.username, m.status FROM mahasiswa m JOIN jurusan j ON m.id_jurusan = j.id_jurusan JOIN fakultas f ON m.id_fakultas = f.`id_fakultas`");

                                    echo "<table class='table table-bordered'>";
                                    echo "<tr>";
                                    echo "<th>"; echo "NIM"; echo "</th>";
                                    echo "<th>"; echo "Nama"; echo "</th>";
                                    echo "<th>"; echo "Jurusan"; echo "</th>";
                                    echo "<th>"; echo "Fakultas"; echo "</th>";
                                    echo "<th>"; echo "Username"; echo "</th>";
                                    echo "<th>"; echo "Status"; echo "</th>";
                                    echo "<th>"; echo "Approve"; echo "</th>";
                                    echo "<th>"; echo "Not Approve"; echo "</th>";
                                    echo "</tr>";

                                    while($row = mysqli_fetch_array($result)){

                                        echo "<tr>";
                                        echo "<td>"; echo $row["nim"]; echo "</td>";
                                        echo "<td>"; echo $row["nama"]; echo "</td>";
                                        echo "<td>"; echo $row["nama_jurusan"]; echo "</td>";
                                        echo "<td>"; echo $row["nama_fakultas"]; echo "</td>";
                                        echo "<td>"; echo $row["username"]; echo "</td>";
                                        echo "<td>"; echo $row["status"]; echo "</td>";
                                        echo "<td>"; ?><a href="approve.php?nim=<?php echo $row["nim"]; ?>">Approve</a><?php echo "</td>";

                                        echo "<td>"; ?> <a href="notapprove.php?nim=<?php echo $row["nim"]; ?>">Not Approve</a> <?php echo "</td>";
                                        echo "</tr>";

                                    }
                                    echo "</table>";

                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php

include "footer.php";

?>
       