@extends('layouts.master')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10"><br>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Tukar Kata Laluan</strong>
          </div><!-- /.panel-heading -->
          <div class="panel-body">
            <form name="admin" action="" method="post">
              @csrf
              <br>
              <table class="table borderless">
                <tr>
                  <td width="20%" height="20"><strong>Kata Laluan Lama</strong></td>
                  <td width="10"><div align="center"><strong>:</strong></div></td>
                  <td>
                    <input id="oldpassword" type="password" class="form-control{{ $errors->has('oldpassword') ? ' is-invalid' : '' }}" name="oldpassword"  required autofocus>

                    <!-- @if ($errors->has('oldpassword'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('oldpassword') }}</strong>
                    </span>
                    @endif -->
                  </td>
                </tr>
                <tr>
                  <td height="20"><strong>Kata Laluan Baru</strong></td>
                  <td><div align="center"><strong>:</strong></div></td>
                  <td>
                    <input id="newpassword" type="password" class="form-control{{ $errors->has('newpassword') ? ' is-invalid' : '' }}" name="newpassword" required>

                    <!-- @if ($errors->has('newpassword'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('newpassword') }}</strong>
                    </span>
                    @endif -->
                  </td>
                </tr>
                <tr>
                  <td height="20"><strong>Pengesahan Kata Laluan</strong></td>
                  <td><div align="center"><strong>:</strong></div></td>
                  <td>
                    <input id="newpassword_confirmation" type="password" class="form-control{{ $errors->has('newpassword_confirmation') ? ' is-invalid' : '' }}" name="newpassword_confirmation" required>

                    <!-- @if ($errors->has('newpasswordconfirm'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('newpasswordconfirm') }}</strong>
                    </span>
                    @endif -->
                  </td>
                </tr>
                <tr>
                  <td height="40" colspan="4">
                    <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" id="login" value="Kemaskini" />
                  </td>
                </tr>
              </table>
            </form>
          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
      </div>

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
@endsection

@section('script')
  {!! Toastr::message() !!}
@endsection
