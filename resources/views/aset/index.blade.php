@extends('layouts.master')

@section('css')
@endsection

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12"><br>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <strong>Senarai Aset Sewaan ICT</strong>
          </div>
          <div class="panel-body">
            <div class="panel-group" id="accordion">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Komputer Riba</a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr class="info">
                          <th>ID Item</th>
                          <th>Pemilik</th>
                          <th>Sewaan / Aset</th>
                          <td align="center">
                            <button class="btn btn-success btn-circle"  title="Tambah" data-toggle="modal" data-target="#add-nb"><i class='fa fa-plus'></i></button>
                          </td>
                        </tr>
                        @foreach($nb as $list)
                        <tr>
                          <td><a href="{{ route('aset.pergerakan', ['id' => $list->id, 'type' => '1']) }}">{{ $list->nb_nama }}</a></td>
                          <td>{{ $list->nb_sykt }}</td>
                          <td>{{ $list->nb_title }}</td>
                          <td width="15%" align="center">
                            <button class="btn btn-warning btn-circle" title="Kemaskini Item" data-toggle="modal" data-target="#edit-nb{{ $list->id }}"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-circle" title="Hapus Item" data-toggle="modal" data-target="#hapus-nb{{ $list->id }}"><i class="fa fa-trash-o"></i></button>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div> <!-- nb -->

              <div class="panel panel-info">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Projektor LCD</a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr class="info">
                          <th>ID Item</th>
                          <th>Pemilik</th>
                          <th>Sewaan / Aset</th>
                          <td align="center">
                            <button class="btn btn-success btn-circle"  title="Tambah" data-toggle="modal" data-target="#add-lcd"><i class='fa fa-plus'></i></button>
                          </td>
                        </tr>
                        @foreach($lcd as $list)
                        <tr>
                          <td><a href="{{ route('aset.pergerakan', ['id' => $list->id, 'type' => '2']) }}">{{ $list->lcd_nama }}</a></td>
                          <td>{{ $list->lcd_sykt }}</td>
                          <td>{{ $list->lcd_title }}</td>
                          <td width="15%" align="center">
                            <button class="btn btn-warning btn-circle" title="Kemaskini Item" data-toggle="modal" data-target="#edit-lcd{{ $list->id }}"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-circle" title="Hapus Item" data-toggle="modal" data-target="#hapus-lcd{{ $list->id }}"><i class="fa fa-trash-o"></i></button>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div><!-- /. LCD -->

              <div class="panel panel-info">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Pencetak</a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr class="info">
                          <th>ID Item</th>
                          <th>Pemilik</th>
                          <th>Sewaan / Aset</th>
                          <td align="center">
                            <button class="btn btn-success btn-circle"  title="Tambah" data-toggle="modal" data-target="#add-print"><i class='fa fa-plus'></i></button>
                          </td>
                        </tr>
                        @foreach($print as $list)
                        <tr>
                          <td><a href="{{ route('aset.pergerakan', ['id' => $list->id, 'type' => '3']) }}">{{ $list->print_nama }}</a></td>
                          <td>{{ $list->print_sykt }}</td>
                          <td>{{ $list->print_title }}</td>
                          <td width="15%" align="center">
                            <button class="btn btn-warning btn-circle" title="Kemaskini Item" data-toggle="modal" data-target="#edit-print{{ $list->id }}"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-circle" title="Hapus Item" data-toggle="modal" data-target="#hapus-print{{ $list->id }}"><i class="fa fa-trash-o"></i></button>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div><!-- /. PRN -->

              <div class="panel panel-info">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Wireless Presenter</a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr class="info">
                          <th>ID Item</th>
                          <th>Pemilik</th>
                          <th>Sewaan / Aset</th>
                          <td align="center">
                            <button class="btn btn-success btn-circle"  title="Tambah" data-toggle="modal" data-target="#add-present"><i class='fa fa-plus'></i></button>
                          </td>
                        </tr>
                        @foreach($present as $list)
                        <tr>
                          <td><a href="{{ route('aset.pergerakan', ['id' => $list->id, 'type' => '4']) }}">{{ $list->present_nama }}</a></td>
                          <td>{{ $list->present_sykt }}</td>
                          <td>{{ $list->present_title }}</td>
                          <td width="15%" align="center">
                            <button class="btn btn-warning btn-circle" title="Kemaskini Item" data-toggle="modal" data-target="#edit-present{{ $list->id }}"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-circle" title="Hapus Item" data-toggle="modal" data-target="#hapus-present{{ $list->id }}"><i class="fa fa-trash-o"></i></button>
                          </td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div><!-- /. WLS -->
            </div>
          </div><!-- /. panel.body >> Collapsible Accordion -->
        </div><!-- /.panel -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /#page-wrapper -->
@endsection

@section('modal')
<!-- add nb -->
<form name="admin" action="{{ route('aset.tambah') }}" method="post">
  @csrf
  <div class="panel-body">
    <div class="modal fade" id="add-nb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Tambah Aset (Komputer Riba)</h4>
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
                  <input class="form-control" name="nb_nama" type="text" id="nb_nama" size="60" required="required" />
                </div>
                <div class="form-group">
                  <label>Pemilik</label>
                  <input class="form-control" name="nb_sykt" type="text" id="nb_sykt" size="60" required="required" />
                </div>
                <div class="form-group">
                  <label>Sewaan / Aset</label>
                  <select class="form-control" name="nb_title" id="nb_title" required/>
                  <option disabled="disabled" selected="selected">-- Sila Pilih --</option>
                  <option value="Sewaan">Sewaan</option>
                  <option value="Aset">Aset</option>
                </select>
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

<!-- edit nb -->
@foreach($nb as $list)
<form name="admin" action="{{ route('aset.kemaskini', ['id' => $list->id]) }}" method="post">
  @csrf
  <input type="hidden" name="_method" value="PATCH">
  <div class="panel-body">
    <div class="modal fade" id="edit-nb{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Kemaskini Rekod Aset (Komputer Riba)</h4>
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
                  <input class="form-control" name="nb_nama" type="text" id="nb_nama" size="60" required="required" value="{{ $list->nb_nama }}"/>
                </div>
                <div class="form-group">
                  <label>Pemilik</label>
                  <input class="form-control" name="nb_sykt" type="text" id="nb_sykt" size="60" required="required" value="{{ $list->nb_sykt }}"/>
                </div>
                <div class="form-group">
                  <label>Sewaan / Aset</label>
                  <select class="form-control" name="nb_title" id="nb_title" required>
                    <option disabled="disabled" selected="selected">-- Sila Pilih --</option>
                    <option value="Sewaan" {{ ($list->nb_title == 'Sewaan') ? 'selected' : '' }}>Sewaan</option>
                    <option value="Aset" {{ ($list->nb_title == 'Aset') ? 'selected' : '' }}>Aset</option>
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

<!-- delete nb -->
@foreach($nb as $list)
<form name="arkib" action="{{ route('aset.hapus', ['id' => $list->id, 'type' => 1]) }}" method="post" role="form">
  @csrf
  <input type="hidden" name="_method" value="delete">
  <div class="panel-body">
    <div class="modal fade" id="hapus-nb{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Hapus Rekod Aset (Komputer Riba)</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <center>
                  <i class="fa fa-warning" style="font-size:70px; color:#d9534f;"></i><br><br>
                  Item : <strong>{{ $list->nb_nama }}</strong><br>
                  Anda pasti untuk hapus rekod ini?
                </center>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Ya</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
          </div>
        </div>  <!-- /.modal-content -->
      </div>  <!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- .panel-body -->
</form>
@endforeach

<!-- add lcd -->
<form name="admin" action="{{ route('aset.tambah') }}" method="post">
  @csrf
  <div class="panel-body">
    <div class="modal fade" id="add-lcd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Tambah Aset (Projektor LCD)</h4>
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
                  <input class="form-control" name="lcd_nama" type="text" id="lcd_nama" size="60" required="required" />
                </div>
                <div class="form-group">
                  <label>Pemilik</label>
                  <input class="form-control" name="lcd_sykt" type="text" id="lcd_sykt" size="60" required="required" />
                </div>
                <div class="form-group">
                  <label>Sewaan / Aset</label>
                  <select class="form-control" name="lcd_title" id="lcd_title" required>
                    <option disabled="disabled" selected="selected">-- Sila Pilih --</option>
                    <option value="Sewaan">Sewaan</option>
                    <option value="Aset">Aset</option>
                  </select>
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

<!-- edit lcd -->
@foreach($lcd as $list)
<form name="admin" action="{{ route('aset.kemaskini', ['id' => $list->id]) }}" method="post">
  @csrf
  <input type="hidden" name="_method" value="PATCH">
  <div class="panel-body">
    <div class="modal fade" id="edit-lcd{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Kemaskini Rekod Aset (Projektor LCD)</h4>
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
                  <input class="form-control" name="lcd_nama" type="text" id="lcd_nama" size="60" required="required" value="{{ $list->lcd_nama }}"/>
                </div>
                <div class="form-group">
                  <label>Pemilik</label>
                  <input class="form-control" name="lcd_sykt" type="text" id="lcd_sykt" size="60" required="required" value="{{ $list->lcd_sykt }}"/>
                </div>
                <div class="form-group">
                  <label>Sewaan / Aset</label>
                  <select class="form-control" name="lcd_title" id="lcd_title" required>
                    <option disabled="disabled" selected="selected">-- Sila Pilih --</option>
                    <option value="Sewaan" {{ ($list->lcd_title == 'Sewaan') ? 'selected' : '' }}>Sewaan</option>
                    <option value="Aset" {{ ($list->lcd_title == 'Aset') ? 'selected' : '' }}>Aset</option>
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

<!-- delete lcd -->
@foreach($lcd as $list)
<form name="arkib" action="{{ route('aset.hapus', ['id' => $list->id, 'type' => 2]) }}" method="post" role="form">
  @csrf
  <input type="hidden" name="_method" value="delete">
  <div class="panel-body">
    <div class="modal fade" id="hapus-lcd{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Hapus Rekod Aset (Projektor LCD)</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <center>
                  <i class="fa fa-warning" style="font-size:70px; color:#d9534f;"></i><br><br>
                  Item : <strong>{{ $list->lcd_nama }}</strong><br>
                  Anda pasti untuk hapus rekod ini?
                </center>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Ya</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
          </div>
        </div>  <!-- /.modal-content -->
      </div>  <!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- .panel-body -->
</form>
@endforeach

<!-- add print -->
<form name="admin" action="{{ route('aset.tambah') }}" method="post">
  @csrf
  <div class="panel-body">
    <div class="modal fade" id="add-print" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Tambah Aset (Pencetak)</h4>
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
                  <input class="form-control" name="print_nama" type="text" id="print_nama" size="60" required="required" />
                </div>
                <div class="form-group">
                  <label>Pemilik</label>
                  <input class="form-control" name="print_sykt" type="text" id="print_sykt" size="60" required="required" />
                </div>
                <div class="form-group">
                  <label>Sewaan / Aset</label>
                  <select class="form-control" name="print_title" id="print_title" required >
                    <option disabled="disabled" selected="selected">-- Sila Pilih --</option>
                    <option value="Sewaan">Sewaan</option>
                    <option value="Aset">Aset</option>
                  </select>
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

<!-- edit print -->
@foreach($print as $list)
<form name="admin" action="{{ route('aset.kemaskini', ['id' => $list->id]) }}" method="post">
  @csrf
  <input type="hidden" name="_method" value="PATCH">
  <div class="panel-body">
    <div class="modal fade" id="edit-print{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Kemaskini Rekod Aset (Pencetak)</h4>
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
                  <input class="form-control" name="print_nama" type="text" id="print_nama" size="60" required="required" value="{{ $list->print_nama }}"/>
                </div>
                <div class="form-group">
                  <label>Pemilik</label>
                  <input class="form-control" name="print_sykt" type="text" id="print_sykt" size="60" required="required" value="{{ $list->print_sykt }}"/>
                </div>
                <div class="form-group">
                  <label>Sewaan / Aset</label>
                  <select class="form-control" name="print_title" id="print_title" required>
                    <option disabled="disabled" selected="selected">-- Sila Pilih --</option>
                    <option value="Sewaan" {{ ($list->print_title == 'Sewaan') ? 'selected' : '' }}>Sewaan</option>
                    <option value="Aset" {{ ($list->print_title == 'Aset') ? 'selected' : '' }}>Aset</option>
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

<!-- delete prn -->
@foreach($print as $list)
<form name="arkib" action="{{ route('aset.hapus', ['id' => $list->id, 'type' => 3]) }}" method="post" role="form">
  @csrf
  <input type="hidden" name="_method" value="delete">
  <div class="panel-body">
    <div class="modal fade" id="hapus-print{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Hapus Rekod Aset (Pencetak)</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <center>
                  <i class="fa fa-warning" style="font-size:70px; color:#d9534f;"></i><br><br>
                  Item : <strong>{{ $list->print_nama }}</strong><br>
                  Anda pasti untuk hapus rekod ini?
                </center>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Ya</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
          </div>
        </div>  <!-- /.modal-content -->
      </div>  <!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- .panel-body -->
</form>
@endforeach

<!-- add present -->
<form name="admin" action="{{ route('aset.tambah') }}" method="post">
  @csrf
  <div class="panel-body">
    <div class="modal fade" id="add-present" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Tambah Aset (Wireless Presenter)</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Jenis Aset ICT</label>
                  <input class="form-control" name="aset" type="text" id="peranan" value="Wireless Presenter" size="60" required="required" readonly/>
                </div>
                <div class="form-group">
                  <label>ID Item</label>
                  <input class="form-control" name="present_nama" type="text" id="present_nama" size="60" required="required" />
                </div>
                <div class="form-group">
                  <label>Pemilik</label>
                  <input class="form-control" name="present_sykt" type="text" id="present_sykt" size="60" required="required" />
                </div>
                <div class="form-group">
                  <label>Sewaan / Aset</label>
                  <select class="form-control" name="present_title" id="present_title" required >
                    <option disabled="disabled" selected="selected">-- Sila Pilih --</option>
                    <option value="Sewaan">Sewaan</option>
                    <option value="Aset">Aset</option>
                  </select>
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

<!-- edit present -->
@foreach($present as $list)
<form name="admin" action="{{ route('aset.kemaskini', ['id' => $list->id]) }}" method="post">
  @csrf
  <input type="hidden" name="_method" value="PATCH">
  <div class="panel-body">
    <div class="modal fade" id="edit-present{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Kemaskini Rekod Aset (Wireless Presenter)</h4>
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
                  <input class="form-control" name="present_nama" type="text" id="present_nama" size="60" required="required" value="{{ $list->present_nama }}"/>
                </div>
                <div class="form-group">
                  <label>Pemilik</label>
                  <input class="form-control" name="present_sykt" type="text" id="present_sykt" size="60" required="required" value="{{ $list->present_sykt }}"/>
                </div>
                <div class="form-group">
                  <label>Sewaan / Aset</label>
                  <select class="form-control" name="present_title" id="present_title" required>
                    <option disabled="disabled" selected="selected">-- Sila Pilih --</option>
                    <option value="Sewaan" {{ ($list->present_title == 'Sewaan') ? 'selected' : '' }}>Sewaan</option>
                    <option value="Aset" {{ ($list->present_title == 'Aset') ? 'selected' : '' }}>Aset</option>
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

<!-- delete wls -->
@foreach($present as $list)
<form name="arkib" action="{{ route('aset.hapus', ['id' => $list->id, 'type' => 4]) }}" method="post" role="form">
  @csrf
  <input type="hidden" name="_method" value="delete">
  <div class="panel-body">
    <div class="modal fade" id="hapus-present{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content panel-primary">
          <div class="modal-header panel-heading">
            <h4 class="modal-title" id="myModalLabel">Hapus Rekod Aset (Wireless Presenter)</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                <center>
                  <i class="fa fa-warning" style="font-size:70px; color:#d9534f;"></i><br><br>
                  Item : <strong>{{ $list->present_nama }}</strong><br>
                  Anda pasti untuk hapus rekod ini?
                </center>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Ya</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
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
