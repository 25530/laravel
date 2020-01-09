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
            $data = new Data();
            $data->title = 'product' . $i;
            $data->save();
        }
    }
} 