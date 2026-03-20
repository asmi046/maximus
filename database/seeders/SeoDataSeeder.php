<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => '/',
                'seo_title' => 'Лечение наркомании в Курске',
                'seo_description' => 'Реабилитационный центр «Максимус» в Курске предлагает эффективные программы лечения наркомании. Наши специалисты помогут вам или вашим близким избавиться от зависимости и начать новую жизнь.',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],

        ];

        DB::table('seo_data')->insert($data);
    }
}
