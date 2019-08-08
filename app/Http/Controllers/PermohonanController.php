<?php

namespace App\Http\Controllers;

use App\Permohonan;
use App\Agihan;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Auth;
use DB;
use Mail;
use App\Mail\PermohonanEmail;
use App\LookupBahagian;
use App\LookupJawatan;


class PermohonanController extends Controller
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
  public function index($ref)
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    return view('permohonan_selesai', compact('ref', 'bahagian', 'jawatan'));
  }


  public function semak()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = Auth::user();
    $bil = 1;
    $semak = Permohonan::where('status', 'Permohonan Baru')->get();

    return view('admin.semak', compact('user', 'bil', 'semak', 'bahagian', 'jawatan'));
  }


  public function semakDetail($id)
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = Auth::user();
    $result = Permohonan::find($id);

    $nb = DB::table('aset_nb')->where('nb_status', 'ada')->count();
    $lcd = DB::table('aset_lcd')->where('lcd_status', 'ada')->count();
    $print = DB::table('aset_print')->where('print_status', 'ada')->count();
    $present = DB::table('aset_present')->where('present_status', 'ada')->count();

    return view('admin.semak_detail', compact('user', 'result', 'nb', 'lcd', 'print', 'present', 'bahagian', 'jawatan'));
  }


  public function semakLulus(Request $request, $id)
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = Auth::user();

    if ($request->input('status') == 'Diluluskan') {
      DB::table('permohonans')->where('id', $id)
      ->update([
        'status' => $request->input('status'),
        'sebab' => $request->input('status'),
        'updated_at' => date("Y-m-d H:i:s")
      ]);

      DB::table('item_luluss')->insert([
        'id_permohonan' => $id,
        'bil_nb' => $request->input('bil_nb'),
        'note_nb' => $request->input('note_nb'),
        'bil_lcd' => $request->input('bil_lcd'),
        'note_lcd' => $request->input('note_lcd'),
        'bil_print' => $request->input('bil_print'),
        'note_print' => $request->input('note_print'),
        'bil_present' => $request->input('bil_present'),
        'note_present' => $request->input('note_present'),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
      ]);

      return redirect()->action('PermohonanController@agihan', ['id' => $id]);
    }

    else {
      DB::table('permohonans')->where('id', $id)
      ->update([
        'status' => $request->input('status'),
        'sebab' => $request->input('sebab'),
        'updated_at' => date("Y-m-d H:i:s")
      ]);

      $permohonan = Permohonan::find($id);

      Mail::send('mail.email_xlulus', ['content' => $permohonan], function ($message) use ($permohonan, $user)
      {
        $message->from($user->email, $user->nama);
        $message->to($permohonan->email, $permohonan->nama);
        $message->cc('rt.photo.09@gmail.com', 'HelpdeskICT PERPADUAN');
        $message->subject("Permohonan Pinjaman Peralatan Aset Sewaan ICT");
      });

      if (Mail::failures())
      {
        Toastr::error('Permohonan tidak berjaya dihantar.', 'Gagal!', [
          "positionClass" => "toast-top-center",
          "closeButton" => "true",
        ]);

        return redirect()->back();
      }
      else
      {
        Toastr::success('Permohonan telah dikemaskini.', 'Berjaya!', [
          "positionClass" => "toast-top-center",
          "closeButton" => "true",
        ]);

        return redirect()->route('admin.semak');
      }

      // Toastr::success('Permohonan telah dikemaskini.', 'Berjaya!', [
      //   "positionClass" => "toast-top-center",
      //   "closeButton" => "true",
      // ]);
      //
      // return redirect()->route('admin.semak');
    }

  }


  public function agihan($id)
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = Auth::user();

    $nb = DB::table('aset_nb')->where('nb_status', 'ada')->get();
    $lcd = DB::table('aset_lcd')->where('lcd_status', 'ada')->get();
    $print = DB::table('aset_print')->where('print_status', 'ada')->get();
    $present = DB::table('aset_present')->where('present_status', 'ada')->get();

    $bil_nb = DB::table('item_luluss')->where('id_permohonan', $id)->first()->bil_nb;
    $bil_lcd = DB::table('item_luluss')->where('id_permohonan', $id)->first()->bil_lcd;
    $bil_print = DB::table('item_luluss')->where('id_permohonan', $id)->first()->bil_print;
    $bil_present = DB::table('item_luluss')->where('id_permohonan', $id)->first()->bil_present;
    // dd($bil_nb);

    return view('admin.assign_aset', compact('id', 'user', 'nb', 'lcd', 'print', 'present', 'bil_nb', 'bil_lcd', 'bil_print', 'bil_present', 'bahagian', 'jawatan'));
  }


  public function agihanUpdate(Request $request, $id)
  {
    $user = Auth::user();

    $data = $request->all();
    $data['id_permohonan'] = $id;
    // dd($data);
    Agihan::create($data);

    // nb
    DB::table('agihan_nb')->insert([
      ['id_permohonan' => $id, 'item' => $data['nb1'], 'peg_keluar' => $user->nama, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
      ['id_permohonan' => $id, 'item' => $data['nb2'], 'peg_keluar' => $user->nama, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
      ['id_permohonan' => $id, 'item' => $data['nb3'], 'peg_keluar' => $user->nama, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
      ['id_permohonan' => $id, 'item' => $data['nb4'], 'peg_keluar' => $user->nama, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
      ['id_permohonan' => $id, 'item' => $data['nb5'], 'peg_keluar' => $user->nama, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
      ['id_permohonan' => $id, 'item' => $data['nb6'], 'peg_keluar' => $user->nama, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
      ['id_permohonan' => $id, 'item' => $data['nb7'], 'peg_keluar' => $user->nama, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
    ]);

    DB::table('agihan_nb')->where('item', null)->delete();

    DB::table('aset_nb')->whereIn(
      'nb_nama', [$data['nb1'], $data['nb2'], $data['nb3'], $data['nb4'], $data['nb5'], $data['nb6'], $data['nb7']])
      ->update([
        'nb_status' => 'tiada', 'id_permohonan' => $id,
        'updated_at' => date("Y-m-d H:i:s"),
    ]);

    //  lcd
    DB::table('agihan_lcd')->insert([
      ['id_permohonan' => $id, 'item' => $data['lcd1'], 'peg_keluar' => $user->nama],
      ['id_permohonan' => $id, 'item' => $data['lcd2'], 'peg_keluar' => $user->nama],
      ['id_permohonan' => $id, 'item' => $data['lcd3'], 'peg_keluar' => $user->nama],
      ['id_permohonan' => $id, 'item' => $data['lcd4'], 'peg_keluar' => $user->nama],
      ['id_permohonan' => $id, 'item' => $data['lcd5'], 'peg_keluar' => $user->nama],
    ]);

    DB::table('agihan_lcd')->where('item', null)->delete();

    DB::table('aset_lcd')->whereIn(
      'lcd_nama', [$data['lcd1'], $data['lcd2'], $data['lcd3'], $data['lcd4'], $data['lcd5']])
      ->update([
        'lcd_status' => 'tiada', 'id_permohonan' => $id,
        'updated_at' => date("Y-m-d H:i:s"),
    ]);

    //  print
    DB::table('agihan_print')->insert([
      ['id_permohonan' => $id, 'item' => $data['print1'], 'peg_keluar' => $user->nama],
      ['id_permohonan' => $id, 'item' => $data['print2'], 'peg_keluar' => $user->nama],
      ['id_permohonan' => $id, 'item' => $data['print3'], 'peg_keluar' => $user->nama],
      ['id_permohonan' => $id, 'item' => $data['print4'], 'peg_keluar' => $user->nama],
    ]);

    DB::table('agihan_print')->where('item', null)->delete();

    DB::table('aset_print')->whereIn(
      'print_nama', [$data['print1'], $data['print2'], $data['print3'], $data['print4']])
      ->update([
        'print_status' => 'tiada', 'id_permohonan' => $id,
        'updated_at' => date("Y-m-d H:i:s"),
    ]);

    //  present
    DB::table('agihan_present')->insert([
      ['id_permohonan' => $id, 'item' => $data['present1'], 'peg_keluar' => $user->nama],
      ['id_permohonan' => $id, 'item' => $data['present2'], 'peg_keluar' => $user->nama],
    ]);

    DB::table('agihan_present')->where('item', null)->delete();

    DB::table('aset_present')->whereIn(
      'present_nama', [$data['present1'], $data['present2']])
      ->update([
        'present_status' => 'tiada', 'id_permohonan' => $id,
        'updated_at' => date("Y-m-d H:i:s"),
    ]);

    $permohonan = Permohonan::find($id);
    $lulus = DB::table('item_luluss')->where('id_permohonan', $id)->first();

    Mail::send('mail.email_lulus', ['content' => $permohonan, 'lulus' => $lulus], function ($message) use ($permohonan, $user)
    {
      $message->from($user->email, $user->nama);
      $message->to($permohonan->email, $permohonan->nama);
      $message->cc('rt.photo.09@gmail.com', 'HelpdeskICT PERPADUAN');
      $message->subject("Permohonan Pinjaman Peralatan Aset Sewaan ICT");
    });

    if (Mail::failures())
    {
      Toastr::error('Permohonan tidak berjaya dihantar.', 'Gagal!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);

      return redirect()->back();
    }
    else
    {
      Toastr::success('Permohonan telah dikemaskini.', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);

      return redirect()->route('admin.semak');
    }

    // Toastr::success('Permohonan telah dikemaskini.', 'Berjaya!', [
    //   "positionClass" => "toast-top-center",
    //   "closeButton" => "true",
    // ]);
    //
    // return redirect()->route('admin.semak');
  }


  public function senarai()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = Auth::user();

    $senarai = Permohonan::where('status', '!=', 'Permohonan Baru')->where('status', '!=', 'Arkib')->orderBy('id', 'desc')->get();

    return view('admin.senarai', compact('user', 'senarai', 'bahagian', 'jawatan'));
  }


  public function pergerakan()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = Auth::user();

    $senarai = DB::table('permohonans')
    ->join('agihans', 'permohonans.id', '=', 'agihans.id_permohonan')
    ->select('permohonans.*', 'agihans.*')->where('status', 'Diluluskan')
    ->get();

    return view('admin.pergerakan', compact('user', 'senarai', 'bahagian', 'jawatan'));
  }


  public function arkib()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = Auth::user();

    $senarai = Permohonan::where('status', 'Arkib')->get();

    return view('admin.arkib', compact('user', 'senarai', 'bahagian', 'jawatan'));
  }


  public function arkibUpdate($id)
  {
    $user = Auth::user();

    $senarai = Permohonan::find($id); //dd($senarai);

    if ($senarai->status == 'Dipulangkan' || $senarai->status == 'Tidak Diluluskan') {
      $senarai->status = 'Arkib';
      $senarai->sebab = 'Arkib';
      $senarai->save();

      Toastr::success('Rekod telah dimasukkan ke Senarai Arkib.', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);
    }

    else {
      Toastr::error('Hanya permohonan berstatus<br>DIPULANGKAN dan TIDAK DILULUSKAN<br>sahaja boleh dimasukkan ke senarai arkib.', 'Maaf!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);
    }
    return redirect()->route('admin.senarai');

    // return view('admin.arkib', compact('user', 'senarai'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = Auth::user();

    $laporan = DB::table('permohonans')
    ->join('agihans', 'permohonans.id', '=', 'agihans.id_permohonan')
    ->select('permohonans.*', 'agihans.*')
    ->where('permohonans.status', '!=', 'Permohonan Baru')->where('permohonans.status', '!=', 'Tidak Diluluskan')
    ->get();

    return view('admin.laporan', compact('user', 'laporan', 'bahagian', 'jawatan'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $data = $request->all();
    $data['user_id'] = Auth::id(); //dd($data);
    // $ref = $data['ref'];

    $permohonan = Permohonan::create($data); //dd($permohonan);

    Mail::send('mail.email_notify', ['content' => $permohonan], function ($message) use ($permohonan)
    {
      $message->from('noreply@perpaduan.gov.my', 'Sistem e-Pinjam');
      $message->to($permohonan->email, $permohonan->nama);
      // $message->cc($admins->email);
      $message->subject("Permohonan Pinjaman Peralatan Aset Sewaan ICT");
    });

    Mail::send('mail.email_permohonan', ['content' => $permohonan], function ($message) use ($permohonan)
    {
      $message->from($permohonan->email, $permohonan->nama);
      $message->to('rt.photo.09@gmail.com', 'HelpdeskICT PERPADUAN');
      // $message->cc($admins->email);
      $message->subject("Permohonan Pinjaman Peralatan Aset Sewaan ICT");
    });

    if (Mail::failures())
    {
      Toastr::error('Permohonan tidak berjaya dihantar.', 'Gagal!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);

      return redirect()->back();
    }
    else
    {
      Toastr::success('Permohonan telah dihantar.', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);

      if (Auth::user()->peranan == 'Pentadbir') {
        return redirect()->route('home');
      }

      if (Auth::user()->peranan == 'Pengguna') {
        return redirect()->route('user.utama');
      }
    }

    // return view('welcome', compact('ref'));
    // return redirect()->action('PermohonanController@index', ['ref' => $ref]);
  }


  public function cetak($id)
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $permohonan = DB::table('permohonans')
    ->join('item_luluss', 'permohonans.id', '=', 'item_luluss.id_permohonan')
    ->select('permohonans.*', 'item_luluss.bil_nb as nb', 'item_luluss.bil_lcd as lcd', 'item_luluss.bil_print as print', 'item_luluss.bil_present as present')
    ->where('permohonans.id', $id)
    ->first();

    $agihan = DB::table('agihans')->where('id_permohonan', $id)->first();

    // dd($permohonan, $agihan);

    return view('admin.cetak', compact('permohonan', 'agihan', 'bahagian', 'jawatan'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Permohonan  $permohonan
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Permohonan $permohonan)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Permohonan  $permohonan
  * @return \Illuminate\Http\Response
  */
  public function destroy(Permohonan $permohonan)
  {
    //
  }


  public function reminder($id)
  { //dd($id);
    $data = Permohonan::find($id);

    Mail::send('mail.email_reminder', ['content' => $data], function ($message) use ($data)
    {
      $message->from('noreply@perpaduan.gov.my', 'Sistem e-Pinjam');
      $message->to($data->email, $data->nama);
      $message->cc('rt.photo.09@gmail.com', 'HelpdeskICT PERPADUAN');
      $message->subject("PERINGATAN! : Pemulangan Peralatan Aset Sewaan ICT");
    });

    if (Mail::failures())
    {
      Toastr::error('Peringatan tidak berjaya dihantar.', 'Gagal!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);

      return redirect()->back();
    }
    else
    {
      Toastr::success('Peringatan telah dihantar.', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);

      return redirect()->route('admin.senarai');
    }
  }
}
