<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($cat,$product_id){
        $item = Product::where('id', $product_id)->first();

        return view('product.show',[
            'item'=>$item,
        ]);
    }
    public function showCategory(Request $request, $cat_alias){
        $cat = Category::where('alias',$cat_alias)->first();
        $paginate = 2;
        $products = Product::where('category_id', $cat->id)->paginate(2);

        return view('categories.index',[ 
            'cat'=>$cat,
            'products'=>$products,
        ]);
    }
}
