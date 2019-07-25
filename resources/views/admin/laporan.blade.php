@extends('layouts.master')

@section('css')
<!-- DataTables CSS -->
<link href="{{asset('assets/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="{{asset('assets/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
@endsection

@section('content')
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12"><br>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Laporan Peminjaman Aset Sewaan ICT</strong>
          </div>
          <div class="panel-body">
            @if($laporan->isNotEmpty())
            <div class='table-responsive'>
              <table class="table table-bordered" id="dataTables-example">
                <thead>
                  <tr class="info">
                    <th>Bil.</th>
                    <th>Tarikh Permohonan</th>
                    <th>Nama Pemohon</th>
                    <th>Bahagian / Cawangan / Unit</th>
                    <th>Emel / No. Telefon</th>
                    <th>Tarikh Penggunaan</th>
                    <th>Masa Pinjaman</th>
                    <th>Lokasi</th>
                    <th>Komputer Riba</th>
                    <th>Projektor LCD</th>
                    <th>Pencetak</th>
                    <th>Wireless Presenter</th>
                  </thead>
                </tr>
                @foreach($laporan as $laporans)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $laporans->apply_date }}</td>
                  <td>{{ $laporans->nama }}</td>
                  <td>{{ $laporans->bahagian }}<br> / {{ $laporans->unit }}</td>
                  <td>{{ $laporans->email }}<br> / {{ $laporans->notel }}</td>
                  <td>{{ $laporans->tarikh_pinjam }} <br>hingga<br> {{ $laporans->tarikh_pulang }}</td>
                  <td>{{ $laporans->masa }}</td>
                  <td>{{ $laporans->location }}</td>
                  <td>
                    @if($laporans->nb1 != '') {{ $laporans->nb1 }}<br> @endif
                    @if($laporans->nb2 != '') {{ $laporans->nb2 }}<br> @endif
                    @if($laporans->nb3 != '') {{ $laporans->nb3 }}<br> @endif
                    @if($laporans->nb4 != '') {{ $laporans->nb4 }}<br> @endif
                    @if($laporans->nb5 != '') {{ $laporans->nb5 }}<br> @endif
                    @if($laporans->nb6 != '') {{ $laporans->nb6 }}<br> @endif
                    @if($laporans->nb7 != '') {{ $laporans->nb7 }} @endif
                  </td>
                  <td>
                    @if($laporans->lcd1 != '') {{ $laporans->lcd1 }}<br> @endif
                    @if($laporans->lcd2 != '') {{ $laporans->lcd2 }}<br> @endif
                    @if($laporans->lcd3 != '') {{ $laporans->lcd3 }}<br> @endif
                    @if($laporans->lcd4 != '') {{ $laporans->lcd4 }}<br> @endif
                    @if($laporans->lcd5 != '') {{ $laporans->lcd5 }} @endif
                  </td>
                  <td>
                    @if($laporans->print1 != '') {{ $laporans->print1 }}<br> @endif
                    @if($laporans->print2 != '') {{ $laporans->print2 }}<br> @endif
                    @if($laporans->print3 != '') {{ $laporans->print3 }}<br> @endif
                    @if($laporans->print4 != '') {{ $laporans->print4 }} @endif
                  </td>
                  <td>
                    @if($laporans->present1 != '') {{ $laporans->present1 }}<br> @endif
                    @if($laporans->present2 != '') {{ $laporans->present2 }} @endif
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
@endsection

@section('script')
<!-- DataTables JavaScript -->
<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>

<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

{!! Toastr::message() !!}

<script>
$(document).ready(function() {
	$('#dataTables-example').DataTable({
		// "responsive": false,
		// "paging": true,
		"ordering": false,
		// "info": true,
		"dom": 'Bfrtip',
    "buttons": ['excel']
	});
});
</script>
@endsection
