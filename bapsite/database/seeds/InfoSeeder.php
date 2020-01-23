<?php

use Illuminate\Database\Seeder;
use App\Data;
class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // db data genereren
        for($i = 0; $i < 200; $i++){
            $data = new data();
            $data->title = 'data' . $i;
            $pub_date = new \DateTime();
            $data->save();
        }
    }
} 