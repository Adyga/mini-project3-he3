<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Science',
         ]);
        DB::table('categories')->insert([
            'name' => 'Fine Art',
        ]);
        DB::table('categories')->insert([
            'name' => 'History',
        ]);
    }

}
