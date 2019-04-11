@extends('layouts.master')

@section('css')
<!-- DataTables CSS -->
<link href="{{asset('assets/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="{{asset('assets/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
@endsection

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10"><br>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Senarai Permohonan Pinjaman Aset Sewaan ICT</strong>
          </div>
          <div class="panel-body">
            @if($senarai->isNotEmpty())
            <div class='table-responsive'>
              <table class='table table-bordered' id='dataTables-example'>
                <thead>
                  <tr class='info'>
                    <th>Bil.</th>
                    <th>Rujukan Permohonan</th>
                    <th>Nama Pemohon</th>
                    <th>Bahagian</th>
                    <th>Tarikh Permohonan</th>
                    <th>Status Permohonan</th>
                    <th width='13%'></th>
                  </tr>
                </thead>
                @foreach($senarai as $list)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $list->ref }}</td>
                  <td>{{ $list->nama }}</td>
                  <td>{{ $list->bahagian }}</td>
                  <td>{{ $list->apply_date }}</td>
                  <td><a title="{{ $list->sebab }}">{{ $list->status }}</a></td>
                  <td align='center'>
                    <button class="btn btn-warning btn-circle" title="Arkib" data-toggle="modal" data-target="#arkib"><i class='fa fa-folder-open'></i></button>
                    <a href="{{ route('admin.cetak', ['id' => $list->id]) }}" target="_blank" class="btn btn-info btn-circle" title="Cetak Borang"><i class="fa fa-print"></i></a>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
            @else
            Tiada pinjaman aset ICT setakat ini.
            @endif
          </div><!-- /.panel-body -->
        </div><!-- /.panel header -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
@endsection

@section('modal')
<!-- update arkib -->
@foreach($senarai as $list)
<form name="arkib" action="{{ route('admin.arkibUpdate', ['id' => $list->id]) }}" method="post" role="form">
  @csrf
  <input type="hidden" name="_method" value="PATCH">
  <div class="panel-body">
    <div class="modal fade" id="arkib" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Arkib Rekod Permohonan</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <center>
                  <i class="fa fa-exclamation-circle" style="font-size:70px; color:#d9534f;"></i><br><br>
                  Rujukan Permohonan : <strong>{{ $list->ref }}</strong><br>
                  Anda pasti untuk arkib rekod permohonan ini?
                </center>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Ya</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
          </div>
        </div>  <!-- /.modal-content -->
      </div>  <!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- .panel-body -->
</form>
@endforeach

@endsection

@section('script')
<!-- DataTables JavaScript -->
<script src="{{asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>

{!! Toastr::message() !!}

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
@endsection
