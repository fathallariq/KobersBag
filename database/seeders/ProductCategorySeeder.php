<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
        	'nama' => 'Tas Jinjing',
        	'gambar' => 'tasjinjing.jpg',
        ]);

        DB::table('product_categories')->insert([
        	'nama' => 'Tas Laptop',
        	'gambar' => 'taslaptop.jpg',
        ]);

        DB::table('product_categories')->insert([
        	'nama' => 'Tas Pinggang',
        	'gambar' => 'taspinggang.jpg',
        ]);

        DB::table('product_categories')->insert([
        	'nama' => 'Tas Punggung',
        	'gambar' => 'taspunggung.jpg',
        ]);

        DB::table('product_categories')->insert([
        	'nama' => 'Tas Slempang',
        	'gambar' => 'tasslempang.jpg',
        ]);
    }
}
