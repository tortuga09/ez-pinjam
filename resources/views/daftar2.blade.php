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
            <li><a href="{{ url('/login') }}"><i class="fa fa-lock fa-fw"></i> <strong>Log Masuk</strong></a></li>
            <li>&nbsp;</li>
            <li><a><i class="fa fa-user fa-fw"></i> <strong>Pengguna :</strong></a></li>
            <!-- <li><a href="/permohonan">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Permohonan</a></li> -->
            <li><a href="/semak">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Semak Status</a></li>
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
              <div class="panel-heading">
                <strong>Maklumat Pengguna</strong>
              </div><!-- /.panel-heading -->
              <div class="panel-body">
                <form class="" action="{{ route('daftarPengguna') }}" method="post">
                  @csrf
                  <div class="col-md-2">
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <label>Nama</label>
                      <input class="form-control" name="nama" type="text"  value="{{ $check->nama }}" readonly/>
                    </div>
                    <div class="form-group">
                      <label>No. Kad Pengenalan</label>
                      <input class="form-control" name="no_ic" type="text"  value="{{ $check->no_ic }}" readonly/>
                    </div>
                    <div class="form-group">
                      <label>Emel</label>
                      <input class="form-control" name="email" type="email"  value="{{ $check->email }}" readonly/>
                    </div>
                    <div class="form-group">
                      <label>Kata Laluan</label>
                      <input class="form-control" name="password" type="password" required/>
                    </div>
                    <div class="form-group">
                      <label>Jawatan</label>
                      <select class="form-control" name="jawatan" required>
                        <option value="" selected disabled>-- Pilih Jawatan --</option>
                        @foreach($jawatan as $jwtn)
                        <option value="{{ $jwtn->id }}" >{{ $jwtn->jawatan }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Bahagian</label>
                      <select class="form-control" name="bahagian" required>
                        <option value="" selected disabled>-- Pilih Bahagian --</option>
                        @foreach($bahagian as $bhgn)
                        <option value="{{ $bhgn->id }}">{{ $bhgn->bahagian }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Unit</label>
                      <input class="form-control" name="unit" type="text" required/>
                    </div>
                    <div class="form-group">
                      <label>No. Telefon</label>
                      <input class="form-control" name="no_tel" type="text" required/>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>
                    </div>
                  </div>
                  <div class="col-md-2">
                  </div>
                </form>
              </div><!-- /.panel-body -->
            </div><!-- /.panel -->
          </div><!-- /.col-lg-10 -->
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
  <script src="assets/vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="assets/vendor/metisMenu/metisMenu.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
