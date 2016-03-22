<!DOCTYPE html>
<html>
	<?php $this->load->view("commons/head");?>
	<script type="text/javascript" src="<?php echo baseurl();?>assets/padilibs/padi.imagelib.js"></script>	
	<script type="text/javascript">
		uploadImage = function(evt){
		  var input = evt.target;
		  var fileReader = new FileReader();
		  fileReader.onloadend = function(){
			  $("body").css("cursor","wait");
				resizeImage(fileReader.result,function(uri){
					$("#picture").attr("src",uri);
					$("body").css("cursor","default");
				});
		  }
		  fileReader.readAsDataURL(input.files[0]);
		}
	</script>	
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
			<input id="studentId" type="hidden" value="<?php echo $obj->id;?>" />
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title"><?php echo $obj->fname?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
                    <div class="form-group">
						<img id="picture" src="<?php echo $obj->image;?>" width="300px" height="400px">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile" id="pilih_gambar">File input</label>
                      <div id="status"></div>
                      <input type="file" id="addImage" onchange="uploadImage(event)"/>
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                  </div><!-- /.box-body -->
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
                      <input type="text" class="form-control" placeholder="Enter ..." id="fname" value="<?php echo $obj->fname;?>"/>
                    </div>
                    <div class="form-group">
                      <label>No Induk</label>
                      <input type="text" class="form-control" placeholder="Enter ..." id="nrp"/>
                    </div>
                    <div class="form-group">
                      <label>No Induk Siswa Nasional</label>
                      <input type="text" class="form-control" placeholder="Enter ..." id="nisn"/>
                    </div>
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" class="form-control" placeholder="Enter ..."  id="bplace" value="<?php echo $obj->bplace;?>"/>
                    </div>
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="text" class="form-control" placeholder="Enter ..."  id="bday" value="<?php echo $obj->birthday;?>"/>
                    </div>
                    <div class="form-group">
                      <label>No In</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled/>
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." id="description"></textarea>
                    </div>
                  <div class="box-footer">
                    <button  id="saveStudent" class="btn btn-primary">Simpan</button>
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
        <strong>Madrasah.</strong> Sistem Informasi.
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
    <script type="text/javascript">
		(function($){
			console.log("test");
			$("#bday").datepicker();
			$("#saveStudent").click(function(){
				console.log("test2");
				$.ajax({
					url:"http://madrasahv2/students/update",
					data:{id:$("#studentId").val(),fname:$("#fname").val(),bday:$("#bday").val(),bplace:$("#bplace").val(),image:$("#picture").attr("src")},
					type:"post"
				})
				.done(function(res){
					console.log("res",res);
				})
				.fail(function(err){
					console.log("Err",err);
				});
			});
		}(jQuery))
    </script>
  </body>
</html>
