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
            <strong>Pergerakan Aset Sewaan ICT</strong>
          </div>
          <div class="panel-body">
            @if($senarai->isNotEmpty())
            <div class='table-responsive'>
              <table class='table table-bordered' id='dataTables-example'>
                <thead>
                  <tr class='info'>
                    <th width="">Bil.</th>
                    <th width="">Pengguna</th>
    								<th width="">Bahagian</th>
    								<th width="">Aset</th>
    								<th width="">Tarikh</th>
    								<th width="">Lokasi</th>
                    <th></th>
                  </tr>
                </thead>
                @foreach($senarai as $list)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $list->nama }}</td>
                  <td>{{ $list->bahagian }}<br>Tel : {{ $list->notel }}</td>
                  <td>
                    <strong>NB :</strong> {{ $list->nb1 }} {{ $list->nb2 }} {{ $list->nb3 }} {{ $list->nb4 }} {{ $list->nb5 }} {{ $list->nb6 }} {{ $list->nb7 }}<br>
                    <strong>LCD :</strong> {{ $list->lcd1 }} {{ $list->lcd2 }} {{ $list->lcd3 }} {{ $list->lcd4 }} {{ $list->lcd5 }}<br>
                    <strong>PRN :</strong> {{ $list->print1 }} {{ $list->print2 }} {{ $list->print3 }} {{ $list->print4 }}<br>
                    <strong>WLS :</strong> {{ $list->present1 }} {{ $list->present2 }}
                  </td>
                  <td>{{ $list->tarikh_pinjam }}<br>hingga<br>{{$list->tarikh_pulang}}</td>
                  <td>{{ $list->location }}</td>
                  <td align="center">
                    <a href="{{ route ('aset.pulangAset', ['id' => $list->id]) }}" class="btn btn-warning btn-circle"><i class="fa fa-share"></i></a>
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
