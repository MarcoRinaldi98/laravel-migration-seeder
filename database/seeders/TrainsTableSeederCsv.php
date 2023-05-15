<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvContent = Helpers::getCsvContent(__DIR__ . '/trains.csv');
        foreach ($csvContent as $key => $row) {
            if ($key > 0) {
                $newTrain = new Train();
                $newTrain->azienda = $row[0];
                $newTrain->stazione_di_partenza = $row[1];
                $newTrain->stazione_di_arrivo = $row[2];
                $newTrain->orario_di_partenza = $row[3];
                $newTrain->orario_di_arrivo = $row[4];
                $newTrain->codice_treno = $row[5];
                $newTrain->carrozze = $row[6];
                $newTrain->in_orario = $row[7];
                $newTrain->cancellato = $row[8];
                $newTrain->save();
            }
        }
    }
}
