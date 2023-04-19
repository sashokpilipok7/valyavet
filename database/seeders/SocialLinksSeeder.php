<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SocialLink;

class SocialLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socials = [
            [
                'link' => 'telegram',
                'title' => 'telegram'
            ],
            [
                'link' => 'viber',
                'title' => 'viber'
            ],
        ];

        foreach ($socials as $social) {
            SocialLink::updateOrCreate(['title' => $social['title']], [
                'link' => $social['link'],
                'title' => $social['title']
            ]);
        }
    }
}
