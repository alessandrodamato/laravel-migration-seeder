<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //prova statica per vedere il funzionamento
        $new_train = new Train();
        $new_train->company = 'Italo';
        $new_train->departure_station = 'Milano cle';
        $new_train->arrival_station = 'Salerno';
        $new_train->departure_time = '10:20:00';
        $new_train->arrival_time = '16:00:00';
        $new_train->code = '167549382451';
        $new_train->number_of_carriages = 11;
        $new_train->slug = 'italo-167549382451';
        $new_train->save();

    }
}
