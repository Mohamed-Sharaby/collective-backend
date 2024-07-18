<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = [
            'Awakening',
            'Balance',
            'Blessings',
            'Completion',
            'Creativity',
            'Cycle',
            'Divine',
            'Energetic',
            'Enlightenment',
            'Fulfillment',
            'Grace',
            'Gratitude',
            'Growth',
            'Guidance',
            'Integrity',
            'Integration',
            'Intuition',
            'Magic',
            'Manifestation',
            'Passion',
            'Synchronicity',
            'Synergy',
            'Transformation',
            'Unity',
            'Wisdom',
        ];

        foreach ($sliders as $slider) {
            Slider::create(['title' => $slider]);
        }

    }
}
