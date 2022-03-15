<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = array(
                array('name'=>'mstrout' , 'email' => 'mstrout@msn.com' , 'contact_number' => '9876543210'),
                array('name'=>'dickeyegoistic' , 'email' => 'dickeyegoistic@icloud.com' , 'contact_number' => '9876543210'),
                array('name'=>'boredcathie' , 'email' => 'boredcathie@outlook.com' , 'contact_number' => '9876543210'),
                array('name'=>'sinkmysterious' , 'email' => 'sinkmysterious@optonline.net' , 'contact_number' => '9876543210'),
                array('name'=>'Amelia' , 'email' => 'amelia@gmail.com' , 'contact_number' => '9876543210'),
                array('name'=>'Caroline' , 'email' => 'caroline@gmail.com' , 'contact_number' => '9876543210'),
                array('name'=>'klaudon' , 'email' => 'klaudon@aol.com' , 'contact_number' => '9876543210'),
                array('name'=>'zeller' , 'email' => 'zeller@optonline.net' , 'contact_number' => '9876543210'),
                array('name'=>'yzheng' , 'email' => 'yzheng@yahoo.com' , 'contact_number' => '9876543210'),
                array('name'=>'caidaperl' , 'email' => 'caidaperl@live.com' , 'contact_number' => '9876543210'),
        );
        foreach($array as $club){
            Club::updateOrCreate(['email' => $club],['name' => $club]);
        }
    }
}
