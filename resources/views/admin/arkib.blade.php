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
            <strong>Senarai Arkib</strong>
          </div>
          <div class="panel-body">
            @if($senarai->isNotEmpty())
            <div class='table-responsive'>
              <table class='table table-bordered' id='dataTables-example'>
                <thead>
                  <tr class='info'>
                    <th width="">Bil.</th>
                    <th width="">Rujukan Permohonan</th>
    								<th width="">Nama Pemohon</th>
    								<th width="">Bahagian</th>
    								<th width="">Tarikh Permohonan</th>
    								<th width=""></th>
                  </tr>
                </thead>
                @foreach($senarai as $list)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $list->ref }}</td>
                  <td>{{ $list->nama }}</td>
                  <td>{{ $list->bahagian }}</td>
                  <td>{{ $list->tarikh_pinjam }}</td>
                  <td align="center">
                    <button type="button" class="btn btn-primary btn-circle" title="Maklumat Lengkap"><i class="fa fa-th-list"></i></button>
                    <button type="button" class="btn btn-primary btn-circle" title="Cetak Borang"><i class="fa fa-print"></i></button>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
            @else
              Tiada permohonan disenarai arkib.
            @endif
          </div><!-- /.panel-body -->
        </div><!-- /.panel header -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
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
