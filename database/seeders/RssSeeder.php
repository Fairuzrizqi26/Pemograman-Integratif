<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rss;

class RssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rss::create([
            //'name' => 'Culture',
            //'url' => "https://www.france24.com/en/culture/rss"
            //'name' => 'Nasa',
            //'url' => "https://www.nasa.gov/rss/dyn/breaking_news.rss"
            'name' => 'Tekno',
            'url' => "https://esportv.org/rss/category/rainbow-6" 
        ]);
    }
}