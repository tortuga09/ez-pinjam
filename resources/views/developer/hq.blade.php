@extends('layouts.developer')

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
            <strong>Senarai Pegawai Ibu Pejabat</strong>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTables-example">
                <thead>
                  <tr class='info'>
                    <th>Nama</th>
                    <th>No. Kad Pengenalan</th>
                    <th>Emel</th>
                    <th>Status</th>
                    <td align='center'>
                      <button class="btn btn-success btn-circle"  title="Tambah Pentadbir" data-toggle="modal" data-target="#add-admin">
                        <i class='fa fa-plus'></i>
                      </button>
                    </td>
                  </tr>
                </thead>
                <tbody>
                  @foreach($hq as $hqs)
                  <tr>
                    <td >{{ $hqs->nama }}</td>
                    <td >{{ $hqs->no_ic }}</td>
                    <td >{{ $hqs->email }}</td>
                    <td {{ ($hqs->status == 'Tidak Aktif') ? 'style=color:red;' : '' }}>{{ $hqs->status }}</td>
                    <td align='center' width='15%'>
                        <button type='submit' class='btn btn-warning btn-circle' title='Kemaskini' data-toggle="modal" data-target="#update-admin{{ $hqs->id }}"><i class='fa fa-pencil'></i></button>
                      &nbsp;
                        <button type='submit' class='btn btn-danger btn-circle' title='Hapus'><i class='fa fa-trash-o'></i></button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->

<!-- add admin -->
<form name="admin" action="{{ route('pegawai.add') }}" method="post">
  @csrf
  <div class="panel-body">
    <div class="modal fade" id="add-admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Tambah Pengguna</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" name="nama" type="text" id="nama" size="60" required="required" />
                </div>
                <div class="form-group">
                  <label>No. Kad Pengenalan</label>
                  <input class="form-control" name="no_ic" type="text" id="no_ic" maxlength="12" required="required" />
                </div>
                <div class="form-group">
                  <label>Emel</label>
                  <input class="form-control" name="email" type="email" id="email" required="required" />
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Tambah</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
        </div>  <!-- /.modal-content -->
      </div>  <!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- .panel-body -->
</form>

<!-- update user -->
@foreach($hq as $hqs)
<form name="admin" action="{{ route('pegawai.update', ['id' => $hqs->id]) }}" method="post">
  @csrf
  <input type="hidden" name="_method" value="PATCH">
  <div class="panel-body">
    <div class="modal fade" id="update-admin{{ $hqs->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Kemaskini Pengguna</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" name="nama" type="text" id="nama"  required="required" value="{{ $hqs->nama }}" />
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" name="no_ic" type="text" id="nama"  required="required" value="{{ $hqs->no_ic }}" />
                </div>
                <div class="form-group">
                  <label>Emel</label>
                  <input class="form-control" name="email" type="email" id="email" size="60" required="required" value="{{ $hqs->email }}"/>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" required>
                    <option value="Aktif" {{ ($hqs->status == 'Aktif') ? 'selected' : ''}}>Aktif</option>
                    <option value="Tidak Aktif" {{ ($hqs->status == 'Tidak Aktif') ? 'selected' : ''}}>Tidak Aktif</option>
                  </select>
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
@endforeach

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
