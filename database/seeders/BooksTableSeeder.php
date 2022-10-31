<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert((array)[
            'name' => "Hobbit",
            'year' => "2001",
            'publication_place' => "Warszawa",
            'pages' => "310",
            'price' => "29.99"
        ]);
        DB::table('books')->insert((array)[
            'name' => "Kolor magii",
            'year' => "2005",
            'publication_place' => "Katowice",
            'pages' => "205",
            'price' => "24.99"
        ]);
        DB::table('books')->insert((array)[
            'name' => "Władca Pierścieni",
            'year' => "2000",
            'publication_place' => "Kraków",
            'pages' => "645",
            'price' => "59.99"
        ]);
    }
}
