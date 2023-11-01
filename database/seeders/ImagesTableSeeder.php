<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'name' => 'Image 1', //ESEMPIO
                'apartment_id' => 1, //ESEMPIO
                'description' => 'Lorem ipsum', //ESEMPIO
                'url' => 'url-img-1.jpb', //ESEMPIO
                'front_img' => true,
            ],
            [
                'name' => 'Image 2', //ESEMPIO
                'apartment_id' => 2, //ESEMPIO
                'description' => 'Lorem ipsum', //ESEMPIO
                'url' => 'url-img-2.jpb', //ESEMPIO
                'front_img' => true,
            ],
            [
                'name' => 'Image 3', //ESEMPIO
                'apartment_id' => 3, //ESEMPIO
                'description' => 'Lorem ipsum', //ESEMPIO
                'url' => 'url-img.jpb-3', //ESEMPIO
                'front_img' => true,
            ],
            [
                'name' => 'Image 4', //ESEMPIO
                'apartment_id' => 4, //ESEMPIO
                'description' => 'Lorem ipsum', //ESEMPIO
                'url' => 'url-img.jpb-4', //ESEMPIO
                'front_img' => true,
            ],
            [
                'name' => 'Image 5', //ESEMPIO
                'apartment_id' => 5, //ESEMPIO
                'description' => 'Lorem ipsum', //ESEMPIO
                'url' => 'url-img.jpb-5', //ESEMPIO
                'front_img' => true,
            ],
            [
                'name' => 'Image 6', //ESEMPIO
                'apartment_id' => 6, //ESEMPIO
                'description' => 'Lorem ipsum', //ESEMPIO
                'url' => 'url-img.jpb-6', //ESEMPIO
                'front_img' => true,
            ],
            [
                'name' => 'Image 7', //ESEMPIO
                'apartment_id' => 7, //ESEMPIO
                'description' => 'Lorem ipsum', //ESEMPIO
                'url' => 'url-img.jpb-7', //ESEMPIO
                'front_img' => true,
            ],
            [
                'name' => 'Image 8', //ESEMPIO
                'apartment_id' => 8, //ESEMPIO
                'description' => 'Lorem ipsum', //ESEMPIO
                'url' => 'url-img.jpb-8', //ESEMPIO
                'front_img' => true,
            ],
            [
                'name' => 'Image 9', //ESEMPIO
                'apartment_id' => 9, //ESEMPIO
                'description' => 'Lorem ipsum', //ESEMPIO
                'url' => 'url-img.jpb-9', //ESEMPIO
                'front_img' => true,
            ],
            [
                'name' => 'Image 10', //ESEMPIO
                'apartment_id' => 10, //ESEMPIO
                'description' => 'Lorem ipsum', //ESEMPIO
                'url' => 'url-img.jpb-10', //ESEMPIO
                'front_img' => true,
            ],
        ]);
    }
}
