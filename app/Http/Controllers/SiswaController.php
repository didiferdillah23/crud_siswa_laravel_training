<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function showDataSiswa()
    {
        $data = Siswa::get();

        return view('data_siswa', compact('data'));
    }

    public function createDataSiswa()
    {
        return view('create_data_siswa');
    }

    public function simpanDataSiswa(Request $request)
    {
        Siswa::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kelas' => $request->kelas
        ]); 
        
        return redirect('/data-siswa');
    }

    public function editDataSiswa($id)
    {
        $data = Siswa::find($id);

        return view('edit_data_siswa', compact('data'));
    }

    public function updateDataSiswa(Request $request, $id)
    {
        Siswa::find($id)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kelas' => $request->kelas
        ]);

        return redirect('/data-siswa');
    }

    public function deleteDataSiswa($id)
    {
        Siswa::find($id)->delete();

        return redirect('/data-siswa');
    }

}
