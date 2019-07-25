<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{asset('assets/images/jata.png')}}">

  <title>Sistem Pinjaman Aset Sewaan ICT</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="{{asset('assets/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{asset('assets/dist/css/sb-admin-2.css')}}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

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
          <!-- <li><a><i class="fa fa-user fa-fw"></i> <strong>Pengguna :</strong></a></li>
          <li><a href="/permohonan">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Permohonan</a></li>
          <li><a href="/semak">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Semak Status</a></li>
          <li>&nbsp;</li> -->
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
        <div class="col-lg-10"><br>
          <div class="panel panel-primary">
            <div class="panel-heading text-center">
              <h4>Permohonan anda telah dihantar.</h4>
            </div>
            <div class="panel-body text-center">
              <h4><p class="">Rujukan Permohonan : {{ $ref }}</p></h4>
              <h4><p class="">Sebarang masalah, sila hubungi : 03-8883 7013 / 7194</p></h4>
              <h4><p class="">atau emel kepada : <strong><font color="#FF0000">helpdeskict@perpaduan.gov.my</font></strong></p></h4>
              <br>
              <a href="{{ url('/')}}" class="btn btn-primary">Laman Utama</a>
            </div><!-- /.panel-body -->
          </div><!-- /.panel header -->
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div><!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

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
</div>
<!-- / .footer -->

<!-- jQuery -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('assets/vendor/metisMenu/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('assets/dist/js/sb-admin-2.js')}}"></script>

<!--- Include Date & Date Range Picker -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>


</body>

</html>
