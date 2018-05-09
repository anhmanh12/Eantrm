<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>EANT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>EANTRM Center</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="{{url('logout')}}">Log Out</i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>


        <li >
          <a href="{{url('admin/installSuccessfully')}}">
            <i class="fa fa-edit"></i> <span>Install Successfully</span>
          </a>

        </li>
        <li >
          <a href="{{url('admin/installFailed')}}">
            <i class="fa fa-table"></i> <span>Install Failed</span>
          </a>

        </li>
        <li>
          <a href="{{url('admin/packages')}}">
            <i class="fa fa-calendar"></i> <span>Packages</span>
          </a>
        </li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-table"></i> <span>Registered</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/notActivated')}}"><i class="fa fa-circle-o"></i>
            Not Activated</a></li>
          </ul>
        </li>
      </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
     <section class="content-header">
      <h1>
        <h1 style="text-align: center;">@yield('Title')</h1>
      </h1>

    </section>
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <div class="box-header with-border">
        </div>
        <div class="box-body">
         @yield('installSuccessfully')
         @yield('installFailed')
         @yield('packages')
         @yield('notActivated')


        <!-- end form -->
      </div>
      <!-- /.box-body -->
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">

</footer>


<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>

 </div>
 <!-- ./wrapper -->
