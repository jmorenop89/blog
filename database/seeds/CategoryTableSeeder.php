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
        // Borra los datos de la tabla
        DB::table('category')->delete();
        // Truncate
        #DB::table('category')->truncate();
        // LLenar los datos
        DB::table('category')->insert([
            
            [
                'name' => 'Noticias',
                'slug' => str_slug('Noticias'),
            ],
            [
                'name' => 'Politica',
                'slug' => str_slug('Politica'),
            ],
            [
                'name' => 'Tecnologia',
                'slug' => str_slug('Tecnologia'),
            ],
            [
                'name' => 'Gestion de TI',
                'slug' => str_slug('Gestion de TI'),
            ],
            [
                'name' => 'Sistemas e Informatica',
                'slug' => str_slug('Sistemas e Informatica'),
            ]
            
        ]);
    }
}
