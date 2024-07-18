<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          About::create([
            'title' => 'ABOUT US',
            'body' => 'Collective25 is a dynamic and innovative creative agency dedicated to designing impactful brand journeys.
             Our dedicated team, with over a decade of combined industry expertise,
             delivers resourceful knowledge and experience in managing accounts for regional and multinational
             companies like Nestlé, P&G, Al Jouf and L’Oréal among others.',
        ]);

    }
}
