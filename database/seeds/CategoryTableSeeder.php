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
        //

        $category =new \App\Category();
        $category->nom = "Asie";
        $category->is_online = 1;
        $category->save();

        $category =new \App\Category();
        $category->nom = "Europe";
        $category->is_online = 1;
        $category->save();

        $category =new \App\Category();
        $category->nom = "Afrique";
        $category->is_online = 1;
        $category->save();

        $category =new \App\Category();
        $category->nom = "Océanie";
        $category->is_online = 1;
        $category->save();

        $category =new \App\Category();
        $category->nom = "Amérique";
        $category->is_online = 1;
        $category->save();
    }
}
