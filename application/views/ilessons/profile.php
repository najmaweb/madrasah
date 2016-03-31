<!DOCTYPE html>
<html>
	<?php $this->load->view("commons/head");?>
	<link rel="stylesheet" href="<?php echo baseurl();?>assets/padi/plugins/datepicker/datepicker3.css" />
	<link rel="stylesheet" href="<?php echo baseurl();?>assets/padi/padi.css" />
	<script type="text/javascript" src="<?php echo baseurl();?>assets/padilibs/padi.imagelib.js"></script>	
	<script src="<?php echo baseurl()?>assets/niceedit/nicEdit.js" type="text/javascript"></script>
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
		bkLib.onDomLoaded(function() {
			nicEditors.allTextAreas({
				uploadURI : '<?php echo baseurl();?>nicUpload/do_upload', 
				buttonList : ['bold','italic','underline','upload'], 
				iconsPath:'<?php echo baseurl(); ?>assets/niceedit/nicEditorIcons.gif'
			});
		}); 

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
            Profile Pelajaran
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Pelajaran</a></li>
            <li class="active">Edit</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
			<input id="lessonId" type="hidden" value="<?php echo $obj->id;?>" />
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title"><?php echo $obj->name?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                  <div class="box-body">
                    <div class="form-group">
						<img id="picture" class="ppicture" src="<?php echo $obj->image;?>" width="300px" height="400px">
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
                  <h3 class="box-title">Data Pelajaran</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" placeholder="Nama Pelajaran ..." id="name" value="<?php echo $obj->name;?>"/>
                    </div>
                    <div class="form-group">
                      <label>Kelas</label>
                      <?php echo form_dropdown("grade_id",$grades,$obj->grade_id,"id='grade_id'");?>
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." id="description"><?php echo $obj->description?></textarea>
                    </div>
                  <div class="box-footer">
                    <div  id="saveLesson" class="btn btn-primary">Simpan</div>
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
    <script src="<?php echo base_url()?>assets/padi/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <script type="text/javascript">
		(function($){
			var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

			$("#saveLesson").click(function(){
				console.log("save lesson");
				$.ajax({
					url:"http://madrasahv2/lessons/update",
					data:{
						id:$("#lessonId").val(),
						name:$("#name").val(),
						grade_id:$("#grade_id").val(),
						image:$("#picture").attr("src"),
						description:$("div.nicEdit-main").html()
					},
					type:"post"
				})
				.done(function(res){
					console.log("res",res);
					window.location.href = "http://madrasahv2/lessons";
				})
				.fail(function(err){
					console.log("Err",err);
				});
			});
		}(jQuery))
    </script>
  </body>
</html>
