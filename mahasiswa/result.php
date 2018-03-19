<?php

include "header.php";


include 'connect.php';
include 'paging.php';


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

                                <form entype="multipart/form-data" method="GET" action="sim.php">
                                    <div class="input-group">
                                      <input type="text" class="form-control" name="keyword" placeholder="Search for...">
                                          <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="submit" value="Submit">Go!</button>
                                          </span>
                                    </div>
                                </form>

                                <?php
                                    /*$result = mysqli_query($conn, "SELECT DISTINCT judul, nama, nama_jurusan, label, semua.doc AS nama_doc, nilai FROM semua INNER JOIN tbcache ON semua.doc = tbcache.docid ORDER BY nilai DESC");*/

                                    echo "<table>";
                                    echo "<tr>";
                                    echo "<th>"; echo "Judul"; echo "</th>";
                                    echo "<th>"; echo "Nama Jurusan"; echo "</th>";
                                    echo "<th>"; echo "Label"; echo "</th>";
                                    echo "<th>"; echo "Nama Dokumen"; echo "</th>";
                                    echo "<th>"; echo "Sim"; echo "</th>";
                                    echo "</tr>";

                                    while($row = mysqli_fetch_array($result)){

                                        echo "<tr>";
                                        echo "<td>"; echo $row["judul"]; echo "</td>";
                                        echo "<td>"; echo $row["nama_jurusan"]; echo "</td>";
                                        echo "<td>"; echo $row["label"]; echo "</td>";
                                        echo "<td>"; echo $row["nama_doc"]; echo "</td>";
                                        echo "<td>"; echo $row["nilai"]; echo "</td>";
                                        echo "</tr>";

                                    }
                                    echo "</table>";

                                ?>

                                <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>

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
       