<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\Http\Request;

class Mahasiswacontroller extends Controller
{
    public function mhs()
    {
        $mhs = mahasiswa::all();
        return view('halaman.profil', compact('list'));
    }

    public function save(Request $request)
    {
        $mhs = [
            'NIM' => $request->input('NIM'),
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'kelas_id' => $request->input('kelas_id'),
        ];
        mahasiswa::create($mhs);
        return redirect('/profil/list');
    }

    public function update(Request $request)
    {
        $mhs = [
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'alamat' => $request->input('alamat'),
            'kelas_id' => $request->input('kelas_id'),
        ];
        mahasiswa::where('nim', $request-> input('NIM'))->update($mhs);
        return redirect('/profil/list');
    }
}
