<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'id' => '1',
            'category_name' => 'أكلات ',
            'photo' => '',
            'collection_id' => '1',
            'need_subscription' => false
        ]);

          Category::create([
            'id' => '2',
            'category_name' => 'ولا كلمه ',
            'photo' => '',
            'collection_id' => '1',
            'need_subscription' => false
        ]);

          Category::create([
            'id' => '3',
            'category_name' => ' براندات',
            'photo' => '',
            'collection_id' => '1',
            'need_subscription' => false
        ]);

          Category::create([
            'id' => '4',
            'category_name' => ' مسلسلات وأفلام',
            'photo' => '',
            'collection_id' => '1',
            'need_subscription' => false
        ]);

           Category::create([
            'id' => '5',
            'category_name' => 'أغاني وشعر',
            'photo' => '',
            'collection_id' => '1',
            'need_subscription' => false
        ]);


           Category::create([
            'id' => '6',
            'category_name' => ' تاريخ',
            'photo' => '',
            'collection_id' => '1',
            'need_subscription' => false
        ]);


           Category::create([
            'id' => '7',
            'category_name' => 'لهجات',
            'photo' => '',
            'collection_id' => '1',
            'need_subscription' => false
        ]);

           Category::create([
            'id' => '8',
            'category_name' => 'أمثله شعبيه',
            'photo' => '',
            'collection_id' => '1',
            'need_subscription' => false
        ]);
    }
}
