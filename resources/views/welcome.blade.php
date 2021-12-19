
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
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('template.sidebar-left')

  <!-- Content Wrapper. Contains page content -->
  <div id="app" class="content-wrapper mt-3">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <example-component></example-component>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

@include('template.script')



</body>
</html>
