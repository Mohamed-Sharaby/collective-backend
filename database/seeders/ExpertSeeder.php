<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Expert;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experts = [
            [
                'title' => 'Project Management',
                'body' => 'With a strong focus on meeting partner needs, we cultivate long-term
                           relationships founded on trust, integrity, and exceptional service.',
            ],
            [
                'title' => 'Creative thinking',
                'body' => 'We bring a fresh perspective and creative solutions to every challenge.',
            ],
            [
                'title' => 'Digital Marketing',
                'body' => 'Leveraging online platforms and innovative UX/UI design, we craft strategies that
                                        enhance your brand\'s digital presence and engagement.',
            ],
            [
                'title' => 'Content Creation',
                'body' => 'Producing compelling content, we ensure your brand\'s message is communicated
                                        efectively across all mediums.',
            ],
            [
                'title' => 'Brand Strategy',
                'body' => 'Developing robust brand strategies, we help position your brand for success in
                                        the marketplace.',
            ],
            [
                'title' => 'Customer Experience',
                'body' => 'Enhancing the customer journey through personalized marketing, engaging in-store
                                        initiatives, and memorable experiences.',
            ],
            [
                'title' => 'Innovation and Technology',
                'body' => 'Utilizing the latest technology, including artiﬁcial intelligence, to drive
                                        innovation and optimize your brand performance.',
            ],


        ];

        foreach ($experts as $expert) {
            Expert::create($expert);
        }

    }
}
