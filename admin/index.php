<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Administrator &nbsp;|&nbsp; Waroeng Goeboek</title>

  <!-- CSS's Files -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../dataTables/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="../css/admin-kasir.css">

  <!-- Font's Files -->
  <link href="../fonts/exo_2.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">

  <!-- Favicon's File -->
  <link rel="shortcut icon" type="image/x-icon" href="../images/logo.png">

</head>
<body>
  <nav class="navbar navbar-admin navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span></button>
          <a class="navbar-brand" href="#"><span>Waroeng</span>Goeboek</a>
          <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown"><a class="dropdown-toggle logout" data-toggle="dropdown" href="#">
              <em class="fa fa-power-off"></em>
            </a>
          </li>
        </ul>
      </div>
    </div><!-- /.container-fluid -->
  </nav>
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
      <div class="profile-usertitle">
        <div class="profile-usertitle-name">Username</div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Pencarian">
      </div>       
    </form>
    <ul class="nav menu-sidebar">
      <li>
        <a href="?page=dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a>
      </li>
      <li>
        <a href="?page=pengguna"><em class="fa fa-users">&nbsp;</em> Pengguna</a>
      </li>
      <li>
        <a href="?page=kategori"><em class="fa fa-files-o">&nbsp;</em> Kategori</a>
      </li>
      <li>
        <a href="?page=menu"><em class="fa fa-coffee">&nbsp;</em> Menu</a>
      </li>
      <li>
        <a href="?page=laporan"><em class="fa fa-folder">&nbsp;</em> Laporan Penjualan</a>
      </li>
    </ul>
  </div> <!-- .menu sidebar -->

  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main-page">
    <?php 

    if(@$_GET['page'] == 'dashboard' || @$_GET['']) {
      include 'dashboard.php';
    } elseif (@$_GET['page'] == 'pengguna') {
      include 'pengguna.php';
    } elseif (@$_GET['page'] == 'kategori') {
      include 'kategori.php';
    } elseif (@$_GET['page'] == 'menu') {
      include 'menu.php';
    } elseif (@$_GET['page'] == 'laporan') {
      include 'laporan.php';
    }

    ?>
  </div>

  <!-- JQuery's Files -->
  <script src="../jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../dataTables/datatables.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
      $('#datatables').DataTable({
        "language":{
            "url" : "../dataTables/Indonesian.json",
            "sEmptyTable" : "Tidads"
        }
      });
    } );
  </script>
</body>
</html>