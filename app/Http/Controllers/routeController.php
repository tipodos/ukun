<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\ImgProducto;
USE App\Models\Product;



class routeController extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    public function tienda(Request $request){
        $categories = Category::all();
        $category_id = $request->input('category_id');

        if ($category_id) {
            $products = Product::where('category_id', $category_id)->get();
        } else {
            $products = Product::all();
        }

        return view('tienda', compact('products', 'categories'));
     }
    public function detalle($id){
        $producto=Product::find($id);
         return view('detail', compact('producto'));
    }
    public function contacto(){
        return view('contact');
    }
    public function checkout(){
    return view('checkout');
    }


}
