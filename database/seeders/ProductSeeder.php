<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'nama' => 'Goodie Bag Warna Biru Hitam',
            'product_categories_id' => 1,
            'gambar' => 'goodiebagwarnabiruhitam.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Tas Laptop Corduro Semi Kulit Warna Coklat',
            'product_categories_id' => 2,
            'gambar' => 'taslaptopcordurosemikulitwarnacoklat.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Tas Pinggang Motif Tentara',
            'product_categories_id' => 3,
            'gambar' => 'taspinggangmotiftentara.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Tas Pinggang Warna Merah',
            'product_categories_id' => 3,
            'gambar' => 'taspinggangwarnamerah.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Tas Punggung Dua Saku Warna Hitam',
            'product_categories_id' => 4,
            'gambar' => 'taspunggungduasakuwarnahitam.png'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Tas Punggung Empat Saku Warna Biru',
            'product_categories_id' => 4,
            'gambar' => 'taspunggungempatsakuwarnabiru.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Tas Punggung Semi Kulit Tiga Saku',
            'product_categories_id' => 4,
            'gambar' => 'taspunggungsemikulittigasaku.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Tas Punggung Wanita Dua Saku Warna Abu-Abu',
            'product_categories_id' => 4,
            'gambar' => 'taspunggungwanitaduasakuwarnaabuabu.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Tas Punggung Wanita MD1682 Warna Merah',
            'product_categories_id' => 4,
            'gambar' => 'taspunggungwanitamd1682warnamerah.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Tas Punggung Wanita Oskar Warna Orange',
            'product_categories_id' => 4,
            'gambar' => 'taspunggungwanitaoskarwarnaorange.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Tas Slempang Semi Kulit',
            'product_categories_id' => 5,
            'gambar' => 'tasslempangsemikulit.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Tas Slempang Sporty Oskar Warna Hitam',
            'product_categories_id' => 5,
            'gambar' => 'tasslempangsportyoskarwarnahitam.jpg'
        ]);
    }
}
