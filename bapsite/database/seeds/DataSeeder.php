<?php

use Illuminate\Database\Seeder;
use App\Data;
class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i < 200; $i++){
            $data = new data();
            $data->datum = new \DateTime();
            $data->title = 'data' . $i;
            $data->text = 'hoi hidde';
            $data->locatie = 'een random plek';
            $data->tijd = '0:00';
            $data->save();
        }
    }
}
