<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     *
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('m_category')->insert([
            'name' => "test",
            'description' => "test1",
            'status' =>"1",
        ]);
    }
}
