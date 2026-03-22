<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data=[];

        for($i=1;$i<=10;$i++){
            $data[]=[
                'penjualan_id'=>$i,
                'user_id'=>rand(1,3),
                'tanggal_penjualan'=>date('Y-m-d H:i:s'),
                'total_harga'=>rand(20000,100000)
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}