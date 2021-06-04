<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Image::factory(200)->create();
        $count = Image::query()->count();
        for ($i =1;$i<= $count;$i++){
            if(!Image::query()->where('product','=',$i)->get() == null){
                $test = Image::query()->firstWhere('product','=',$i)->update(['main'=>1]);
            }
        }
    }
}
