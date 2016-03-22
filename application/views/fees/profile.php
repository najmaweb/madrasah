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
            Profile Siswa
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Siswa</a></li>
            <li class="active">Profile</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Bebop wa Rocksteady</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
						<img src="<?php echo base_url();?>media/silo.png" width="300px" height="400px">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Data Siswa</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>No Induk</label>
                      <input type="text" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>No Induk Siswa Nasional</label>
                      <input type="text" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="text" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label>No In</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled/>
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
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
