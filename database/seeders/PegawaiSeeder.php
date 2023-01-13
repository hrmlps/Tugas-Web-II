<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Pegawai')->insert([
            [
                'nama'      => 'Rini',
                'alamat'    => 'Jln. Suka Ribut, Kec. Merpati, Kota Jambi',
                'umur'      => '20',
                'jabatan_id'=> '2',
            ],
            [
                'nama'      => 'Reno',
                'alamat'    => 'Jln. Batu Perak, Kec. Dara, Kota Jambi',
                'umur'      => '26',
                'jabatan_id'=> '1',
            ],
            [
                'nama'      => 'Lena',
                'alamat'    => 'Jln. Berlian Merah, Kec. Gagak, Kota Jambi',
                'umur'      => '19',
                'jabatan_id'=> '3',
            ],
        ]);
    }
}
