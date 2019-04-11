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
            <strong>Pemulangan Aset Sewaan ICT</strong>
          </div>
          <div class="panel-body">
            @if($senarai->isNotEmpty())
            <div class='table-responsive'>
              <table class='table table-bordered' id='dataTables-example'>
                <thead>
                  <tr class='info'>
                    <th>Bil.</th>
                    <th>Nama Pemohon</th>
                    <th>Bahagian</th>
                    <th>Tarikh Permohonan</th>
                    <th>Pemulangan</th>
                  </tr>
                </thead>
                @foreach($senarai as $list)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $list->nama }}</td>
                  <td>{{ $list->bahagian }}</td>
                  <td>{{ $list->apply_date }}</td>
                  <td align="center">
                    <a href="{{ route ('aset.pulangAset', ['id' => $list->id]) }}" class="btn btn-warning btn-circle"><i class="fa fa-share"></i></a>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
            @else
              Tiada permohonan yang belum diambil tindakan.
            @endif

          </div><!-- /.panel-body -->
        </div><!-- /.panel header -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->

</div><!-- /#wrapper -->
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
