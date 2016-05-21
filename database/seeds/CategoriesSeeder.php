<?php

use Illuminate\Database\Seeder;
use Lifetutor\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'title' => 'Schule'
            ],
            [
                'title' => 'Studium'
            ],
            [
                'title' => 'Ausbildung'
            ],
            [
                'title' => 'Beruf'
            ],
            [
                'title' => 'Erste Wohnung'
            ],
            [
                'title' => 'Urlaub'
            ],
            [
                'title' => 'Versicherung'
            ]
        ];

        foreach($categories as $category)
        {
            Category::create($category);
        }
    }
}
