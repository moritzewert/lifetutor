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
                'title' => 'Schule',
                'description' => 'Alles rund um Schule'
            ],
            [
                'title' => 'Studium',
                'description' => 'Alles rund ums Studium'
            ],
            [
                'title' => 'Ausbildung',
                'description' => 'Alles rund um die Ausbildung'
            ],
            [
                'title' => 'Beruf',
                'description' => 'Alles rund um den Beruf'
            ],
            [
                'title' => 'Erste Wohnung',
                'description' => 'Alles rund um die erste eigene Wohnung'
            ],
            [
                'title' => 'Urlaub',
                'description' => 'Alles rund um den Urlaub'
            ],
            [
                'title' => 'Versicherung',
                'description' => 'Alles rund um Versicherungen'
            ]
        ];

        foreach($categories as $category)
        {
            Category::create($category);
        }
    }
}
