@extends('layouts.developer')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10"><br>

        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Laman Utama</strong>
          </div>
          <div class="panel-body">
            <div class="col-lg-4">
              <div class="panel panel-green">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">{{ $admin }}</div>
                      <div>Pentadbir</div>
                    </div>
                  </div>
                </div>
                <a href="{{ route('list.admin') }}">
                  <div class="panel-footer">
                    <span class="pull-left">Maklumat Lanjut</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="panel panel-red">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">{{ $user }}</div>
                      <div>Pengguna</div>
                    </div>
                  </div>
                </div>
                <a href="{{ route('list.user') }}">
                  <div class="panel-footer">
                    <span class="pull-left">Maklumat Lanjut</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-building-o fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">{{ $pegawai }}</div>
                      <div>Pegawai</div>
                    </div>
                  </div>
                </div>
                <a href="{{ route('list.hq') }}">
                  <div class="panel-footer">
                    <span class="pull-left">Maklumat Lanjut</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>



      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->

@endsection

@section('script')
{!! Toastr::message() !!}
@endsection
