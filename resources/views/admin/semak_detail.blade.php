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
      <div class="col-lg-12">
        <h3 class="page-header">Maklumat Permohonan Pinjaman Aset Sewaan ICT</h3>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Maklumat Pemohon</strong>
          </div>
          <div class="panel-body">
            <div class="col-lg-6">
              <div class="form-group">
                <label>No. Rujukan Permohonan</label>
                <input class="form-control" name="ref" type="text" id="nama" size="10" readonly value="{{ $result->ref }}" />
              </div>
              <div class="form-group">
                <label>Tarikh Permohonan</label>
                <input class="form-control" name="apply_date" type="text" id="apply_date" value="{{ $result->apply_date }}" size="10" readonly/>
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input class="form-control" name="nama" type="text" id="nama" size="60" readonly value="{{ $result->nama }}" />
              </div>
              <div class="form-group">
                <label>Jawatan</label>
                <input class="form-control" name="jawatan" type="text" id="jawatan" size="60" readonly value="{{ $result->jawatan }}" />
              </div>
              <div class="form-group">
                <label>Bahagian</label>
                <input class="form-control" name="bahagian" type="text" id="bahaian" size="60" readonly value="{{ $result->bahagian}}" />
              </div>
              <div class="form-group">
                <label>Unit</label>
                <input class="form-control" name="unit" type="text" id="unit" size="60" readonly value="{{ $result->unit }}"/>
              </div>
              <div class="form-group">
                <label>No. Telefon</label>
                <input class="form-control" name="notel" type="text" id="notel" size="12" maxlength="12" readonly value="{{ $result->notel }}" />
              </div>
            </div><!-- /.col-lg-6 -->

            <div class="col-lg-6">
              <div class="form-group">
                <label>E-mail</label>
                <input class="form-control" name="email" type="email" id="email" size="60" readonly value="{{ $result->email }}"/>
              </div>
              <div class="form-group">
                <label>Tujuan</label>
                <input class="form-control" name="tujuan" type="tujuan" id="tujuan" size="60" readonly value="{{ $result->tujuan }}"/>
              </div>
              <div class="form-group">
                <label>Masa Pengambilan Aset</label>
                <input class="form-control" name="masa" type="masa" id="masa" size="60" readonly value="{{ $result->masa }}"/>
              </div>
              <div class="form-group">
                <label>Tarikh Peminjaman</label>
                <input class="form-control" name="tarikh_pinjam" type="text" id="tarikh_pinjam" size="10" readonly value="{{ $result->tarikh_pinjam }}"/>
              </div>
              <div class="form-group">
                <label>Dijangka Pulang</label>
                <input class="form-control" name="tarikh_pulang" type="text" id="tarikh_pulang" size="10" readonly value="{{ $result->tarikh_pulang }}"/>
              </div>
              <div class="form-group">
                <label>Lokasi</label>
                <input class="form-control" name="location" type="text" id="location" size="60" readonly value="{{ $result->location }}"/>
              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.panel-body -->
        </div><!-- /.panel header -->
        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Peralatan Yang Diluluskan Untuk Dipinjam</strong>
          </div>
          <div class="panel-body">
            <form role="form" class="form-horizontal" action="{{ route('admin.semakLulus', ['id'=> $result->id]) }}" method="post">
              @csrf
              <div class="form-group">
                <div class="col-sm-3">
                  <label>Komputer Riba</label>
                </div>
                <div class="col-sm-2">
                  <select name="bil_nb" class="form-control">
                    <option value="0" {{ ($result->bil_nb == '0') ? 'selected=selected' : '' }}>0</option>
                    <option value="1" {{ ($result->bil_nb == '1') ? 'selected=selected' : '' }}>1</option>
                    <option value="2" {{ ($result->bil_nb == '2') ? 'selected=selected' : '' }}>2</option>
                    <option value="3" {{ ($result->bil_nb == '3') ? 'selected=selected' : '' }}>3</option>
                    <option value="4" {{ ($result->bil_nb == '4') ? 'selected=selected' : '' }}>4</option>
                    <option value="5" {{ ($result->bil_nb == '5') ? 'selected=selected' : '' }}>5</option>
                    <option value="6" {{ ($result->bil_nb == '6') ? 'selected=selected' : '' }}>6</option>
                    <option value="7" {{ ($result->bil_nb == '7') ? 'selected=selected' : '' }}>7</option>
                  </select>
                </div>
                <div class="col-sm-2">
                  ( Baki : <label>{{ $nb }}</label> )
                </div>
                <div class="col-sm-5">
                  <input class="form-control" name="note_nb" type="text" id="note_nb" size="35" placeholder="Nyatakan jika ada perubahan"/>
                </div>
              </div><hr>
              <div class="form-group">
                <div class="col-sm-3">
                  <label>Projektor LCD</label>
                </div>
                <div class="col-sm-2">
                  <select name="bil_lcd" class="form-control">
                    <option value="0" {{ ($result->bil_lcd == '0') ? 'selected=selected' : '' }}>0</option>
                    <option value="1" {{ ($result->bil_lcd == '1') ? 'selected=selected' : '' }}>1</option>
                    <option value="2" {{ ($result->bil_lcd == '2') ? 'selected=selected' : '' }}>2</option>
                    <option value="3" {{ ($result->bil_lcd == '3') ? 'selected=selected' : '' }}>3</option>
                    <option value="4" {{ ($result->bil_lcd == '4') ? 'selected=selected' : '' }}>4</option>
                    <option value="5" {{ ($result->bil_lcd == '5') ? 'selected=selected' : '' }}>5</option>
                  </select>
                </div>
                <div class="col-sm-2">
                  ( Baki : <label>{{ $lcd }}</label> )
                </div>
                <div class="col-sm-5">
                  <input class="form-control" name="note_lcd" type="text" id="note_lcd" size="35" placeholder="Nyatakan jika ada perubahan"/>
                </div>
              </div><hr>
              <div class="form-group">
                <div class="col-sm-3">
                  <label>Pencetak</label>
                </div>
                <div class="col-sm-2">
                  <select name="bil_print" class="form-control">
                    <option value="0" {{ ($result->bil_print == '0') ? 'selected=selected' : '' }}>0</option>
                    <option value="1" {{ ($result->bil_print == '1') ? 'selected=selected' : '' }}>1</option>
                    <option value="2" {{ ($result->bil_print == '2') ? 'selected=selected' : '' }}>2</option>
                    <option value="3" {{ ($result->bil_print == '3') ? 'selected=selected' : '' }}>3</option>
                    <option value="4" {{ ($result->bil_print == '4') ? 'selected=selected' : '' }}>4</option>
                  </select>
                </div>
                <div class="col-sm-2">
                  ( Baki : <label>{{ $print }}</label> )
                </div>
                <div class="col-sm-5">
                  <input class="form-control" name="note_print" type="text" id="note_print" size="35" placeholder="Nyatakan jika ada perubahan"/>
                </div>
              </div><hr>
              <div class="form-group">
                <div class="col-sm-3">
                  <label>Wireless Presenter</label>
                </div>
                <div class="col-sm-2">
                  <select name="bil_present" class="form-control">
                    <option value="0" {{ ($result->bil_present == '0') ? 'selected=selected' : '' }}>0</option>
                    <option value="1" {{ ($result->bil_present == '1') ? 'selected=selected' : '' }}>1</option>
                    <option value="2" {{ ($result->bil_present == '2') ? 'selected=selected' : '' }}>2</option>
                  </select>
                </div>
                <div class="col-sm-2">
                  ( Baki : <label>{{ $present }}</label> )
                </div>
                <div class="col-sm-5">
                  <input class="form-control" name="note_present" type="text" id="note_present" size="35" placeholder="Nyatakan jika ada perubahan"/>
                </div>
              </div><hr>

            </div><!-- /.panel-body -->
          </div><!-- /.panel header -->
          <div class="panel panel-primary">
            <div class="panel-heading">
              <strong>Keputusan</strong>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table borderless">
                  <tr>
                    <td>
                      <input name="status" type="radio" value="Diluluskan" required="required" onclick="document.getElementById('sebab').disabled = true;"/>&nbsp;&nbsp;Diluluskan<br />
                      <input name="status" type="radio" value="Tidak Diluluskan" onclick="document.getElementById('sebab').disabled = false;"/>&nbsp;&nbsp;Tidak Diluluskan
                      <input class="form-control" name="sebab" type="text" id="sebab" placeholder="Nyatakan sebab jika Tidak Diluluskan" disabled="disabled"/><br />
                      <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" id="submit" value="Kemaskini"/>
                    </td>
                  </tr>
                </table>
              </div><!-- /.table-responsive -->
            </form>
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
