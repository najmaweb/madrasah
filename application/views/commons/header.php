      <header class="main-header">
        <a href="#" class="logo"><b>Madra</b>sah</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo $this->session->userdata["img"];?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $this->session->userdata["user"];?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo $this->session->userdata["img"];?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $this->session->userdata["user"] ." - ". $this->session->userdata["description"];?>
                      <small>Member since <?php echo $this->session->userdata["createdate"]?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="<?php echo baseurl();?>users/changepassword">Change Password</a>
                    </div>
                    <div class="col-xs-4 text-center">
                    </div>
                    <div class="col-xs-4 text-center">
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo baseurl();?>main/myprofile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo baseurl();?>main/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </header>
