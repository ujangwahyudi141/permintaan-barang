
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('template.head')
    <title>Permintaan Barang</title>
</head>
<body class="hold-transition sidebar-mini">
<div id="app" class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin_warehouse.template.sidebar-left-w')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-3">
    <!-- Main content -->
    <div class="content">
        <router-view></router-view>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

@include('template.script')



</body>
</html>
