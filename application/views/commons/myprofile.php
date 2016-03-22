<!DOCTYPE html>
<html>
	<?php $this->load->view("commons/head");?>
	<script type="text/javascript">
		function resizeImage(url, callback){
			var canvas = document.createElement("canvas");
			var MAX_WIDTH_ALLOWED = 1600;
			var MAX_HEIGHT = 0;
			canvas.width = 1600;
			var img = new Image();
			img.onload = function(){
				MAX_HEIGHT = img.height * MAX_WIDTH_ALLOWED / img.width;
				canvas.height = MAX_HEIGHT;
				var ctx = canvas.getContext("2d");
				ctx.drawImage(img, 0, 0, MAX_WIDTH_ALLOWED, MAX_HEIGHT);
				callback(canvas.toDataURL("image/jpeg"));
			}
			img.src = url;
		}
		function loadImage(evt){
			console.log("File loaded");
			var input = evt.target;
			var filereader = new FileReader();
			filereader.onload = function(){
				resizeImage(filereader.result, function(result){
					$("#output").attr("src",result);
					$("#addImage").val(result);
				})
			}
			filereader.readAsDataURL(input.files[0]);
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
            Profile User
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User</a></li>
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
                  <h3 class="box-title"><?php echo $this->session->userdata["user"]?></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
						<img id="output" src="<?php echo $user->img;?>" width="200px" height="200px">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="addImage" name="addImage" onchange="loadImage(event)"/>
                      
                    </div>
                  </div><!-- /.box-body -->

                </form>
              </div><!-- /.box -->

            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Data User</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" id="username" placeholder="Enter ..." value="<?php echo $user->name;?>" />
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" id="useremail" placeholder="Enter ..." value="<?php echo $user->email;?>" />
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Keterangan</label>
                      <textarea class="form-control" rows="3" id="userdescription" placeholder="Enter ..."><?php echo $user->description;?></textarea>
                    </div>
                  <div class="box-footerx">
                    <button id="saveprofile" class="btn btn-primary">Submit</button>
                  </div>

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
        <strong>Madrasah</a>.</strong> Sistem Information.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo baseurl()?>assets/padi/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo baseurl()?>assets/padi/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo baseurl()?>assets/padi/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo baseurl()?>assets/padi/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
	<script type="text/javascript" src="<?php echo baseurl();?>assets/ajaxupload.3.5.js"></script>
    <script type="text/javascript">
		(function($){
			var thisdomain = "http://madrasahv2/";
			console.log("Hello");
			$("#saveprofile").click(function(){
				console.log("save click");
				$.ajax({
					url:thisdomain+"users/update",
					data:{name:$("#username").val(),email:$("#useremail").val(),description:$("#userdescription").val(),img:$("#output").attr("src"),id:3},
					//data:{name:$("#username").val(),email:$("#useremail").val(),id:3},
					type:"post"
				})
				.done(function(res){
					console.log("sukses update",res);
				})
				.fail(function(err){
					console.log("error update",err);
				});
			});
		}(jQuery))
    </script>
  </body>
</html>
