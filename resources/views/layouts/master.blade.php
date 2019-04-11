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

  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

  @yield('css')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

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
    <ul class="nav navbar-top-links navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-user fa-fw"></i> <em>{{ Auth::User()->nama}}</em> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li style="text-align:right;">
            <a href="#update-admin" data-toggle="modal"><i class="fa fa-info-circle fa-fw"></i> Profil Pentadbir</a>
          </li>
          <li class="divider"></li>
          <li style="text-align:right;"><a href="{{ route('logout') }}" onclick="event.preventDefault();   document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
        <!-- /.dropdown-user -->
      </li>
      <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
          <li><a href="{{ route('home') }}"><i class="fa fa-home fa-fw"></i> <strong>Laman Utama</strong></a></li>
          <li>&nbsp;</li>
          <li><a><i class="fa fa-user fa-fw"></i> <strong>Pentadbir :</strong></a></li>
          <li><a href="{{ route('admin.semak') }}">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Semak Permohonan</a></li>
          <li><a href="{{ route('admin.senarai') }}">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Senarai Permohonan</a></li>
          <li><a href="{{ route('admin.pergerakan') }}">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Pergerakan Aset</a></li>
          <li><a href="{{ route('admin.laporan') }}">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Laporan</a></li>
          <li>&nbsp;</li>
          <li><a><i class="fa fa-th-list fa-fw"></i> <strong>Maklumat Aset :</strong></a></li>
          <li><a href="{{ route('aset.pulang') }}">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Pemulangan Aset</a></li>
          <li><a href="{{ route('aset.senarai') }}">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Senarai Aset</a></li>
          <li>&nbsp;</li>
          <li><a><i class="fa fa-archive fa-fw"></i> <strong>Arkib :</strong></a></li>
          <li><a href="{{ route('admin.arkib') }}">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Senarai Arkib</a></li>
          <li>&nbsp;</li>
          <li><a><i class="fa fa-download fa-fw"></i> <strong>Muat Turun :</strong></a></li>
          <li><a href="#" target="_blank">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Manual Pengguna</a></li>
        </ul>
      </div>
      <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
  </nav>

  @yield('content')

  <form name="admin" action="{{ route('profile.update', ['id' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="panel-body">
      <div class="modal fade" id="update-admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
          <div class="modal-content panel-primary">
            <div class="modal-header panel-heading">
              <h4 class="modal-title" id="myModalLabel">Kemaskini Profil</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label>Peranan</label>
                    <input class="form-control" name="peranan" type="text" id="peranan" value="{{ $user->peranan }}" size="60" required="required" readonly/>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" type="text" id="nama" size="60" required="required" value="{{ $user->nama }}" />
                  </div>
                  <div class="form-group">
                    <label>Emel</label>
                    <input class="form-control" name="email" type="email" id="email" size="60" required="required" value="{{ $user->email }}"/>
                  </div>
                  <div class="form-group">
                    <label>Kata Laluan</label>
                    <input class="form-control" name="password" type="password" id="password" />
                    <p class="help-block"><em>Kosongkan jika Kata Laluan tidak ditukar.</em></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Kemaskini</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
          </div>  <!-- /.modal-content -->
        </div>  <!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div><!-- .panel-body -->
  </form>

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
</div><!-- / .footer -->

@yield('modal')

<!-- jQuery -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('assets/vendor/metisMenu/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('assets/dist/js/sb-admin-2.js')}}"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

@yield('script')

</body>

</html>
