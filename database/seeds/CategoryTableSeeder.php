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
        DB::table('category')->insert([
            
            [
                'name' => 'Noticias',
                'slug' => str_slug('Noticias'),
            ],
            [
                'name' => 'Politica',
                'slug' => str_slug('Politica'),
            ]
            
        ]);
    }
}
