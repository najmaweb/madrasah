<!DOCTYPE html>
<html>
	<?php $this->load->view("commons/head");?>
  <body class="skin-blue">
    <div class="wrapper">
      <?php $this->load->view("commons/header");?>
      <!-- Left side column. contains the logo and sidebar -->
	<?php $this->load->view("commons/sidebar");?>
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Entri Hasil Evaluasi
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Matematika Kelas 1A, tanggal 12 September 2015</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label >Agus Setiawan</label>
                      <input type="text" class="form-controlx" placeholder="Masukkan nilai">
                    </div>
                    <div class="form-group">
                      <label >Bambang Sutrisno</label>
                      <input type="text" class="form-controlx" placeholder="Masukkan nilai">
                    </div>
                    <div class="form-group">
                      <label >Hari Kurniawan</label>
                      <input type="text" class="form-controlx" placeholder="Masukkan nilai">
                    </div>
                    <div class="form-group">
                      <label >Indah Kurniawan</label>
                      <input type="text" class="form-controlx" placeholder="Masukkan nilai">
                    </div>
                    <div class="form-group">
                      <label >Irwan Kurniawan</label>
                      <input type="text" class="form-controlx" placeholder="Masukkan nilai">
                    </div>
                    <div class="form-group">
                      <label >Joko Kurniawan</label>
                      <input type="text" class="form-controlx" placeholder="Masukkan nilai">
                    </div>
                    <div class="form-group">
                      <label >Lontong Kurniawan</label>
                      <input type="text" class="form-controlx" placeholder="Masukkan nilai">
                    </div>
                    <div class="form-group">
                      <label >Mahmud Kurniawan</label>
                      <input type="text" class="form-controlx" placeholder="Masukkan nilai">
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
          </div>   <!-- /.row -->
        </section><!-- /.content --> 
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versi</b> 1.0
        </div>
        <strong>Madrasah</a>.</strong> software
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url()?>assets/padi/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url()?>assets/padi/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url()?>assets/padi/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>assets/padi/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>assets/padi/dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
