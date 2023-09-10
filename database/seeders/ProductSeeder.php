<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(10)->create();
        // DB::table('products')->insert(
        //     [
        //         'name' => 'sample',
        //         'price' => '20',
        //         'created_at'=>Carbon::now(),
        //         'updated_at'=>Carbon::now(),
        //     ]
        // );
    }
}
