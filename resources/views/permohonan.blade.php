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

<body onload="document.pemohon.ref.focus(); document.pemohon.tujuan.focus()">

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
            <a href="#update-admin" data-toggle="modal"><i class="fa fa-info-circle fa-fw"></i>
              {{ (Auth::user()->peranan == 'Pentadbir') ? 'Profil Pentadbir' : 'Profil' }}</a>
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
        <div class="col-lg-10">
          <h3 class="page-header">Permohonan Pinjaman Aset Sewaan ICT</h3>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <strong>Maklumat Pemohon <em>(semua maklumat wajib diisi)</em></strong>
            </div>
            <script language="javascript" type="text/javascript">
            function randomString() {
              var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
              var string_length = 7;
              var randomstring = '';
              for (var i=0; i<string_length; i++) {
                var rnum = Math.floor(Math.random() * chars.length);
                randomstring += chars.substring(rnum,rnum+1);
              }
              document.pemohon.ref.value = randomstring;
            }
            </script>

            <div class="panel-body">
              <form name="pemohon" action="{{ route('permohonan.store') }}" method="post" onsubmit="return validateForm(this)" role="form">
                @csrf
                <input type="hidden" name="test" value="test">
                <div class="form-group">
                  <input name="ref" type="text" id="ref" size="10" readonly onFocus="randomString();" style="display:inline; border:none; color:#FFFFFF"/>
                </div>
                <div class="col-lg-6">

                  <div class="form-group">
                    <label>Tarikh Permohonan</label>
                    <input class="form-control" name="apply_date" type="text" id="apply_date" value="<?php echo date("d/m/Y"); ?>" size="10" readonly/>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" type="text" id="nama" size="60" required="required" value="{{ Auth::user()->nama }}" readonly/>
                  </div>
                  <div class="form-group">
                    <label>Jawatan</label>
                    <input class="form-control" name="jawatan" type="text" id="jawatan" size="60" required="required" value="{{ Auth::user()->jawatans->jawatan }}" readonly/>
                  </div>
                  <div class="form-group">
                    <label>Bahagian</label>
                    <input class="form-control" name="bahagian" type="text" id="bahagian" size="60" value="{{ Auth::user()->bahagians->bahagian }}" readonly/>
                  </div>
                  <div class="form-group">
                    <label>Unit</label>
                    <input class="form-control" name="unit" type="text" id="unit" size="60" value="{{ Auth::user()->unit }}" readonly/>
                  </div>
                  <div class="form-group">
                    <label>No. Telefon</label>
                    <input class="form-control" name="notel" type="text" id="notel" size="12" maxlength="12" required="required" placeholder="cth : 03-88837000 @ 012-3456789" value="{{ Auth::user()->no_tel }}" readonly/>
                  </div>
                </div> <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" name="email" type="email" id="email" size="60" required="required" value="{{ Auth::user()->email }}" readonly/>
                  </div>
                  <div class="form-group">
                    <label>Tujuan</label>
                    <input class="form-control" name="tujuan" type="tujuan" id="tujuan" size="60" required="required"/>
                  </div>
                  <div class="form-group">
                    <label>Masa Pengambilan Aset</label>
                    <select class="form-control" name="masa" required>
                      <option disabled="disabled" selected="selected">-- Sila Pilih --</option>
                      <option value="08.00 AM">08.00 AM</option>
                      <option value="08.30 AM">08.30 AM</option>
                      <option value="09.00 AM">09.00 AM</option>
                      <option value="09.30 AM">09.30 AM</option>
                      <option value="10.00 AM">10.00 AM</option>
                      <option value="10.30 AM">10.30 AM</option>
                      <option value="11.00 AM">11.00 AM</option>
                      <option value="11.30 AM">11.30 AM</option>
                      <option value="12.00 PM">12.00 PM</option>
                      <option value="12.30 PM">12.30 PM</option>
                      <option value="02.00 PM">02.00 PM</option>
                      <option value="02.30 PM">02.30 PM</option>
                      <option value="03.00 PM">03.00 PM</option>
                      <option value="08.30 PM">03.30 PM</option>
                      <option value="04.00 PM">04.00 PM</option>
                      <option value="04.30 PM">04.30 PM</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tarikh Peminjaman</label>
                    <input class="form-control" name="tarikh_pinjam" type="type" id="tarikh_pinjam" size="10" required="required" readonly/>
                  </div>
                  <div class="form-group">
                    <label>Dijangka Pulang</label>
                    <input class="form-control" name="tarikh_pulang" type="text" id="tarikh_pulang" size="10" required="required" readonly/>
                  </div>
                  <div class="form-group">
                    <script type="text/javascript">
                    function showfield(name){
                      if(name=='Lain-Lain')document.getElementById('div1').innerHTML='<input type="text" name="location" id="location" class="form-control" placeholder="Sila nyatakan..." required/>';
                      else document.getElementById('div1').innerHTML='';
                    }
                    </script>
                    <label>Lokasi</label>
                    <!--<input class="form-control" name="location" type="text" id="location" size="60"/>-->
                    <select class="form-control" name="location" id="location" required onchange="showfield(this.options[this.selectedIndex].value)">
                      <option disabled="disabled" selected="selected">-- Sila Pilih --</option>
                      <option value="Bilik Mesyuarat IKLIN (Aras 7)">Bilik Mesyuarat IKLIN (Aras 7)</option>
                      <option value="Bilik Mesyuarat Perpaduan (Aras 8)">Bilik Mesyuarat Perpaduan (Aras 8)</option>
                      <option value="Bilik Mesyuarat Harmoni (Aras 8)">Bilik Mesyuarat Harmoni (Aras 8)</option>
                      <option value="Bilik Mesyuarat Integrasi (Aras 9)">Bilik Mesyuarat Integrasi (Aras 9)</option>
                      <option value="Bilik Perbincangan Uniti (Aras 9)">Bilik Perbincangan Uniti (Aras 9)</option>
                      <option value="Bilik Mesyuarat Muhibah (Aras 10)">Bilik Mesyuarat Muhibah (Aras 10)</option>
                      <option value="Bilik Mesyuarat Sejahtera (Aras 10)">Bilik Mesyuarat Sejahtera (Aras 10)</option>
                      <option value="Lain-Lain">Lain-Lain</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <div id="div1"></div>
                  </div>
                </div> <!-- /.col-lg-6 -->
              </div>
            </div>
            <div class="panel panel-primary">
              <div class="panel-heading">
                <strong>Peralatan Yang Ingin Dipinjam</strong>
              </div>
              <div class="panel-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Komputer Riba</label>
                    <select class="form-control"  name="bil_nb">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Projektor LCD</label>
                    <select class="form-control" name="bil_lcd">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>
                </div> <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Pencetak</label>
                    <select class="form-control" name="bil_print">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Wireless Presenter</label>
                    <select class="form-control"  name="bil_present">
                      <option value="0">0</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                  </div>
                  <!--<div class="form-group">
                  <label>Laser Pointer</label>
                  <select class="form-control"  name="bil_point">
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>-->

            </div> <!-- /.col-lg-6 -->
          </div>
        </div>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Perakuan</strong>
          </div>
          <div class="panel-body">
            <table class="table borderless">
              <tr>
                <td width="20" valign="top"><input type="checkbox" name="pengakuan" required="required" /></td>
                <td align="justify"><strong>Saya dengan ini mengaku menerima dan akan bertanggungjawab ke atas peralatan ICT yang telah diserahkan kepada saya seperti di atas. Sekiranya peralatan ICT tersebut hilang saya akan membuat laporan polis dan sekiranya berlaku sebarang kerosakan saya akan melapor kepada pihak CTM. Namun, sekiranya berlaku kecuaian saya akan membuat penggantian semula kepada pihak Jabatan. Jabatan juga boleh mengambil tindakan tatatertib ke atas saya atas sebab-sebab yang dinyatakan di atas.<br><br>
                  Pihak CTM berhak mengambil semula peralatan ICT tersebut bagi tujuan penyelenggaraan / pembaikan.</strong></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><br>
                    <input class="btn btn-primary btn-lg btn-block" type="submit" name="button" id="button" value="Hantar Permohonan" onclick="ValidateEmail(document.pemohon.email)" />
                  </td>
                </tr>
              </table>

            </div>
          </div>
        </form>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->

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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
$(document).ready(function(){
  var date_input  =$('input[name="tarikh_pinjam"]'); //our date input has the name "date"
  var container  =$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
    format: 'dd/mm/yyyy',
    container: container,
    todayHighlight: true,
    autoclose: true,
    startDate: '-0d',
  })
})
</script>

<script>
$(document).ready(function(){
  var date_input  =$('input[name="tarikh_pulang"]'); //our date input has the name "date"
  var container  =$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
    format: 'dd/mm/yyyy',
    container: container,
    todayHighlight: true,
    autoclose: true,
    startDate: '-0d',
  })
})
</script>

</body>

</html>
