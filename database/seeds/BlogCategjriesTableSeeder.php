<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogCategjriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];
        $cName = 'without category';
        $categories[] = [
            'title' => $cName,
            'slug' => str_slug($cName),
            'parent_id' => 0,
        ];

        for ($i = 1; $i <= 10; $i++) {
            $cName = 'category  ' . $i;
            $parentId = ($i > 4) ? 2 : 1;

            $categories[] = [
                'title' => $cName,
                'slug' => str_slug($cName),
                'parent_id' => $parentId,
            ];
        }
        \DB::table('blog_categories')->insert($categories);
    }
}
