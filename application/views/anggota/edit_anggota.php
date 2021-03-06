<?php 
    include 'header.php'
?>
<?php
    include 'nav-bar.php'
?>
        <div id="page-wrapper">
          <div class="header"> 
            <h1 class="page-header">
                Kelola Anggota
            </h1>                 
        </div>
        <div id="page-inner"> 
              <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ubah Data Anggota Koperasi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php foreach($anggota as $u) { ?>
                                    <form role="form" method="post" action="<?php echo base_url('anggota/update_data')?>">
                                        <div class="form-group">
                                            <label>Nama Anggota</label>
                                            <input type="hidden" name="id_anggota" value="<?php echo $u->id_anggota ?>">
                                            <input type="text" name="nama" value="<?php echo $u->nama ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="alamat"  rows="3" style="resize: none;"><?php echo $u->alamat ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type="text" name="no_telp" value="<?php echo $u->no_telp ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" value="<?php echo $u->tempat_lahir ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" name="tanggal_lahir" value="<?php echo $u->tanggal_lahir ?>" id="tgl_lahir" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label><br>
                                            <label class="radio-inline">
                                                <input type="radio" name="jenis_kelamin" id="optionsRadiosInline2" value="Pria" <?php if($u->j_kelamin == 'pria'){ echo 'cheked';} ?>>Pria
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="jenis_kelamin" id="optionsRadiosInline3" value="Wanita" <?php if($u->j_kelamin == 'wanita'){ echo 'cheked';} ?>>Wanita
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" name="keterangan" rows="3" style="resize: none;"><?php echo $u->keterangan ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Button</button>
                                    </form>
                                    <?php } ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js') ?>"></script>
    <!-- Bootstrap Js -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
     
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url('assets/js/jquery.metisMenu.js')?>"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    
    
    <script src="assets/js/easypiechart.js"></script>
    <script src="assets/js/easypiechart-data.js"></script>
    
     <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
    
    <!-- Custom Js -->
    <script src="<?php echo base_url('assets/js/custom-scripts.js')?>"></script>
    <script src="<?php echo base_url('assets/js/login.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-datepicker2.js');?>"></script>
        <script type="text/javascript">
            $('#tgl_lahir').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true
            });
        </script>

</body>

</html>