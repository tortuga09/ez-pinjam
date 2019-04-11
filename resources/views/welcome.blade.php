<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/jata.png">

  <title>Sistem Pinjaman Aset Sewaan ICT</title>

  <!-- Bootstrap Core CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

  <style>
  .borderless td, .borderless th {
    border: none !important;
  }
</style>

<div id="wrapper">

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Sistem Pinjaman Aset Sewaan ICT</a>
    </div>
    <!-- /.navbar-header -->

    <!-- Navigation -->
    <!-- /.navbar-top-links -->
    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse" >
        <ul class="nav" id="side-menu">
          <li><a href="/"><i class="fa fa-home fa-fw"></i> <strong>Laman Utama</strong></a></li>
          <li>&nbsp;</li>
          <li><a><i class="fa fa-user fa-fw"></i> <strong>Pengguna :</strong></a></li>
          <li><a href="/permohonan">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Permohonan</a></li>
          <li><a href="/semak">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Semak Status</a></li>
          <li>&nbsp;</li>
          <li><a><i class="fa fa-lock fa-fw"></i> <strong>Pentadbir :</strong></a></li>
          <li><a href="{{ url('/login') }}">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Log Masuk</a></li>
          <li>&nbsp;</li>
          <li><a><i class="fa fa-download fa-fw"></i> <strong>Muat Turun :</strong></a></li>
          <li><a href="#" target="_blank">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Manual Pengguna</a></li>
        </ul>
      </div><!-- /.sidebar-collapse -->
    </div><!-- /.navbar-static-side -->
  </nav>

  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog" data-keyboard="false" data-backdrop="static">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content panel-danger">
              <div class="modal-header panel-heading">
                <h4 class="modal-title">Peringatan!</h4>
              </div>
              <div class="modal-body">
                <p>Permohonan perminjaman peralatan aset sewaan ICT <strong>MESTILAH</strong> dibuat sekurang-kurangnya <strong>empat (4) jam sebelum</strong> mengambil peralatan.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-10">
          <h3 class="page-header">Panduan Peminjaman Peralatan Aset Sewaan ICT, PERPADUAN</h3>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <strong>Semasa Proses Peminjaman :</strong>
            </div>
            <div class="panel-body">
              <ol>
                <li>Melengkapkan permohonan peminjaman peralatan aset sewaan ICT ke dalam Sistem Pinjaman Aset Sewaan ICT;</li>
                <li>Permohonan perminjaman peralatan aset sewaan ICT melalui sistem, hendaklah dilaksanakan <strong>sekurang-kurangnya empat (4) jam sebelum</strong> mengambil peralatan; dan</li>
                <li>Menyemak kelengkapan peralatan ICT yang disediakan dalam keadaan baik dan mencukupi (seperti yang dipohon).</li>
              </ol>
            </div><!-- /.panel-body -->
          </div>

          <div class="panel panel-primary">
            <div class="panel-heading">
              <strong>Semasa Proses Pemulangan :</strong>
            </div>
            <div class="panel-body">
              <ol>
                <li>Memastikan peralatan ICT yang dipinjam berada dalam keadaan baik dan bilangannya mencukupi;</li>
                <li>Memaklumkan kepada pihak CTM sekiranya peralatan ICT tersebut mengalami kerosakan;</li>
                <li>Membuat laporan polis sekiranya peralatan ICT tersebut hilang dalam simpanan; dan</li>
                <li>Membuat penggantian semula sekiranya peralatan ICT tersebut mengalami kerosakan atau kehilangan atas kecuaian pengguna.</li>
              </ol>
            </div><!-- /.panel-body -->
          </div>

          <div class="panel panel-primary">
            <div class="panel-heading">
              <strong>Waktu Peminjaman Dan Pemulangan :</strong>
            </div>
            <div class="panel-body">
              <table class="table table-bordered">
                <tr class="info">
                  <td align="center"><strong>Hari</strong></td>
                  <td align="center"><strong>Sesi Pagi</strong></td>
                  <td align="center"><strong>Sesi Petang</strong></td>
                </tr>
                <tr>
                  <td align="center">Isnin - Khamis</td>
                  <td align="center">8.15 pagi - 1.00 tengah hari</td>
                  <td align="center">2.00 petang - 4.30 petang</td>
                </tr>
                <tr>
                  <td align="center">Jumaat</td>
                  <td align="center">8.15 pagi - 12.15 tengah hari</td>
                  <td align="center">2.45 petang - 4.30 petang</td>
                </tr>
              </table>
            </div><!-- /.panel-body -->
          </div>

          <div class="panel panel-primary">
            <div class="panel-heading">
              <strong>Sekiranya tidak dapat dipulangkan kepada CTM pada tarikh yang dinyatakan :</strong>
            </div>
            <div class="panel-body">
              <ol>
                <li>Tuan/Puan dikehendaki memaklumkan kepada pihak CTM melalui emel bagi permohonan pinjaman lanjutan; dan</li>
                <li>Sekiranya melebihi masa pemulangan iaitu jam 4.30 petang, peralatan ICT tersebut perlulah disimpan di bawah seliaan tuan/puan dan menjadi tanggungjawab tuan/puan.</li>
              </ol>
            </div><!-- /.panel-body -->
          </div>
        </div>  <!-- /.col-lg-10 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->

<!-- footer -->
<div class="panel-footer">
  <style>
  .center {
    font-size:12px;
  }
  </style>
  <?php
  $copyYear = 2018;
  $curYear = date('Y');
  ?>
  <center class="center">
    <strong>&copy; <?php echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : ''); ?> Cawangan Teknologi Maklumat<br>Bahagian Khidmat Pengurusan<br>Jabatan Perpaduan Negara dan Integrasi Nasional</strong>
  </center>
</div><!-- / .footer -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/sb-admin-2.js"></script>

    <script type="text/javascript">
    $(window).on('load',function(){
      $('#myModal').modal('show');
    });
    </script>

  </body>

  </html>
