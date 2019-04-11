@extends('layouts.master')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10"><br>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Ringkasan Permohonan Pinjaman Aset Sewaan ICT</strong>
          </div>
          <div class="panel-body">
            <div class="col-lg-3">
              <div class="panel panel-green">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-laptop fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">{{ $baru }}</div>
                      <div>Permohonan<br>Baru</div>
                    </div>
                  </div>
                </div>
                <a href="{{ route('admin.semak') }}">
                  <div class="panel-footer">
                    <span class="pull-left">Maklumat Lanjut</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="panel panel-red">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-external-link fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">{{ $lulus }}</div>
                      <div>Belum<br>Dipulangkan</div>
                    </div>
                  </div>
                </div>
                <a href="{{ route('admin.pergerakan') }}">
                  <div class="panel-footer">
                    <span class="pull-left">Maklumat Lanjut</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="panel panel-yellow">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-check fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">{{ $proses }}</div>
                      <div>Telah<br>Diproses</div>
                    </div>
                  </div>
                </div>
                <a href="{{ route('admin.senarai') }}">
                  <div class="panel-footer">
                    <span class="pull-left">Maklumat Lanjut</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-archive fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">{{ $arkib }}</div>
                      <div>&nbsp;<br>Arkib</div>
                    </div>
                  </div>
                </div>
                <a href="{{ route('admin.arkib') }}">
                  <div class="panel-footer">
                    <span class="pull-left">Maklumat Lanjut</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Kedudukan Semasa Aset Sewaan ICT</strong>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr class="info">
                  <td width="200" align="center"><strong>Jenis Aset</strong></td>
                  <td width="100" align="center"><strong>Sedia Ada<br />(Unit)</strong></td>
                  <td width="100" align="center"><strong>Dipinjam<br />(Unit)</strong></td>
                  <td width="100" align="center"><strong>Baki Semasa<br />(Unit)</strong></td>
                </tr>
                <tr>
                  <td width="200">Komputer Riba</td>
                  <td width="100" align="center"><b> {{ $nb_total }} </b></td>
                  <td width="100" align="center"><b> {{ $nb_tiada }} </b></td>
                  <td width="100" align="center"><b> {{ $nb_baki }} </b></td>
                </tr>
                <tr>
                  <td width="200">Projektor LCD</td>
                  <td width="100" align="center"><b> {{ $lcd_total }} </b></td>
                  <td width="100" align="center"><b> {{ $lcd_tiada }} </b></td>
                  <td width="100" align="center"><b> {{ $lcd_baki }} </b></td>
                </tr>
                <tr>
                  <td width="200">Pencetak</td>
                  <td width="100" align="center"><b> {{ $print_total }} </b></td>
                  <td width="100" align="center"><b> {{ $print_tiada }} </b></td>
                  <td width="100" align="center"><b> {{ $print_baki }} </b></td>
                </tr>
                <tr>
                  <td width="200">Wireless Presenter</td>
                  <td width="100" align="center"><b> {{ $present_total }} </b></td>
                  <td width="100" align="center"><b> {{ $present_tiada }} </b></td>
                  <td width="100" align="center"><b> {{ $present_baki }} </b></td>
                </tr>
              </table>
            </div>
          </div>
          <!-- /.panel-body -->
        </div>

        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Pemulangan Tidak Lengkap</strong>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr class="info">
                  <td colspan="2"><strong>Komputer Riba</strong></td>
                </tr>
                @if($pulang_nb->isNotEmpty())
                @foreach($pulang_nb as $nb)
                <tr>
                  <td width="150">{{ $nb->item }}</td>
                  <td>{{ $nb->catatan }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="2">Tiada maklumat.</td>
                </tr>
                @endif
              </table>

              <table class="table table-bordered">
                <tr class="info">
                  <td colspan="2"><strong>Projektor LCD</strong></td>
                </tr>
                @if($pulang_lcd->isNotEmpty())
                @foreach($pulang_lcd as $lcd)
                <tr>
                  <td width="150">{{ $lcd->item }}</td>
                  <td>{{ $lcd->catatan }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="2">Tiada maklumat.</td>
                </tr>
                @endif
              </table>

              <table class="table table-bordered">
                <tr class="info">
                  <td colspan="2"><strong>Pencetak</strong></td>
                </tr>
                @if($pulang_print->isNotEmpty())
                @foreach($pulang_print as $print)
                <tr>
                  <td width="150">{{ $print->item }}</td>
                  <td>{{ $print->catatan }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="2">Tiada maklumat.</td>
                </tr>
                @endif
              </table>

              <table class="table table-bordered">
                <tr class="info">
                  <td colspan="2"><strong>Wireless Presenter</strong></td>
                </tr>
                @if($pulang_present->isNotEmpty())
                @foreach($pulang_present as $present)
                <tr>
                  <td width="150">{{ $present->item }}</td>
                  <td>{{ $present->catatan }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="2">Tiada maklumat.</td>
                </tr>
                @endif
              </table>

            </div>
          </div>
          <!-- /.panel-body -->
        </div>

      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')
{!! Toastr::message() !!}
@endsection
