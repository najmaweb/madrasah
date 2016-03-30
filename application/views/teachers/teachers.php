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

		<?php $this->load->view("teachers/dialogs");?>


        <section class="content-header">
          <h1>
            Daftar Guru
            <small>Aktif</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Guru</a></li>
            <li class="active">Daftar Guru</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
					<a href="<?php echo base_url();?>iteachers/"><i title="Lihat Guru yang nonaktif" class="fa fa-trash-o pointer"></i></a>
					<a href="<?php echo base_url();?>teachers/add"><i title="Penambahan Guru" class="fa fa-plus-circle pointer"></i></a>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tTeacher" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="40%">Nama</th>
                        <th width="25%">Alamat</th>
                        <th width="20%">TTL</th>
                        <th width="15%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php foreach($objs as $obj){?>
                      <tr trid="<?php echo $obj->id;?>">
                        <td class="tname"><?php echo $obj->name;?></td>
                        <td><?php echo $obj->address;?></td>
                        <td><?php echo $obj->bplace . ", " . $obj->birthday;?></td>
                        <td>
							<div class="btn-group">
							  <button type="button" class="btn btn-warning">Action</button>
							  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							  </button>
							  <ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo baseurl();?>teachers/profile/<?php echo $obj->id;?>">Profile</a></li>
								<li class="divider"></li>
								<li class="remove pointer"><a>Masukkan ke <i class="fa fa-trash-o pointer"></i></a></li>
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
    <script src="<?php echo base_url();?>assets/padilibs/radu.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- page script -->
	<script type="text/javascript">
		$(function () {
			var table = $("#tTeacher").dataTable({
				"aLengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
				"iDisplayLength": 5
			});
			$("#tTeacher").on("click","tbody tr li.remove",function(){
				var tr = $(this).stairUp({level:4}),
					trid = tr.attr("trid"),
					tname = tr.find(".tname").html();
				$("#tTeacher tr").removeClass("selected");
				tr.addClass("selected");
				$("#confirmtext").html("Apakah anda benar-benar hendak menghapus "+tname+" ?");
				$("#confirmtitle").html("Konfirmasi Hapus Data");
				$("#removeconfirm").modal();
			});
			$("#yesremove").click(function(){
				var tr = $("#tTeacher tbody tr.selected"),
					trid = $("#tTeacher tbody tr.selected").attr("trid");
				$.ajax({
					url:"http://madrasahv2/teachers/setactive",
					data:{id:trid,active:"0"},
					type:"post"
				})
				.done(function(res){
					$('#tTeacher').dataTable().fnDeleteRow(tr[0]);
				})
				.fail(function(err){
					console.log("Err",err);
				});
			});
		});
	</script>

  </body>
</html>
