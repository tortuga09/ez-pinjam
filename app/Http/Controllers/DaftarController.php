<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\User;
use App\LookupBahagian;
use App\LookupJawatan;
use App\Pengguna;
use App\Permohonan;

class DaftarController extends Controller
{
  public function daftar()
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    return view('daftar', compact('bahagian', 'jawatan'));
  }


  public function daftarSemak(Request $request)
  {
    $no_ic = $request->input('no_ic');
    $email = $request->input('email'); //dd($no_ic, $email);

    $check = Pengguna::where('no_ic', $no_ic)->where('email', $email)->first(); //dd($check);

    if(!empty($check))
    { //dd("ada data");
      $bahagian = LookupBahagian::all();
      $jawatan = LookupJawatan::all();

      $checkUser = User::where('no_ic', $no_ic)->where('email', $email)->first(); //dd($checkUser);

      if(!empty($checkUser))
      {
        Toastr::warning('Rekod anda telah wujud. Sila Log Masuk.', 'Maaf!', [
          "positionClass" => "toast-top-center",
          "closeButton" => "true",
        ]);

        return redirect()->route('login');
      }

      return view('daftar2', compact('check', 'bahagian', 'jawatan'));
    }

    else
    { //dd("tiada data");
      Toastr::error('Rekod anda tidak wujud. Sila hubungi Pentadbir Sistem.', 'Maaf!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);

      return redirect()->route('daftar');
    }
  }


  public function daftarPengguna(Request $request)
  { //dd($request);
    $request->validate([
      'email' => 'required|email|unique:users,email,',
    ]);

    // Dapatkan data yang diperlukan sahaja
    $data = $request->except('password', 'peranan');

    $data['password'] = bcrypt($request->input('password'));
    $data['peranan'] = 'Pengguna';

    User::create($data);

    Toastr::success('Maklumat anda telah didaftar. Sila Log Masuk.', 'Berjaya!', [
      "positionClass" => "toast-top-center",
      "closeButton" => "true",
    ]);

    // bagi response redirect ke halaman edit semula
    // return view('auth.login');
    return redirect()->route('login');
  }


  public function show(Request $request)
  {
    $bahagian = LookupBahagian::all();
    $jawatan = LookupJawatan::all();

    // $ref = $request->ref;
    $url = $request->ref;
    $result = Permohonan::where('ref', $request->ref)->where('ref', $url)->get();

    return view('semak', compact('result', 'bahagian', 'jawatan'));
  }



}
