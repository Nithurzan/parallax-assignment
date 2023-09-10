<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->count(10)->create();
        // DB::table('categories')->insert(
        //     [
        //         'name' => 'sample',
        //         'created_at'=>Carbon::now(),
        //         'updated_at'=>Carbon::now(),
        //     ]
        // );
    }
}
