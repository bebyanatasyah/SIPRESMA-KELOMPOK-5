<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\mahasiswa as ModelMahsiswa;
use Illuminate\Http\Request;

class mahasiswa extends Controller
{
    public function list()
    {
        $mahasiswas = ModelMahsiswa::all();
        return view('admin.mahasiswa.daftar-mhs', compact('mahasiswas'));
    }

    public function delete($id)
    {
        $mahasiswa = ModelMahsiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('admin.mahasiswa.daftar-mhs')->with('success', 'Mahasiswa berhasil dihapus.');
    }

    public function create()
    {
        return view('admin.mahasiswa.create-mhs');
    }
}
