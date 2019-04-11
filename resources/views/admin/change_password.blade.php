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

  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

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
          <li><a href="#"><i class="fa fa-home fa-fw"></i> <strong>Laman Utama</strong></a></li>
          <li>&nbsp;</li>
          <li><a href="#">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Utama</a></li>
        </ul>
      </div>
      <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
  </nav>

  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10"><br>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <strong>Tukar Kata Laluan</strong>
            </div><!-- /.panel-heading -->
            <div class="panel-body">
              <form name="admin" action="" method="post">
                @csrf
                <br>
                <table class="table borderless">
                  <tr>
                    <td width="20%" height="20"><strong>Kata Laluan Lama</strong></td>
                    <td width="10"><div align="center"><strong>:</strong></div></td>
                    <td>
                      <input id="oldpassword" type="password" class="form-control{{ $errors->has('oldpassword') ? ' is-invalid' : '' }}" name="oldpassword"  required autofocus>

                      <!-- @if ($errors->has('oldpassword'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('oldpassword') }}</strong>
                      </span>
                      @endif -->
                    </td>
                  </tr>
                  <tr>
                    <td height="20"><strong>Kata Laluan Baru</strong></td>
                    <td><div align="center"><strong>:</strong></div></td>
                    <td>
                      <input id="newpassword" type="password" class="form-control{{ $errors->has('newpassword') ? ' is-invalid' : '' }}" name="newpassword" required>

                      <!-- @if ($errors->has('newpassword'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('newpassword') }}</strong>
                      </span>
                      @endif -->
                    </td>
                  </tr>
                  <tr>
                    <td height="20"><strong>Pengesahan Kata Laluan</strong></td>
                    <td><div align="center"><strong>:</strong></div></td>
                    <td>
                      <input id="newpassword_confirmation" type="password" class="form-control{{ $errors->has('newpassword_confirmation') ? ' is-invalid' : '' }}" name="newpassword_confirmation" required>

                      <!-- @if ($errors->has('newpasswordconfirm'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('newpasswordconfirm') }}</strong>
                      </span>
                      @endif -->
                    </td>
                  </tr>
                  <tr>
                    <td height="40" colspan="4">
                      <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" id="login" value="Kemaskini" />
                    </td>
                  </tr>
                </table>
              </form>
            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
        </div>

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
</div><!-- / .footer -->

<!-- jQuery -->
<script src="assets/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="assets/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="assets/dist/js/sb-admin-2.js"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

{!! Toastr::message() !!}

</body>

</html>
