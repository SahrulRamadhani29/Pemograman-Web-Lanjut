<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id'=>1,'kategori_id'=>1,'supplier_id'=>1,'barang_kode'=>'BRG01','barang_nama'=>'Nasi Instan','harga_beli'=>3000,'harga_jual'=>5000],
            ['barang_id'=>2,'kategori_id'=>1,'supplier_id'=>1,'barang_kode'=>'BRG02','barang_nama'=>'Mie Instan','harga_beli'=>2000,'harga_jual'=>3500],
            ['barang_id'=>3,'kategori_id'=>3,'supplier_id'=>1,'barang_kode'=>'BRG03','barang_nama'=>'Keripik Kentang','harga_beli'=>4000,'harga_jual'=>6000],
            ['barang_id'=>4,'kategori_id'=>3,'supplier_id'=>1,'barang_kode'=>'BRG04','barang_nama'=>'Biskuit','harga_beli'=>5000,'harga_jual'=>7500],
            ['barang_id'=>5,'kategori_id'=>2,'supplier_id'=>1,'barang_kode'=>'BRG05','barang_nama'=>'Teh Botol','harga_beli'=>3500,'harga_jual'=>5000],

            ['barang_id'=>6,'kategori_id'=>2,'supplier_id'=>2,'barang_kode'=>'BRG06','barang_nama'=>'Air Mineral','harga_beli'=>2000,'harga_jual'=>4000],
            ['barang_id'=>7,'kategori_id'=>2,'supplier_id'=>2,'barang_kode'=>'BRG07','barang_nama'=>'Kopi Sachet','harga_beli'=>1500,'harga_jual'=>3000],
            ['barang_id'=>8,'kategori_id'=>1,'supplier_id'=>2,'barang_kode'=>'BRG08','barang_nama'=>'Roti Tawar','harga_beli'=>6000,'harga_jual'=>8500],
            ['barang_id'=>9,'kategori_id'=>3,'supplier_id'=>2,'barang_kode'=>'BRG09','barang_nama'=>'Coklat','harga_beli'=>4000,'harga_jual'=>6500],
            ['barang_id'=>10,'kategori_id'=>3,'supplier_id'=>2,'barang_kode'=>'BRG10','barang_nama'=>'Wafer','harga_beli'=>3500,'harga_jual'=>5500],

            ['barang_id'=>11,'kategori_id'=>5,'supplier_id'=>3,'barang_kode'=>'BRG11','barang_nama'=>'Pulpen','harga_beli'=>2000,'harga_jual'=>3500],
            ['barang_id'=>12,'kategori_id'=>5,'supplier_id'=>3,'barang_kode'=>'BRG12','barang_nama'=>'Buku Tulis','harga_beli'=>4000,'harga_jual'=>6000],
            ['barang_id'=>13,'kategori_id'=>4,'supplier_id'=>3,'barang_kode'=>'BRG13','barang_nama'=>'Lampu LED','harga_beli'=>15000,'harga_jual'=>20000],
            ['barang_id'=>14,'kategori_id'=>4,'supplier_id'=>3,'barang_kode'=>'BRG14','barang_nama'=>'Kabel Charger','harga_beli'=>12000,'harga_jual'=>17000],
            ['barang_id'=>15,'kategori_id'=>4,'supplier_id'=>3,'barang_kode'=>'BRG15','barang_nama'=>'Mouse Komputer','harga_beli'=>30000,'harga_jual'=>40000]
        ];

        DB::table('m_barang')->insert($data);
    }
}