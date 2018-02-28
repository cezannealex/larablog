<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Uncategorized'
        ]);

        DB::table('categories')->insert([
            'name' => 'Entertainment'
        ]);
        DB::table('categories')->insert([
            'name' => 'Technology'
        ]);
        DB::table('categories')->insert([
            'name' => 'Life and Social'
        ]);
        DB::table('categories')->insert([
            'name' => 'Sport'
        ]);
    }
}
