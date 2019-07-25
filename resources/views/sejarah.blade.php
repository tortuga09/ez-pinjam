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

  <!-- DataTables CSS -->
  <link href="{{asset('assets/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

  <!-- DataTables Responsive CSS -->
  <link href="{{asset('assets/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">

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
    <ul class="nav navbar-top-links navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="fa fa-user fa-fw"></i> <em>{{ Auth::User()->nama}}</em> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li style="text-align:right;">
            <a href="#update-admin" data-toggle="modal"><i class="fa fa-info-circle fa-fw"></i> Profil</a>
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
          @if(Auth::user()->peranan == 'Pentadbir')
          <li><a href="{{ route('home') }}"><i class="fa fa-home fa-fw"></i> <strong>Laman Utama</strong></a></li>
          @elseif(Auth::user()->peranan == 'Pengguna')
          <li><a href="{{ route('user.utama') }}"><i class="fa fa-home fa-fw"></i> <strong>Laman Utama</strong></a></li>
          @endif
          <li>&nbsp;</li>
          <li><a><i class="fa fa-user fa-fw"></i> <strong>Pengguna :</strong></a></li>
          <li><a href="{{ route('permohonan') }}">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Permohonan</a></li>
          <li><a href="{{ route('sejarah') }}">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Sejarah Permohonan</a></li>
          <li>&nbsp;</li>
          @if(Auth::user()->peranan == 'Pentadbir')
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
          @endif
          <li><a><i class="fa fa-download fa-fw"></i> <strong>Muat Turun :</strong></a></li>
          <li><a href="#" target="_blank">&nbsp;&nbsp;<i class="fa fa-angle-double-right fa-fw"></i> Manual Pengguna</a></li>
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
        <div class="col-lg-12"><br>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <strong>Senarai Permohonan Pinjaman Aset Sewaan ICT</strong>
            </div>
            <div class="panel-body">
              @if($semak->isNotEmpty())
              <div class='table-responsive'>
                <table class='table table-bordered' id='dataTables-example'>
                  <thead>
                    <tr class='info'>
                      <th>Bil.</th>
                      <th>Rujukan</th>
                      <th>Tarikh Permohonan</th>
                      <th>Tujuan</th>
                      <th>Status</th>
                      <th>Maklumat</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($semak as $list)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $list->ref }}</td>
                      <td>{{ $list->apply_date }}</td>
                      <td>{{ $list->tujuan }}</td>
                      <td><a title="{{ $list->sebab }}">{{ $list->status }}</a></td>
                      <td>
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#info-{{ $list->id }}" title="Maklumat Permohonan"><i class="fa fa-info-circle"></i></button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              @else
                Maklumat tidak ditemui.
              @endif
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

<form name="admin" action="{{ route('profile.update', ['id' => Auth::user()->id]) }}" method="post">
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
                  <input class="form-control" name="peranan" type="text" id="peranan" value="{{ Auth::user()->peranan }}" size="60" required="required" readonly/>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" name="nama" type="text" id="nama" size="60" required="required" value="{{ Auth::user()->nama }}" />
                </div>
                <div class="form-group">
                  <label>Emel</label>
                  <input class="form-control" name="email" type="email" id="email" size="60" required="required" value="{{ Auth::user()->email }}"/>
                </div>
                <div class="form-group">
                  <label>Kata Laluan</label>
                  <input class="form-control" name="password" type="password" id="password" />
                  <p class="help-block"><em>Kosongkan jika Kata Laluan tidak ditukar.</em></p>
                </div>
                <div class="form-group">
                  <label>Jawatan</label>
                  <select class="form-control" name="jawatan" required>
                    <option value="" selected disabled>-- Pilih Jawatan --</option>
                    @foreach($jawatan as $jwtn)
                    <option value="{{ $jwtn->id }}" {{ (Auth::user()->jawatan == $jwtn->id) ? 'selected' : '' }}>{{ $jwtn->jawatan }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Bahagian</label>
                  <select class="form-control" name="bahagian" required>
                    <option value="" selected disabled>-- Pilih Bahagian --</option>
                    @foreach($bahagian as $bhgn)
                    <option value="{{ $bhgn->id }}" {{ (Auth::user()->bahagian == $bhgn->id) ? 'selected' : '' }}>{{ $bhgn->bahagian }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Unit</label>
                  <input class="form-control" name="unit" type="text" value="{{ Auth::user()->unit }}"/>
                </div>
                <div class="form-group">
                  <label>No. Telefon</label>
                  <input class="form-control" name="no_tel" type="text" value="{{ Auth::user()->no_tel }}"/>
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

<!-- info modal -->
@foreach($semak as $list)
<div class="panel-body">
  <div class="modal fade" id="info-{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content panel-primary">
        <div class="modal-header panel-heading">
          <h4 class="modal-title" id="myModalLabel">Maklumat Permohonan</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">

              <div class="col-md-5">
                <label>Masa Pengambilan Aset</label>
              </div>
              <div class="col-md-7">
                <input class="col-md-6 form-control" value="{{ $list->masa }}" readonly>
              </div>
              <br><br>
              <div class="col-md-5">
                <label>Tarikh Peminjaman</label>
              </div>
              <div class="col-md-7">
                <input class="col-md-6 form-control" value="{{ $list->tarikh_pinjam }}" readonly>
              </div>
              <br><br>
              <div class="col-md-5">
                <label>Dijangka Pulang</label>
              </div>
              <div class="col-md-7">
                <input class="col-md-6 form-control" value="{{ $list->tarikh_pulang }}" readonly>
              </div>
              <br><br>
              <div class="col-md-5">
                <label>Lokasi</label>
              </div>
              <div class="col-md-7">
                <input class="col-md-6 form-control" value="{{ $list->location }}" readonly>
              </div>
              <br><br>
              <div class="col-md-5">
                <label>Komputer Riba</label>
              </div>
              <div class="col-md-7">
                <input class="col-md-6 form-control" value="{{ $list->bil_nb }}" readonly>
              </div>
              <br><br>
              <div class="col-md-5">
                <label>Projektor LCD</label>
              </div>
              <div class="col-md-7">
                <input class="col-md-6 form-control" value="{{ $list->bil_lcd }}" readonly>
              </div>
              <br><br>
              <div class="col-md-5">
                <label>Pencetak</label>
              </div>
              <div class="col-md-7">
                <input class="col-md-6 form-control" value="{{ $list->bil_print }}" readonly>
              </div>
              <br><br>
              <div class="col-md-5">
                <label>Wireless Presenter</label>
              </div>
              <div class="col-md-7">
                <input class="col-md-6 form-control" value="{{ $list->bil_present }}" readonly>
              </div>
              <br><br>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>  <!-- /.modal-content -->
    </div>  <!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div><!-- .panel-body -->
@endforeach

<!-- jQuery -->
<script src="assets/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="assets/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="assets/dist/js/sb-admin-2.js"></script>

<!--- Include Date & Date Range Picker -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- DataTables JavaScript -->
<script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>

<script>
		$(document).ready(function() {
			$('#dataTables-example').DataTable({
				"responsive": true,
				"paging": true,
				"ordering": false,
				"info": true
			});
		});
	</script>

</body>

</html>
