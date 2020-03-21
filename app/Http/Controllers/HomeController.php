<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{

    public  $menu_categories;
    public function __construct()
    {
    //   $this->middleware('auth');
       $this->menu_categories = Category::all();
    //    dd($this->menu_categories);
    }
    public function index()
    {
        $product = Product::all();
        return view('frontend.index')->with('product',$product)
                                     ->with('menu_categories',$this->menu_categories);
    }

    public function product($id)
    {
        $category = Category::find($id);
        return view('frontend.product')->with('category',$category)
                                       ->with('menu_categories',$this->menu_categories);
    }

    public function product_detail($id)
    {
        $product = Product::find($id);
        return view('frontend.product_detail')->with('product',$product)
                                              ->with('menu_categories',$this->menu_categories);
    }
}




