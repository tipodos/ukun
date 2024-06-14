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
        $category1 = new Category();
        $category1 -> nombre = 'camas';

        $category1-> save();

        $category2 = new Category();
        $category2-> nombre ='lamparas';
        $category2->save();
    }
}
