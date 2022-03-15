<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = array('Magnus','KABOOM','Pawns','Chess for Life','Ahoy Mate');
        foreach($array as $club){
            Club::updateOrCreate(['name' => $club],['name' => $club]);
        }
       
    }
}
