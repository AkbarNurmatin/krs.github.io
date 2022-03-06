<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function kelasku(){
        return view('table.tambahK');
    }

    public function save(Request $request){
        $request->validate([
            'nama_kelas' => 'required',
        ],
        [
            'nama_kelas.required' => 'Nama Kelas Harus Diisi',
        ]
        );

        DB::table('kelas')->insert(
        [
            'nama_kelas' => $request['nama_kelas']
        ]
        );

        return redirect('/kelas/create');
    }

    // public function tampil(){
    //     $myclass = DB::table('kelas')->get();
 
    //     return view('table.tableK', compact('myclass'));
    // }
}
