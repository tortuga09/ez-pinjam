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
            <strong>Pilihan Aset Sewaan Untuk Pinjaman</strong>
          </div>
          <div class="panel-body">
            <form name="admin" action="{{ route('admin.agihanUpdate', ['id' => $id]) }}" method="post">
              @csrf
              <div class="table-responsive">
                <table class="table borderless">
                  @if($bil_nb != '')
                  <tr>
                    <td width="25%"><b>Komputer Riba</b></td>
                    <td width="10%" style="font-size:18px;" ><strong>{{ $bil_nb }} unit</strong></td>
                    <td class="form-inline">
                      @for($i=1; $i<=$bil_nb; $i++ )
                      <select class="form-control" name="nb{{$i}}" id="nb{{$i}}">
                        <option selected='selected' disabled='disabled'>--Pilih--</option>
                        @foreach($nb as $aset_nb)
                        <option value="{{ $aset_nb->nb_nama }}">{{ $aset_nb->nb_nama }}</option>
                        @endforeach
                      </select>
                      @endfor

                      @for($i=1+$bil_nb; $i<=7; $i++ )
                      <select class="form-control" name="nb{{$i}}" id="nb{{$i}}" readonly style="display:none;">
                        <option selected='selected' value=""></option>
                      </select>
                      @endfor
                    </td>
                  </tr>
                  @else
                    @for($i=1; $i<=7; $i++ )
                    <select class="form-control" name="nb{{$i}}" id="nb{{$i}}" readonly style="display:none;">
                      <option selected='selected' value=""></option>
                    </select>
                    @endfor
                  @endif

                  @if($bil_lcd != '')
                  <tr>
                    <td width="25%"><b>Projektor LCD</b></td>
                    <td width="10%" style="font-size:18px;" ><strong>{{ $bil_lcd }} unit</strong></td>
                    <td class="form-inline">
                      @for($i=1; $i<=$bil_lcd; $i++ )
                      <select class="form-control" name="lcd{{$i}}" id="lcd{{$i}}">
                        <option selected='selected' disabled='disabled'>--Pilih--</option>
                        @foreach($lcd as $aset_lcd)
                        <option value="{{ $aset_lcd->lcd_nama }}">{{ $aset_lcd->lcd_nama }}</option>
                        @endforeach
                      </select>
                      @endfor

                      @for($i=1+$bil_lcd; $i<=5; $i++ )
                      <select class="form-control" name="lcd{{$i}}" id="lcd{{$i}}" readonly style="display:none;">
                        <option selected='selected' value=""></option>
                      </select>
                      @endfor
                    </td>
                  </tr>
                  @else
                    @for($i=1; $i<=5; $i++ )
                    <select class="form-control" name="lcd{{$i}}" id="lcd{{$i}}" readonly style="display:none;">
                      <option selected='selected' value=""></option>
                    </select>
                    @endfor
                  @endif

                  @if($bil_print != '')
                  <tr>
                    <td width="25%"><b>Pencetak</b></td>
                    <td width="10%" style="font-size:18px;" ><strong>{{ $bil_print }} unit</strong></td>
                    <td class="form-inline">
                      @for($i=1; $i<=$bil_print; $i++ )
                      <select class="form-control" name="print{{$i}}" id="print{{$i}}">
                        <option selected='selected' disabled='disabled'>--Pilih--</option>
                        @foreach($print as $aset_print)
                        <option value="{{ $aset_print->print_nama }}">{{ $aset_print->print_nama }}</option>
                        @endforeach
                      </select>
                      @endfor

                      @for($i=1+$bil_print; $i<=4; $i++ )
                      <select class="form-control" name="print{{$i}}" id="print{{$i}}" readonly style="display:none;">
                        <option selected='selected' value=""></option>
                      </select>
                      @endfor
                    </td>
                  </tr>
                  @else
                    @for($i=1; $i<=4; $i++ )
                    <select class="form-control" name="print{{$i}}" id="print{{$i}}" readonly style="display:none;">
                      <option selected='selected' value=""></option>
                    </select>
                    @endfor
                  @endif

                  @if($bil_present != '')
                  <tr>
                    <td width="25%"><b>Wireless Presenter</b></td>
                    <td width="10%" style="font-size:18px;" ><strong>{{ $bil_present }} unit</strong></td>
                    <td class="form-inline">
                      @for($i=1; $i<=$bil_present; $i++ )
                      <select class="form-control" name="present{{$i}}" id="present{{$i}}">
                        <option selected='selected' disabled='disabled'>--Pilih--</option>
                        @foreach($present as $aset_present)
                        <option value="{{ $aset_present->present_nama }}">{{ $aset_present->present_nama }}</option>
                        @endforeach
                      </select>
                      @endfor

                      @for($i=1+$bil_present; $i<=2; $i++ )
                      <select class="form-control" name="present{{$i}}" id="present{{$i}}" readonly style="display:none;">
                        <option selected='selected' value=""></option>
                      </select>
                      @endfor
                    </td>
                  </tr>
                  @else
                    @for($i=1; $i<=2; $i++ )
                    <select class="form-control" name="present{{$i}}" id="present{{$i}}" readonly style="display:none;">
                      <option selected='selected' value=""></option>
                    </select>
                    @endfor
                  @endif
                </table>
              </div>
              <button class="btn btn-primary btn-lg btn-block" type="submit">Pilih</button>
            </form>
          </div><!-- /.panel-body -->
        </div><!-- /.panel-primary -->
      </div><!-- /.col-lg-12 -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /.page-wrapper -->

@endsection

@section('script')
{!! Toastr::message() !!}
@endsection
