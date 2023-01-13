<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Pegawai;
use App\Models\Jabatan;

class PegawaiController extends Controller
{
    public function index()
    {
        $data_pegawai = Pegawai::all();

        return view('pegawai.data-pegawai', compact('data_pegawai'));
    }

    public function create()
    {
        $data = Pegawai::all();
        $jabatan = Jabatan::all();
        return view('pegawai.create-pegawai',[
            'data' => $data,
            'jabatan'=>$jabatan
        ]);
    }

    public function proses_tambah(Request $request){
        $rule_validasi = [
            'nama'      => 'required',
            'alamat'    => 'required',
            'umur'      => 'required|min:2',
            'jabatan_id'   => 'required'
        ];

        $pesan_validasi = [
            'nama.required'     => 'Nama Harus Di Isi !',

            'alamat.required'   => 'Alamat Harus Di Isi !',

            'umur.required'     => 'Umur Harus Di Isi !',
            'umur.min'          => 'Umur Minimal 2 Karakter !',

            'jabatan_id.required'  =>'isi Jabatan',
        ];

       $a= $request->validate($rule_validasi, $pesan_validasi);
        Pegawai::create($a);
        return redirect('/pegawai/data')->with('status', 'Data Telah Disimpan !');
    }

    public function hapus($id)
    {
        $data_pegawai = Pegawai::findOrFail($id);
        $data_pegawai->delete();

        return redirect('/pegawai/data')->with('hapus', 'Data Berhasil di Hapus !');
    }

    public function ubah($id)
    {
        $detail_pegawai = Pegawai::findOrFail($id);
        $data_jabatan = Jabatan::all();

        return view('pegawai.ubah', [
            'detail_pegawai'=>$detail_pegawai,
            'data_jabatan'=>$data_jabatan
        ]);
    }

    public function proses_ubah(Request $request, $id)
    {
        $rule_validasi = [
            'nama'      => 'required',
            'alamat'    => 'required',
            'umur'      => 'required|min:2',
            'jabatan_id'   => 'required'
        ];

        $pesan_validasi = [
            'nama.required'     => 'Nama Harus Di Isi !',

            'alamat.required'   => 'Alamat Harus Di Isi !',

            'umur.required'     => 'Umur Harus Di Isi !',
            'umur.min'          => 'Umur Minimal 2 Karakter !',
            'jabatan_id.required'  =>'isi Jabatan',
        ];

       $a= $request->validate($rule_validasi, $pesan_validasi);
       Pegawai::where('id',$id)->update($a);

        return redirect('/pegawai/data')->with('berhasil', 'Data Telah Dirubah !');
    }
}
