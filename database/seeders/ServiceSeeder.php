<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title' => 'SERVICES',
            'body' => 'At Collective25, we offer a comprehensive approach to brand empowerment.

From robust brand strategy and digital marketing to retail design, branding, packaging, point of sales solutions and brand activations, we offer tailored services to elevate your brand presence.

Let us amplify your brand across all channels, from traditional to digital, ensuring your message resonates with your audience.',
        ]);

    }
}
