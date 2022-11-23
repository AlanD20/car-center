<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Slide::create([
            'file' => '/uploads/images/slides/1.jpg',
            'type' => 'image',
        ]);
        \App\Models\Slide::create([
            'file' => '/uploads/images/slides/2.jpg',
            'type' => 'image',
        ]);
        \App\Models\Slide::create([
            'file' => '/uploads/videos/slides/bg.mp4',
            'type' => 'video',
        ]);
        \App\Models\Slide::create([
            'file' => '/uploads/images/slides/3.jpg',
            'type' => 'image',
        ]);
        \App\Models\Slide::create([
            'file' => '/uploads/images/slides/4.jpg',
            'type' => 'image',
        ]);
    }
}
