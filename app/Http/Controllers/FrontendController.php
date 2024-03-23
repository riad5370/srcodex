<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::paginate('6');
        return view('website.index',[
           'products'=>$products 
        ]);
    }
    
    public function aboutus(){
        return view('website.page.aboutus');
    }

    public function categoryProduct($categoryId){
        $categoryName = Category::find($categoryId);
        $category_products = Product::where('category_id', $categoryId)->paginate('16');
        return view('website.page.category_product',[
            'category_products'=>$category_products,
            'category_name' => $categoryName
        ]);
    }
    public function allProduct(){
        $products = Product::all();
        $categories = Category::all();
        return view('website.page.all_product',[
            'products'=>$products,
            'categories'=>$categories,
        ]);
    }

    public function details($slug){
        // $categoryName = Category::find($categoryId);
        // $category_products = Product::where('category_id', $categoryId)->paginate('16');
        $product_info = Product::where('slug',$slug)->first();
        return view('website.page.details_product',[
            'product_info'=>$product_info
        ]);
    }
}
