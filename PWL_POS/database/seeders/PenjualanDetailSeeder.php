<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data=[];
        $id=1;

        for($penjualan=1;$penjualan<=10;$penjualan++){
            for($i=1;$i<=3;$i++){
                $data[]=[
                    'detail_id'=>$id++,
                    'penjualan_id'=>$penjualan,
                    'barang_id'=>rand(1,15),
                    'jumlah'=>rand(1,5),
                    'harga'=>rand(5000,20000)
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}