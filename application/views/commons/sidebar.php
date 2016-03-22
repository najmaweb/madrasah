      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo baseurl();?>main/dashboard"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="<?php echo baseurl();?>main/dashboard2"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo baseurl()?>students">
                <i class="fa fa-th"></i> <span>Daftar Siswa</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li>
              <a href="<?php echo baseurl()?>teachers">
                <i class="fa fa-th"></i> <span>Daftar Guru</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li>
              <a href="<?php echo baseurl()?>lessons">
                <i class="fa fa-th"></i> <span>Daftar Pelajaran</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li>
              <a href="<?php echo baseurl()?>periods">
                <i class="fa fa-th"></i> <span>Daftar Periode</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li>
              <a href="<?php echo baseurl()?>exams">
                <i class="fa fa-th"></i> <span>Daftar Tes/Ujian</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li>
              <a href="<?php echo baseurl()?>fees">
                <i class="fa fa-th"></i> <span>Daftar Biaya Sekolah</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li class="header">Pengaturan</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Administrasi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo baseurl()?>students/add"><i class="fa fa-circle-o text-danger"></i> Registrasi Siswa Baru</a></li>
                <li><a href="../tables/data.html"><i class="fa fa-circle-o text-warning"></i> Registrasi Siswa Lama</a></li>
                <li><a href="../tables/data.html"><i class="fa fa-circle-o text-info"></i> Pembayaran</a></li>
              </ul>
            </li>

            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Pengaturan Kelas</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
