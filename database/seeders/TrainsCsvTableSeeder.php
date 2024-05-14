<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Train;

class TrainsCsvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // importo treni da csv in modalità read
        $data_string = fopen(__DIR__ . '/trains.csv', 'r');

        // inizializzo un indice
        $i = 0;

        while(($row = fgetcsv($data_string))){

          // parto da quando i > 0 perché la prima riga comprende i nomi delle colonne
          if($i > 0){
            $new_train = new Train();
            $new_train->company = $row[0];
            $new_train->departure_station = $row[1];
            $new_train->arrival_station = $row[2];
            $new_train->departure_time = $row[3];
            $new_train->arrival_time = $row[4];
            $new_train->code = $row[5];
            $new_train->number_of_carriages = $row[6];
            $new_train->on_time = $row[7];
            $new_train->canceled = $row[8];
            $new_train->slug = Str::slug($new_train->company . '-' . $new_train->code, '-');
            $new_train->save();
          }

          // incremento i
          $i++;

        }

        // chiudo il file .csv
        fclose($data_string);
    }
}
