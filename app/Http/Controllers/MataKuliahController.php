<?php

namespace App\Http\Controllers;

use App\mata_kuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function list()
    {
        
        $list = mata_kuliah::all();
        return view('table.matakuliah', compact('list'));
        
    }

    public function save(Request $request)
    {
        $mk = [
            'nama' => $request->input('nama'),
        ];
        mata_kuliah::create($mk);
        return redirect('/matakuliah/list');
    }

    public function update(Request $request)
    {
        $mk = [
            'nama' => $request->input('nama'),
        ];
        mata_kuliah::where('id', $request-> input('id'))->update($mk);
        return redirect('/matakuliah/list');
    }

    public function delete($id)
    {
        mata_kuliah::where('id',$id)->delete();
        return redirect('/matakuliah/list');
    }
}
