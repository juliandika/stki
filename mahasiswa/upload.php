<?php

include "header.php";

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

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form enctype="multipart/form-data" method="POST" action="upload_dokumen.php">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload Cover</label>
                                        <input type="file" name="cover" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload Lembar Pengesahan</label>
                                        <input type="file" name="pengesahan" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload Daftar Isi, Abstrak, BAB I</label>
                                        <input type="file" name="daftarisi" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload BAB II</label>
                                        <input type="file" name="babii" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload BAB III</label>
                                        <input type="file" name="babiii" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload BAB IV</label>
                                        <input type="file" name="babiv" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload BAB V</label>
                                        <input type="file" name="babv" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload Daftar Pustaka</label>
                                        <input type="file" name="dapus" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload Halaman Belakang Lainnya</label>
                                        <input type="file" name="halbelakang" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    

                                
                                <input type=submit value=Upload>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


       