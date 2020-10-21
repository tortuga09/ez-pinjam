<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Auth;
use DB;
use PDF;
use App\Permohonan;
use App\LookupBahagian;
use App\LookupJawatan;

class AsetController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = Auth::user();

    $nb = DB::table('aset_nb')->get();
    $lcd = DB::table('aset_lcd')->get();
    $print = DB::table('aset_print')->get();
    $present = DB::table('aset_present')->get();

    return view('aset.index', compact('user', 'nb', 'lcd', 'print', 'present', 'bahagian', 'jawatan'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $user = Auth::user();

    if ($request->input('aset') == 'Komputer Riba') {
      DB::table('aset_nb')->insert([
        'nb_nama' => $request->input('nb_nama'),
        'nb_sykt' => $request->input('nb_sykt'),
        'nb_title' => $request->input('nb_title'),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);

      Toastr::success('Rekod Aset Telah Ditambah!', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);
    }

    if ($request->input('aset') == 'Projektor LCD') {
      DB::table('aset_lcd')->insert([
        'lcd_nama' => $request->input('lcd_nama'),
        'lcd_sykt' => $request->input('lcd_sykt'),
        'lcd_title' => $request->input('lcd_title'),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);

      Toastr::success('Rekod Aset Telah Ditambah!', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);
    }

    if ($request->input('aset') == 'Pencetak') {
      DB::table('aset_print')->insert([
        'print_nama' => $request->input('print_nama'),
        'print_sykt' => $request->input('print_sykt'),
        'print_title' => $request->input('print_title'),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);

      Toastr::success('Rekod Aset Telah Ditambah!', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);
    }

    if ($request->input('aset') == 'Wireless Presenter') {
      DB::table('aset_present')->insert([
        'present_nama' => $request->input('present_nama'),
        'present_sykt' => $request->input('present_sykt'),
        'present_title' => $request->input('present_title'),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);

      Toastr::success('Rekod Aset Telah Ditambah!', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);
    }

    return redirect()->route('aset.senarai');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id, $type)
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = Auth::user();

    if($type == 1) {
      $name = 'Komputer Riba';
      $list = DB::table('aset_nb')->select('id', 'nb_nama as nama', 'nb_sykt as sykt', 'nb_title as title')->where('id', $id)->first();

      $pergerakan = DB::table('permohonans')
      ->join('agihan_nb', 'permohonans.id', '=', 'agihan_nb.id_permohonan')
      ->join('aset_nb', 'agihan_nb.item', '=', 'aset_nb.nb_nama')
      ->where('aset_nb.id', $id)
      ->select('permohonans.nama', 'permohonans.tarikh_pinjam', 'agihan_nb.tarikh_pulang as tarikh_pulang', 'agihan_nb.catatan as catatan')
      ->get();
    }

    if($type == 2) {
      $name = 'Projektor LCD';
      $list = DB::table('aset_lcd')->select('id', 'lcd_nama as nama', 'lcd_sykt as sykt', 'lcd_title as title')->where('id', $id)->first();

      $pergerakan = DB::table('permohonans')
      ->join('agihan_lcd', 'permohonans.id', '=', 'agihan_lcd.id_permohonan')
      ->join('aset_lcd', 'agihan_lcd.item', '=', 'aset_lcd.lcd_nama')
      ->where('aset_lcd.id', $id)
      ->select('permohonans.nama', 'permohonans.tarikh_pinjam', 'agihan_lcd.tarikh_pulang as tarikh_pulang', 'agihan_lcd.catatan as catatan')
      ->get();
    }

    if($type == 3) {
      $name = 'Pencetak';
      $list = DB::table('aset_print')->select('id', 'print_nama as nama', 'print_sykt as sykt', 'print_title as title')->where('id', $id)->first();

      $pergerakan = DB::table('permohonans')
      ->join('agihan_print', 'permohonans.id', '=', 'agihan_print.id_permohonan')
      ->join('aset_print', 'agihan_print.item', '=', 'aset_print.print_nama')
      ->where('aset_print.id', $id)
      ->select('permohonans.nama', 'permohonans.tarikh_pinjam', 'agihan_print.tarikh_pulang as tarikh_pulang', 'agihan_print.catatan as catatan')
      ->get();
    }

    if($type == 4) {
      $name = 'Wireless Presenter';
      $list = DB::table('aset_present')->select('id', 'present_nama as nama', 'present_sykt as sykt', 'present_title as title')->where('id', $id)->first();

      $pergerakan = DB::table('permohonans')
      ->join('agihan_present', 'permohonans.id', '=', 'agihan_present.id_permohonan')
      ->join('aset_present', 'agihan_present.item', '=', 'aset_present.present_nama')
      ->where('aset_present.id', $id)
      ->select('permohonans.nama', 'permohonans.tarikh_pinjam', 'agihan_present.tarikh_pulang as tarikh_pulang', 'agihan_present.catatan as catatan')
      ->get();
    }

    return view('aset.pergerakan', compact('user', 'name', 'list', 'pergerakan', 'bahagian', 'jawatan', 'type'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    $user = Auth::user();

    if ($request->input('aset') == 'Komputer Riba') {
      DB::table('aset_nb')->where('id', $id)
      ->update([
        'nb_nama' => $request->input('nb_nama'),
        'nb_sykt' => $request->input('nb_sykt'),
        'nb_title' => $request->input('nb_title'),
        'updated_at' => date("Y-m-d H:i:s")
      ]);

      Toastr::success('Rekod Aset Telah Dikemaskini!', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);
    }

    if ($request->input('aset') == 'Projektor LCD') {
      DB::table('aset_lcd')->where('id', $id)
      ->update([
        'lcd_nama' => $request->input('lcd_nama'),
        'lcd_sykt' => $request->input('lcd_sykt'),
        'lcd_title' => $request->input('lcd_title'),
        'updated_at' => date("Y-m-d H:i:s")
      ]);

      Toastr::success('Rekod Aset Telah Dikemaskini!', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);
    }

    if ($request->input('aset') == 'Pencetak') {
      DB::table('aset_print')->where('id', $id)
      ->update([
        'print_nama' => $request->input('print_nama'),
        'print_sykt' => $request->input('print_sykt'),
        'print_title' => $request->input('print_title'),
        'updated_at' => date("Y-m-d H:i:s")
      ]);

      Toastr::success('Rekod Aset Telah Dikemaskini!', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);
    }

    if ($request->input('aset') == 'Wireless Presenter') {
      DB::table('aset_present')->where('id', $id)
      ->update([
        'present_nama' => $request->input('present_nama'),
        'present_sykt' => $request->input('present_sykt'),
        'present_title' => $request->input('present_title'),
        'updated_at' => date("Y-m-d H:i:s")
      ]);

      Toastr::success('Rekod Aset Telah Dikemaskini!', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);
    }

    return redirect()->route('aset.senarai');
  }


  public function pulang()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = Auth::user();

    $senarai = Permohonan::where('status', 'Diluluskan')->get();

    return view('aset.pemulangan', compact('user', 'senarai', 'bahagian', 'jawatan'));
  }


  public function pulangAset($id)
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = Auth::user();

    $pemohon = Permohonan::find($id);

    $nb = DB::table('aset_nb')
    ->join('agihan_nb', 'aset_nb.id_permohonan', '=', 'agihan_nb.id_permohonan')
    ->where('aset_nb.id_permohonan', $id)
    ->whereColumn('nb_nama', 'item')
    ->get();

    $lcd = DB::table('aset_lcd')
    ->join('agihan_lcd', 'aset_lcd.id_permohonan', '=', 'agihan_lcd.id_permohonan')
    ->where('aset_lcd.id_permohonan', $id)
    ->whereColumn('lcd_nama', 'item')
    ->get();

    $prn = DB::table('aset_print')
    ->join('agihan_print', 'aset_print.id_permohonan', '=', 'agihan_print.id_permohonan')
    ->where('aset_print.id_permohonan', $id)
    ->whereColumn('print_nama', 'item')
    ->get();

    $wls = DB::table('aset_present')
    ->join('agihan_present', 'aset_present.id_permohonan', '=', 'agihan_present.id_permohonan')
    ->where('aset_present.id_permohonan', $id)
    ->whereColumn('present_nama', 'item')
    ->get();

    if (count($nb) == 0 && count($lcd) == 0 && count($prn) == 0 && count($wls) == 0) {
      $sql = "UPDATE pemohon SET status='Dipulangkan', sebab='Dipulangkan' WHERE id_permohonan='$id'";
      DB::table('permohonans')->where('id', $id)
      ->update([
        'status' => 'Dipulangkan',
        'sebab' => 'Dipulangkan',
        'updated_at' => date("Y-m-d H:i:s")
      ]);

      Toastr::success('Pemulangan lengkap.', 'Makluman!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);

      return redirect()->route('aset.pulang');
    }
    else {
      return view('aset.pemulangan_senarai', compact('id', 'user', 'pemohon', 'nb', 'lcd', 'prn', 'wls', 'bahagian', 'jawatan'));
    }
  }


  public function pulangUpdate(Request $request, $id)
  {
    $aset = $request->input('aset');
    $status = $request->input('status');
    $item = $request->input('item');

    if ($aset == 'Komputer Riba') {
      if ($status == 'Lengkap') {
        DB::table('aset_nb')->where('nb_nama', $item)
        ->update([
          'nb_status' => 'ada',
          'id_permohonan' => '0',
          'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('agihan_nb')->where('item', $item)->where('id_permohonan', $id)
        ->update([
          'tarikh_pulang' => date("Y-m-d"),
          'peg_pulang' => Auth::user()->nama,
          'catatan' => null,
          'updated_at' => date("Y-m-d H:i:s")
        ]);
      }
      else {
        DB::table('agihan_nb')->where('item', $item)->where('id_permohonan', $id)
        ->update([
          'tarikh_pulang' => date("Y-m-d"),
          'peg_pulang' => Auth::user()->nama,
          'catatan' => $request->input('catatNB'),
          'updated_at' => date("Y-m-d H:i:s")
        ]);
      }
    }

    if ($aset == 'Projektor LCD') {
      if ($status == 'Lengkap') {
        DB::table('aset_lcd')->where('lcd_nama', $item)
        ->update([
          'lcd_status' => 'ada',
          'id_permohonan' => '0',
          'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('agihan_lcd')->where('item', $item)->where('id_permohonan', $id)
        ->update([
          'tarikh_pulang' => date("Y-m-d"),
          'peg_pulang' => Auth::user()->nama,
          'catatan' => null,
          'updated_at' => date("Y-m-d H:i:s")
        ]);
      }
      else {
        DB::table('agihan_lcd')->where('item', $item)->where('id_permohonan', $id)
        ->update([
          'tarikh_pulang' => date("Y-m-d"),
          'peg_pulang' => Auth::user()->nama,
          'catatan' => $request->input('catatLCD'),
          'updated_at' => date("Y-m-d H:i:s")
        ]);
      }
    }

    if ($aset == 'Pencetak') {
      if ($status == 'Lengkap') {
        DB::table('aset_print')->where('print_nama', $item)
        ->update([
          'print_status' => 'ada',
          'id_permohonan' => '0',
          'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('agihan_print')->where('item', $item)->where('id_permohonan', $id)
        ->update([
          'tarikh_pulang' => date("Y-m-d"),
          'peg_pulang' => Auth::user()->nama,
          'catatan' => null,
          'updated_at' => date("Y-m-d H:i:s")
        ]);
      }
      else {
        DB::table('agihan_print')->where('item', $item)->where('id_permohonan', $id)
        ->update([
          'tarikh_pulang' => date("Y-m-d"),
          'peg_pulang' => Auth::user()->nama,
          'catatan' => $request->input('catatPRN'),
          'updated_at' => date("Y-m-d H:i:s")
        ]);
      }
    }

    if ($aset == 'Wireless Presenter') {
      if ($status == 'Lengkap') {
        DB::table('aset_present')->where('present_nama', $item)
        ->update([
          'present_status' => 'ada',
          'id_permohonan' => '0',
          'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('agihan_present')->where('item', $item)->where('id_permohonan', $id)
        ->update([
          'tarikh_pulang' => date("Y-m-d"),
          'peg_pulang' => Auth::user()->nama,
          'catatan' => null,
          'updated_at' => date("Y-m-d H:i:s")
        ]);
      }
      else {
        DB::table('agihan_present')->where('item', $item)->where('id_permohonan', $id)
        ->update([
          'tarikh_pulang' => date("Y-m-d"),
          'peg_pulang' => Auth::user()->nama,
          'catatan' => $request->input('catatWLS'),
          'updated_at' => date("Y-m-d H:i:s")
        ]);
      }
    }

    Toastr::success('Rekod Telah Dikemaskini.', 'Berjaya!', [
      "positionClass" => "toast-top-center",
      "closeButton" => "true",
    ]);

    return redirect()->action('AsetController@pulangAset', ['id' => $id]);
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id, $type)
  {
    if ($type == 1) {

    }

    if ($type == 2) {
      DB::table('aset_lcd')->where('id', $id)->delete();

      Toastr::success('Rekod Aset Telah Dihapus.', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);
    }

    if ($type == 3) {

    }

    if ($type == 4) {

    }

    return redirect()->route('aset.senarai');
  }


  public function downloadPDF($id, $type)
  { //dd($id, $type);
    if($type == 1) {
      $name = 'Komputer Riba';
      $list = DB::table('aset_nb')->select('id', 'nb_nama as nama', 'nb_sykt as sykt', 'nb_title as title')->where('id', $id)->first();

      $pergerakan = DB::table('permohonans')
      ->join('agihan_nb', 'permohonans.id', '=', 'agihan_nb.id_permohonan')
      ->join('aset_nb', 'agihan_nb.item', '=', 'aset_nb.nb_nama')
      ->where('aset_nb.id', $id)
      ->select('permohonans.*', 'agihan_nb.*')
      ->get();
    }

    if($type == 2) {
      $name = 'Projektor LCD';
      $list = DB::table('aset_lcd')->select('id', 'lcd_nama as nama', 'lcd_sykt as sykt', 'lcd_title as title')->where('id', $id)->first();

      $pergerakan = DB::table('permohonans')
      ->join('agihan_lcd', 'permohonans.id', '=', 'agihan_lcd.id_permohonan')
      ->join('aset_lcd', 'agihan_lcd.item', '=', 'aset_lcd.lcd_nama')
      ->where('aset_lcd.id', $id)
      ->select('permohonans.*', 'agihan_lcd.*')
      ->get();
    }

    if($type == 3) {
      $name = 'Pencetak';
      $list = DB::table('aset_print')->select('id', 'print_nama as nama', 'print_sykt as sykt', 'print_title as title')->where('id', $id)->first();

      $pergerakan = DB::table('permohonans')
      ->join('agihan_print', 'permohonans.id', '=', 'agihan_print.id_permohonan')
      ->join('aset_print', 'agihan_print.item', '=', 'aset_print.print_nama')
      ->where('aset_print.id', $id)
      ->select('permohonans.*', 'agihan_print.*')
      ->get();
    }

    if($type == 4) {
      $name = 'Wireless Presenter';
      $list = DB::table('aset_present')->select('id', 'present_nama as nama', 'present_sykt as sykt', 'present_title as title')->where('id', $id)->first();

      $pergerakan = DB::table('permohonans')
      ->join('agihan_present', 'permohonans.id', '=', 'agihan_present.id_permohonan')
      ->join('aset_present', 'agihan_present.item', '=', 'aset_present.present_nama')
      ->where('aset_present.id', $id)
      ->select('permohonans.*', 'agihan_present.*')
      ->get();
    }

    $pdf = PDF::loadView('aset.cetak', compact('name', 'list', 'pergerakan'))->setPaper('a4','landscape');

    return $pdf->download($name.'-'.$list->nama.'.pdf');
  }
}
