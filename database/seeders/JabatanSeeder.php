<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatan')->insert([
            [
                'nmjabatan' => 'manajer',
                'gajipokok' => '7000000',
            ],
            [
                'nmjabatan' => 'admin',
                'gajipokok' => '4500000',
            ],
            [
                'nmjabatan' => 'staff',
                'gajipokok' => '3500000',
            ],
        ]);
    }
}
