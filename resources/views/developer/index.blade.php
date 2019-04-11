@extends('layouts.developer')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10"><br>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Senarai Pentadbir</strong>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr class='info'>
                  <th>Nama</th>
                  <th>Emel</th>
                  <td align='center'>
                    <button class="btn btn-success btn-circle"  title="Tambah Pentadbir" data-toggle="modal" data-target="#add-admin">
                      <i class='fa fa-plus'></i>
                    </button>
                  </td>
                </tr>
                @foreach($user as $users)
                <tr>
                  <td >{{ $users->nama }}</td>
                  <td >{{ $users->email }}</td>
                  <td align='center' width='15%'>
                      <button type='submit' class='btn btn-warning btn-circle' title='Kemaskini' data-toggle="modal" data-target="#update-admin{{ $users->id }}"><i class='fa fa-pencil'></i></button>
                    &nbsp;
                      <button type='submit' class='btn btn-danger btn-circle' onclick='return checkDelete()' title='Hapus'><i class='fa fa-trash-o'></i></button>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->

<!-- add admin -->
<form name="admin" action="{{ route('user.add') }}" method="post">
  @csrf
  <div class="panel-body">
    <div class="modal fade" id="add-admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Tambah Pentadbir</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Peranan</label>
                  <input class="form-control" name="peranan" type="text" id="peranan" value="Pentadbir" size="60" required="required" readonly/>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" name="nama" type="text" id="nama" size="60" required="required" />
                </div>
                <div class="form-group">
                  <label>Emel</label>
                  <input class="form-control" name="email" type="email" id="email" size="60" required="required" />
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

<!-- update admin -->
@foreach($user as $users)
<form name="admin" action="{{ route('user.update', ['id' => $users->id]) }}" method="post">
  @csrf
  <input type="hidden" name="_method" value="PATCH">
  <div class="panel-body">
    <div class="modal fade" id="update-admin{{ $users->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Kemaskini Pentadbir</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Peranan</label>
                  <input class="form-control" name="peranan" type="text" id="peranan" value="{{ $users->peranan }}" size="60" required="required" readonly/>
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control" name="nama" type="text" id="nama" size="60" required="required" value="{{ $users->nama }}" />
                </div>
                <div class="form-group">
                  <label>Emel</label>
                  <input class="form-control" name="email" type="email" id="email" size="60" required="required" value="{{ $users->email }}"/>
                </div>
                <div class="form-group">
                  <label>Kata Laluan</label>
                  <input class="form-control" name="password" type="password" id="password" />
                  <p class="help-block"><em>Kosongkan jika Kata Laluan tidak ditukar.</em></p>
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
{!! Toastr::message() !!}
@endsection
