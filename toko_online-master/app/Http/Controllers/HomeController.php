<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Category;
use App\Photo;
use App\Testimonial;
use App\Type;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';
        $company = Company::find(1);
        $testimonials = Testimonial::all();
        $categories = Category::all();
        $products = Product::paginate(15);
        return view('index', compact('title','company','testimonials','categories','products'));
    }

    public function products()
    {
        $company = Company::find(1);
        $categories = Category::all();
        $products = Product::paginate(15);
        $title = 'Produk';

        return view('products', compact('title', 'products', 'categories', 'company'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $company = Company::find(1);
        $categories = Category::all();
        $products = Product::where('name', 'like', '%' . $keyword . '%')->paginate(15);
        $title = 'Produk';

        return view('products', compact('title', 'products', 'categories', 'company'));
    }

    public function category($cat)
    {
        $cat = str_replace('-', ' ', $cat);
        $company = Company::find(1);
        $categories = Category::all();
        $category = Category::where('category', $cat)->first();
        $products = Product::whereHas('type',function($q) use ($category){
            $q->where('category_id',$category->id);
        })->paginate(15);
        $types = Type::where('category_id', $category->id)->get();
        $title = $category->category;

        return view('category', compact('title','types','products','categories','company'));
    }

    public function type($id, $cat)
    {
        $cat = str_replace('-', ' ', $cat);
        $company = Company::find(1);
        $categories = Category::all();
        $category = Category::where('category', $cat)->first();
        $products = Product::where('type_id', $id)->paginate(15);
        $types = Type::where('category_id', $category->id)->get();
        $type = Type::find($id);
        $title = $type->type;
        
        return view('type', compact('title', 'types', 'products', 'categories', 'company'));
    }

    public function detailsProduct($id, $name)
    {
        $company = Company::find(1);
        $products = new Product;
        $product = $products->findOrFail($id);
        $title = $product->name;
        return view('details-product', compact('title','company','product'));
    }

    public function showAboutUs()
    {
        $company = Company::find(1);
        $title = 'AboutUs';
        return view('about', compact('title','company'));
    }
    
    public function showContactUs()
    {
        $company = Company::find(1);
        $title = 'ContactUs';
        return view('contact', compact('title','company'));
    }

    public function showKategorii()
    {
        $company = Company::find(1);
        $categories = Category::all();
        $title = 'Kategory';
        return view('kategoryy', compact('title','company','categories'));
    }
}
