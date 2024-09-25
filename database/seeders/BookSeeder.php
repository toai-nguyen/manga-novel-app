<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'bookTitle' => Str::random(10),
            'bookAuthor' => Str::random(10),
            'bookDescription' => Str::random(30),
            'bookPrice' => rand(10, 40)
        ]);
    }
}
