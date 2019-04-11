<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      // Validate data dari Borang
      $request->validate([
        'nama'=>'required',
        'peranan' => 'required',
        'email' => 'required|email|unique:users,email,',
      ]);

      // Dapatkan data yang diperlukan sahaja
      $data = $request->except('password');

      $data['password'] = bcrypt('perpaduan@123');

      User::create($data);

      Toastr::success('Pentadbir telah ditambah.', 'Berjaya!', [
        "positionClass" => "toast-top-center",
        "closeButton" => "true",
      ]);

      // bagi response redirect ke halaman edit semula
      return redirect()->route('developer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $user = User::find($id);

        // Validate data dari Borang
        $request->validate([
          'nama'=>'required',
          'peranan' => 'required',
          'email' => 'required|email|unique:users,email,' . $id,
        ]);

        // Dapatkan data yang diperlukan sahaja
        $data = $request->except('password');

        //semak jika ruangan password diisi// jika ada pasword baru, dapatkan data password dan encrypt
        if (!empty($request->input('password')))
        {
        $data['password'] = bcrypt($request->input('password'));
        }

        $user->update($data);

        Toastr::success('Rekod telah dikemaskini.', 'Berjaya!', [
          "positionClass" => "toast-top-center",
          "closeButton" => "true",
        ]);

        // bagi response redirect ke halaman edit semula
        return redirect()->route('developer');
    }


    public function profileUpdate(Request $request, $id)
    {
        $user = User::find($id);

        // Validate data dari Borang
        $request->validate([
          'nama'=>'required',
          'peranan' => 'required',
          'email' => 'required|email|unique:users,email,' . $id,
        ]);

        // Dapatkan data yang diperlukan sahaja
        $data = $request->except('password');

        //semak jika ruangan password diisi// jika ada pasword baru, dapatkan data password dan encrypt
        if (!empty($request->input('password')))
        {
        $data['password'] = bcrypt($request->input('password'));
        }

        $user->update($data);

        Toastr::success('Rekod telah dikemaskini.', 'Berjaya!', [
          "positionClass" => "toast-top-center",
          "closeButton" => "true",
        ]);

        // bagi response redirect ke halaman edit semula
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
