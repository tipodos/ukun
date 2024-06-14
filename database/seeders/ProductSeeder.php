<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void{

        $category1 = Category::where('nombre', 'camas')->first();
        $category2 = Category::where('nombre', 'lamparas')->first();

        $product= new Product();
        $product->name="cama";
        $product->description="De plaza y media";
        $product->price="500";
        $product->image="1716471116.jpg";
        $product->category_id=$category1->id;
        $product->save();

        $product1= new Product();
        $product1->name="lampara";
        $product1->description="De 2 años de duración";
        $product1->price="60";
        $product1->image="1716471337.jpg";
        $product1->category_id=$category2->id;
        $product1->save();
    }
        
}
