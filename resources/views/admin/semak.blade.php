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
            @if($semak->isNotEmpty())
            <div class='table-responsive'>
              <table class='table table-bordered' id='dataTables-example'>
                <thead>
                  <tr class='info'>
                    <th>Bil.</th>
                    <th>Nama Pemohon</th>
                    <th>Bahagian</th>
                    <th>Tarikh Permohonan</th>
                    <th>&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($semak as $list)
                  <tr>
                    <td>{{ $bil++ }}</td>
                    <td>{{ $list->nama }}</td>
                    <td>{{ $list->bahagian }}</td>
                    <td>{{ $list->apply_date }}</td>
                    <td align='center'><a href="{{ route('admin.semakDetail', ['id' => $list->id]) }}" class='btn btn-primary btn-circle' title='Tindakan'><i class='fa fa-edit'></i></a></td>
                  </tr>
                  @endforeach
                </tbody>
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

@endsection

@section('script')
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

{!! Toastr::message() !!}
@endsection
