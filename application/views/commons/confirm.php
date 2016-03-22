<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Madrasah v.2.0</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo baseurl()?>assets/padi/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo baseurl()?>assets/padi/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo baseurl()?>assets/padi/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
      .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
      }
      .example-modal .modal {
        background: transparent!important;
      }
    </style>
  </head>
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
            Konfirmasi
            <small>penggantian password</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User</a></li>
            <li class="active">Password Changed</li>
          </ol>
        </section>

        <!-- Main content -->
          
          <div class="example-modal">
            <div class="modal modal-success">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Penggantian Password Berhasil</h4>
                  </div>
                  <div class="modal-body">
                    <p>Silakan login kembali menggunakan password baru anda;</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal" id="gotomain">Close</button>
                    <button type="button" class="btn btn-outline" id="gotoprofile">User Profile</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Madrasah</a>.</strong> Sistem Informasi.
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
    <script src="<?php echo baseurl()?>assets/padi/dist/js/demo.js" type="text/javascript"></script>
    <script type="text/javascript">
		$("#gotomain").click(function(){
			window.location.href = "http://madrasahv2/students";
		});
		$("#gotoprofile").click(function(){
			window.location.href = "http://madrasahv2/main/myprofile";
		});
    </script>
  </body>
</html>
