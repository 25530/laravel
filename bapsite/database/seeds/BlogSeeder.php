<?php

use Illuminate\Database\Seeder;
use App\Blog;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 200; $i++){
            $data = new data();
            $data->title = 'data' . $i;
            $data->text = 'hoi hidde';
            $data->tijd = '0:00';
            $data->pub_date = new \DateTime();
            $data->save();
        }
    }
}
