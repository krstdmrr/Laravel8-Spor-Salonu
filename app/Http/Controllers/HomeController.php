<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getSetting()
    {
        return Setting::first();
    }

    public static function countreview($id){
        return Review::where('product_id',$id)->count();
    }
    public static function avrgreview($id){
        return Review::where('product_id',$id)->average('rate');
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Product::select('id', 'title', 'image', 'price', 'slug')->limit(4)->get();
        $daily = Product::select('id', 'title', 'image', 'price', 'months', 'slug','trainer')->limit(3)->inRandomOrder()->get();

        //print_r($daily);
        //exit();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'daily' => $daily,
            'page' => 'home'];

        return view('home.index', $data);
    }

    public function product($id, $slug)
    {
        $data = Product::find($id);
        $datalist = Image::where('product_id', $id)->get();
        $review = Review::where('product_id', $id)->get();
        //print_r($data);
        //exit();
        return view('home.product_detail', ['data' => $data, 'datalist' => $datalist,'review'=>$review]);
    }

    public function getproduct(Request $request)
    {
        $search = $request->input('search');
        $count = Product::where('title', 'like', '%' . $search . '%')->get()->count();
        if ($count == 1) {
            $data = Product::where('title', 'like', '%' . $search . '%')->first();
            return redirect()->route('product', ['id' => $data->id, 'slug' => $data->slug]);
        } else {
            return redirect()->route('productlist', ['search' => $search]);
        }
    }
        public function productlist($search){
        $datalist=Product::where('title','like','%'.$search.'%')->get();
        return view('home.search_products',['search'=>$search,'datalist'=>$datalist]);
        }

    public function addtocart($id)
    {
        $data = Product::find($id);
        return view('home.user_order_add',['data'=>$data]);
    }

    public function categoryproducts($id, $slug)
    {
        $datalist = Product::where('category_id', $id)->get();
        $data = Category::find($id);
        //print_r($data);
        //exit();
        return view('home.category_products', ['data' => $data, 'datalist' => $datalist]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function gallery()
    {
        return view('home.about');
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);
    }

    public function faq()
    {
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq', ['datalist' => $datalist]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('home');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',]);
        } else {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
