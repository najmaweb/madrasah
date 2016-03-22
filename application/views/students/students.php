<!DOCTYPE html>
<html>
<?php $this->load->view("commons/head");?>
<body class="skin-blue">
    <div class="wrapper">
<?php $this->load->view("commons/header");?>
<?php $this->load->view("commons/sidebar");?>
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar Siswa
            <small>Kelas 1A</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Siswa</a></li>
            <li class="active">Daftar Siswa</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pilih Kelas </h3>
                  <select>
					  <option>1 A</option>
					  <option>1 B</option>
					  <option>2 A</option>
					  <option>2 B</option>
					  <option>3 A</option>
					  <option>3 B</option>
					  <option>4 A</option>
					  <option>4 B</option>
					  <option>5 A</option>
					  <option>5 B</option>
                  </select>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="35%">Nama</th>
                        <th width="25%">Alamat</th>
                        <th width="10%">Kelas</th>
                        <th width="15%">TTL</th>
                        <th width="15%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php foreach($objs as $obj){?>
                      <tr>
                        <td><?php echo $obj->name;?></td>
                        <td><?php echo $obj->address;?></td>
                        <td>IA</td>
                        <td><?php echo $obj->bplace . ", " . $obj->birthday;?></td>
                        <td>
							<div class="btn-group">
							  <button type="button" class="btn btn-warning">Action</button>
							  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							  </button>
							  <ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo baseurl();?>students/profile/<?php echo $obj->id;?>">Profile</a></li>
								<li class="divider"></li>
								<li><a href="#">Registrasi</a></li>
							  </ul>
							</div>							
						</td>
                      </tr>
                      <?php }?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                        <th>TTL</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php $this->load->view("commons/footer");?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url();?>assets/padi/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url();?>assets/padi/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url();?>assets/padi/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/padi/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url();?>assets/padi/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url();?>assets/padi/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>assets/padi/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable({
			"aLengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
			"iDisplayLength": 5			
		});
      });
    </script>

  </body>
</html>
