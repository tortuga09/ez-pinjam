@extends('layouts.master')

@section('css')
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
            <strong>Pemohon : {{ $pemohon->nama }}<br>Bahagian : {{ $pemohon->bahagian }}<br>Tarikh Pinjam : {{ $pemohon->tarikh_pinjam }}</strong><br><br>
            @if($nb->isNotEmpty())
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr class="info">
                  <td colspan="3"><strong>Komputer Riba</strong></td>
                </tr>
                @foreach($nb as $nbs)
                <tr>
                  <td width="15%">{{ $nbs->item }}</td>
                  <td>Catatan : <strong>{{ $nbs->catatan }}</strong></td>
                  <td width="15%" align="center">
                    <button class="btn btn-warning btn-circle" title="Kemaskini" data-toggle="modal" data-target="#pulang_nb{{ $nbs->id }}"><i class="fa fa-undo"></i></button>
                  </td>
                </tr>
                @endforeach
              </table>
            </div><!-- /.table-responsive -->
            @else
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr class="info">
                  <td colspan="2"><strong>Komputer Riba</strong></td>
                </tr>
                <tr>
                  <td colspan="2">Tiada maklumat.</td>
                </tr>
              </table>
            </div><!-- /.table-responsive -->
            @endif

            @if($lcd->isNotEmpty())
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr class="info">
                  <td colspan="3"><strong>Projektor LCD</strong></td>
                </tr>
                @foreach($lcd as $lcds)
                <tr>
                  <td width="15%">{{ $lcds->item }}</td>
                  <td>Catatan : <strong>{{ $lcds->catatan }}</strong></td>
                  <td width="15%" align="center">
                    <button class="btn btn-warning btn-circle" title="Kemaskini" data-toggle="modal" data-target="#pulang_lcd{{ $lcds->id }}"><i class="fa fa-undo"></i></button>
                  </td>
                </tr>
                @endforeach
              </table>
            </div><!-- /.table-responsive -->
            @else
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr class="info">
                  <td colspan="2"><strong>Projektor LCD</strong></td>
                </tr>
                <tr>
                  <td colspan="2">Tiada maklumat.</td>
                </tr>
              </table>
            </div><!-- /.table-responsive -->
            @endif

            @if($prn->isNotEmpty())
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr class="info">
                  <td colspan="3"><strong>Pencetak</strong></td>
                </tr>
                @foreach($prn as $print)
                <tr>
                  <td width="15%">{{ $print->item }}</td>
                  <td>Catatan : <strong>{{ $print->catatan }}</strong></td>
                  <td width="15%" align="center">
                    <button class="btn btn-warning btn-circle" title="Kemaskini" data-toggle="modal" data-target="#pulang_print{{ $print->id }}"><i class="fa fa-undo"></i></button>
                  </td>
                </tr>
                @endforeach
              </table>
            </div><!-- /.table-responsive -->
            @else
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr class="info">
                  <td colspan="2"><strong>Pencetak</strong></td>
                </tr>
                <tr>
                  <td colspan="2">Tiada maklumat.</td>
                </tr>
              </table>
            </div><!-- /.table-responsive -->
            @endif

            @if($wls->isNotEmpty())
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr class="info">
                  <td colspan="3"><strong>Wireless Presenter</strong></td>
                </tr>
                @foreach($wls as $present)
                <tr>
                  <td width="15%">{{ $present->item }}</td>
                  <td>Catatan : <strong>{{ $present->catatan }}</strong></td>
                  <td width="15%" align="center">
                    <button class="btn btn-warning btn-circle" title="Kemaskini" data-toggle="modal" data-target="#pulang_present{{ $present->id }}"><i class="fa fa-undo"></i></button>
                  </td>
                </tr>
                @endforeach
              </table>
            </div><!-- /.table-responsive -->
            @else
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr class="info">
                  <td colspan="2"><strong>Wireless Presenter</strong></td>
                </tr>
                <tr>
                  <td colspan="2">Tiada maklumat.</td>
                </tr>
              </table>
            </div><!-- /.table-responsive -->
            @endif

            <br />

            <?php
            // if ($result_point->num_rows == 0 && $result_present->num_rows == 0 && $result_prn->num_rows == 0 && $result_lcd->num_rows == 0 && $result_nb->num_rows == 0) {
            //   $sql = "UPDATE pemohon SET status='Dipulangkan', sebab='Dipulangkan' WHERE id_permohonan='$id'";
            //   if (mysqli_query($conn, $sql)) {
            //     echo "<script>alert('Pemulangan Lengkap.')</script>";
            //   }
            //   else {
            //     echo "Error updating record: " . mysqli_error($conn);
            //   }
            //   //header("Location: asetReturn.php");
            // }
            ?>

          </div><!-- /.panel-body -->
        </div><!-- /.panel header -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
@endsection

@section('modal')
<!-- nb -->
@foreach($nb as $nbs)
<form name="admin" action="{{ route('aset.pulangUpdate', ['id' => $id]) }}" method="post">
  @csrf
  <!-- <input type="hidden" name="_method" value="PATCH"> -->
  <div class="panel-body">
    <div class="modal fade" id="pulang_nb{{ $nbs->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Kemaskini Status Pemulangan Aset Sewaan ICT)</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Jenis Aset ICT</label>
                  <input class="form-control" name="aset" type="text" id="aset" value="Komputer Riba" size="60" required="required" readonly/>
                </div>
                <div class="form-group">
                  <label>ID Item</label>
                  <input class="form-control" name="item" type="text" id="item" value="{{ $nbs->item }}" size="60" required="required" readonly/>
                </div>
                <div class="form-group">
                  <label>Status Pemulangan</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status" value="Lengkap" onclick="document.getElementById('catatNB').disabled = true;" required="required">Lengkap
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status" value="Tidak Lengkap" onclick="document.getElementById('catatNB').disabled = false;">Tidak Lengkap
                    </label>
                  </div>
                  <input class="form-control" name="catatNB" type="text" id="catatNB" size="60" disabled="disabled" required="required"><br />
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

<!-- lcd -->
@foreach($lcd as $lcds)
<form name="admin" action="{{ route('aset.pulangUpdate', ['id' => $id]) }}" method="post">
  @csrf
  <!-- <input type="hidden" name="_method" value="PATCH"> -->
  <div class="panel-body">
    <div class="modal fade" id="pulang_lcd{{ $lcds->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Kemaskini Status Pemulangan Aset Sewaan ICT)</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Jenis Aset ICT</label>
                  <input class="form-control" name="aset" type="text" id="aset" value="Projektor LCD" size="60" required="required" readonly/>
                </div>
                <div class="form-group">
                  <label>ID Item</label>
                  <input class="form-control" name="item" type="text" id="item" value="{{ $lcds->item }}" size="60" required="required" readonly/>
                </div>
                <div class="form-group">
                  <label>Status Pemulangan</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status" value="Lengkap" onclick="document.getElementById('catatLCD').disabled = true;" required="required">Lengkap
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status" value="Tidak Lengkap" onclick="document.getElementById('catatLCD').disabled = false;">Tidak Lengkap
                    </label>
                  </div>
                  <input class="form-control" name="catatLCD" type="text" id="catatLCD" size="60" disabled="disabled" required="required"><br />
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

<!-- prn -->
@foreach($prn as $print)
<form name="admin" action="{{ route('aset.pulangUpdate', ['id' => $id]) }}" method="post">
  @csrf
  <!-- <input type="hidden" name="_method" value="PATCH"> -->
  <div class="panel-body">
    <div class="modal fade" id="pulang_print{{ $print->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Kemaskini Status Pemulangan Aset Sewaan ICT)</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Jenis Aset ICT</label>
                  <input class="form-control" name="aset" type="text" id="aset" value="Pencetak" size="60" required="required" readonly/>
                </div>
                <div class="form-group">
                  <label>ID Item</label>
                  <input class="form-control" name="item" type="text" id="item" value="{{ $print->item }}" size="60" required="required" readonly/>
                </div>
                <div class="form-group">
                  <label>Status Pemulangan</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status" value="Lengkap" onclick="document.getElementById('catatPRN').disabled = true;" required="required">Lengkap
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status" value="Tidak Lengkap" onclick="document.getElementById('catatPRN').disabled = false;">Tidak Lengkap
                    </label>
                  </div>
                  <input class="form-control" name="catatPRN" type="text" id="catatPRN" size="60" disabled="disabled" required="required"><br />
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

<!-- wls -->
@foreach($wls as $present)
<form name="admin" action="{{ route('aset.pulangUpdate', ['id' => $id]) }}" method="post">
  @csrf
  <!-- <input type="hidden" name="_method" value="PATCH"> -->
  <div class="panel-body">
    <div class="modal fade" id="pulang_present{{ $present->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Kemaskini Status Pemulangan Aset Sewaan ICT)</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Jenis Aset ICT</label>
                  <input class="form-control" name="aset" type="text" id="aset" value="Wireless Presenter" size="60" required="required" readonly/>
                </div>
                <div class="form-group">
                  <label>ID Item</label>
                  <input class="form-control" name="item" type="text" id="item" value="{{ $present->item }}" size="60" required="required" readonly/>
                </div>
                <div class="form-group">
                  <label>Status Pemulangan</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status" value="Lengkap" onclick="document.getElementById('catatWLS').disabled = true;" required="required">Lengkap
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status" value="Tidak Lengkap" onclick="document.getElementById('catatWLS').disabled = false;">Tidak Lengkap
                    </label>
                  </div>
                  <input class="form-control" name="catatWLS" type="text" id="catatWLS" size="60" disabled="disabled" required="required"><br />
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
