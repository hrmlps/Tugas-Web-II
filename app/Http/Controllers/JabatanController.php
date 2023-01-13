<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;
use App\Models\Pegawai;

class JabatanController extends Controller
{
    public function index()
    {
        $data_jabatan = Jabatan::all();

        return view('Jabatan.Data-jabatan', compact('data_jabatan'));
    }

    public function create()
    {
        $data = Jabatan::all();
        return view('jabatan.create-jabatan',[
            'data' => $data,
        ]);
    }

    public function proses_tambah(Request $request){
        $rule_validasi = [
            'nmjabatan'    => 'required',
            'gajipokok'    => 'required',
        ];

        $pesan_validasi = [
            'nmjabatan.required'   => 'Nama Harus Di Isi !',
            'gajipokok.required'   => 'Gaji Harus Di Isi !',
        ];

        $b = $request->validate($rule_validasi, $pesan_validasi);
        Jabatan::create($b);
        return redirect('/jabatan/data')->with('status', 'Data Telah Disimpan !');
    }

    public function hapus($id)
    {
        $detail_jabatan = Jabatan::findOrFail($id);
        $detail_jabatan->delete();
        Pegawai::where('jabatan_id',$id)->delete();

        return redirect('/jabatan/data')->with('hapus', 'Data Berhasil di Hapus !');
    }

    public function ubah($id)
    {
        $detail_jabatan = Jabatan::findOrFail($id);
        $data_jabatan = Jabatan::all();

        return view('jabatan.ubah', [
            'detail_jabatan'=>$detail_jabatan,
            'data_jabatan'=>$data_jabatan
        ]);
    }

    public function proses_ubah(Request $request, $id)
    {
        $rule_validasi = [
            'nmjabatan'    => 'required',
            'gajipokok'    => 'required',
        ];

        $pesan_validasi = [
            'nmjabatan.required'     => 'Nama Harus Di Isi !',
            'gajipokok.required'   => 'Alamat Harus Di Isi !',
        ];

        $b = $request->validate($rule_validasi, $pesan_validasi);
        Jabatan::where('id',$id)->update($b);

        return redirect('/jabatan/data')->with('berhasil', 'Data Telah Disimpan !');
    }
}
