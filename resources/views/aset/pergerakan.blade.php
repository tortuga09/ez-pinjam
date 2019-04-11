@extends('layouts.master')

@section('css')
@endsection

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10"><br>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Laporan Pergerakan Aset Sewaan ICT ({{ $name }})</strong>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table borderless">
                <tr>
                  <td width="150">ID Item</td>
                  <td>: &nbsp;&nbsp;<strong>{{ $list->nama }}</strong></td>
                </tr>
                <tr>
                  <td width="150">Pemilik</td>
                  <td>: &nbsp;&nbsp;<strong>{{ $list->sykt }}</strong></td>
                </tr>
                <tr>
                  <td width="150">Sewaan / Aset</td>
                  <td>: &nbsp;&nbsp;<strong>{{ $list->title }}</strong></td>
                </tr>
              </table>

              <hr>
              <a href="#" target="_blank"><button class="btn btn-primary" name="select" id="select" type="submit">Cetak Maklumat Lengkap</button></a>
              <br><br>

              <table class="table table-bordered">
                <tr class="info">
                  <th>Bil.</th>
                  <th>Nama Peminjam</th>
                  <th>Tarikh Pinjam</th>
                  <th>Tarikh Pulang</th>
                  <th>Catatan</th>
                </tr>
                @foreach($pergerakan as $gerak)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $gerak->nama }}</td>
                  <td>{{ $gerak->tarikh_pinjam }}</td>
                  <td>{{ $gerak->tarikh_pulang }}</td>
                  <td>{{ $gerak->catatan }}</td>
                </tr>
                @endforeach
              </table>
            </div><!-- /.table-responsive -->
          </div><!-- /.panel-body -->
        </div><!-- /.panel header -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
@endsection

@section('script')
{!! Toastr::message() !!}
@endsection
