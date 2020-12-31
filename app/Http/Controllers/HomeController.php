<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Permohonan;
use App\LookupBahagian;
use App\LookupJawatan;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\Pengguna;

class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Contracts\Support\Renderable
  */
  public function index()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    if (Auth::user()->peranan == 'Developer') {
      return redirect()->route('developer');
    }

    elseif (Auth::user()->peranan == 'Pentadbir') {

      if (Hash::check('perpaduan@123', Auth::user()->password)) {
        return redirect()->route('change');
      }
      else {
        $user = Auth::user();
        $baru = Permohonan::where('status', 'Permohonan Baru')->count();
        $lulus = Permohonan::where('status', 'Diluluskan')->count();
        $proses = Permohonan::where('status', '!=', 'Permohonan Baru')->where('status', '!=', 'Arkib')->count();
        $arkib = Permohonan::where('status', 'Arkib')->count();

        $nb_total = DB::table('aset_nb')->count();
        $nb_tiada = DB::table('aset_nb')->where('nb_status', 'tiada')->count();
        $nb_baki = $nb_total - $nb_tiada;

        $lcd_total = DB::table('aset_lcd')->count();
        $lcd_tiada = DB::table('aset_lcd')->where('lcd_status', 'tiada')->count();
        $lcd_baki = $lcd_total - $lcd_tiada;

        $print_total = DB::table('aset_print')->count();
        $print_tiada = DB::table('aset_print')->where('print_status', 'tiada')->count();
        $print_baki = $print_total - $print_tiada;

        $present_total = DB::table('aset_present')->count();
        $present_tiada = DB::table('aset_present')->where('present_status', 'tiada')->count();
        $present_baki = $present_total - $present_tiada;

        $pulang_nb = DB::table('agihan_nb')->where('catatan', '!=', '')->get();
        $pulang_lcd = DB::table('agihan_lcd')->where('catatan', '!=', '')->get();
        $pulang_print = DB::table('agihan_print')->where('catatan', '!=', '')->get();
        $pulang_present = DB::table('agihan_present')->where('catatan', '!=', '')->get();

        return view('home', compact('user', 'baru', 'lulus', 'proses', 'arkib', 'nb_total', 'nb_tiada', 'nb_baki', 'lcd_total', 'lcd_tiada', 'lcd_baki', 'print_total', 'print_tiada', 'print_baki', 'present_total', 'present_tiada', 'present_baki', 'pulang_nb', 'pulang_lcd', 'pulang_print', 'pulang_present', 'bahagian', 'jawatan'));
      }
    }

    else {
      // return('adsadadadads');
      return redirect()->route('user.utama');
    }

  }


  public function showChangePasswordForm()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    return view ('admin.change_password', compact('bahagian', 'jawatan'));
  }


  public function changePassword(Request $request)
  {
    if (!(Hash::check($request->get('oldpassword'), Auth::user()->password))) {
      // The passwords matches
      Toastr::error('Kata Laluan Lama tidak sama.<br>Sila cuba lagi.', 'Maaf!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);

      return redirect()->back();
    }

    if(strcmp($request->get('oldpassword'), $request->get('newpassword')) == 0) {
      //Current password and new password are same
      Toastr::error('Kata Laluan Baru anda sama Kata Laluan Lama.<br>Sila pilih kata laluan yang berbeza.', 'Maaf!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);

      return redirect()->back();
    }

    if($request->get('newpassword') != $request->get('newpassword_confirmation')) {
      //Current password and new password are same
      Toastr::error('Kata Laluan Baru tidak sama dengan Pengesahan Kata Laluan.', 'Maaf!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);

      return redirect()->back();
    }

    $validatedData = $request->validate([
      'oldpassword' => 'required',
      'newpassword' => 'required|string|confirmed',
    ]);

    //Change Password
    $user = Auth::user();
    $user->password = bcrypt($request->get('newpassword'));
    $user->save();

    Toastr::success('Kata Laluan telah ditukar.', 'Berjaya!', [
      "positionClass" => "toast-top-center",
      "closeButton" => "true",
    ]);

    return redirect()->route('home');
  }


  public function dev()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    if(Auth::user()->peranan != 'Developer')
    {
      Auth::logout();
    }

    else
    {
      $admin = User::where('peranan', '!=', 'Pengguna')->count();
      $user = User::where('peranan', 'Pengguna')->count();
      $pegawai = Pengguna::count();

      return view('developer.index', compact('admin', 'user', 'pegawai', 'bahagian', 'jawatan'));
    }
  }


  public function admin()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $admin = User::where('peranan', '!=', 'Pengguna')->get();
    return view('developer.admin', compact('admin', 'bahagian', 'jawatan'));
  }


  public function user()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $user = User::where('peranan', 'Pengguna')->get();
    return view('developer.user', compact('user', 'bahagian', 'jawatan'));
  }


  public function hq()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $hq = DB::table('penggunas')->orderBy('status', 'asc')->get();
    return view('developer.hq', compact('bahagian', 'jawatan', 'hq'));
  }


  public function utama()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $total = Permohonan::where('user_id', Auth::id())->count();
    $belum = Permohonan::where('user_id', Auth::id())->where('status', 'Diluluskan')->count();

    return view('user_home', compact('bahagian', 'jawatan', 'total', 'belum'));
  }


  public function permohonan()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();
    return view('permohonan', compact('bahagian', 'jawatan'));
  }


  public function sejarah()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    $semak = Permohonan::where('user_id', Auth::id())->orderBy('id', 'desc')->get();

    return view('sejarah', compact('bahagian', 'jawatan', 'semak'));
  }

}
