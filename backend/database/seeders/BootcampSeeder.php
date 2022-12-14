<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bootcamp;
use File;
use Illuminate\Support\Facades\Hash;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. Leer el archivo users.json
        $json=File::get("database/_data/bootcamps.json");
        //2. convertir el contenido json a un arreglo
        $arreglo=json_decode($json);
        var_dump($arreglo);
        //3. recorrer el arreglo en php
        foreach($arreglo as $b){
            //4. por cada uno de los elementos del areglo crear user
            $newBootcamp = new Bootcamp();
            $newBootcamp->name = $b->name;
            $newBootcamp->website = $b->website;
            $newBootcamp->phone = $b->phone;
            $newBootcamp->user_id = $b->user_id;
            $newBootcamp->description = $b->description;
            $newBootcamp->average_cost = $b->average_cost;
            $newBootcamp->average_rating = $b->average_rating;
            $newBootcamp->save();

        }
    }
}
