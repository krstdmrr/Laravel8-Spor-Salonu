<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Review;
use App\Models\Setting;
use Carbon\Carbon;
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
        return Setting::where('status','True')->first();
    }

    public static function countreview($id){
        return Review::where('product_id',$id)->where('status','True')->count();
    }
    public static function avrgreview($id){
        return Review::where('product_id',$id)->where('status','True')->average('rate');
    }

    public function index()
    {
        $setting = Setting::where('status','True')->first();
        $slider = Product::select('id', 'title', 'image', 'price', 'slug')->where('status','True')->limit(6)->get();
        $daily = Product::select('id', 'title', 'image', 'price', 'months', 'slug','trainer')->where('status','True')->limit(3)->inRandomOrder()->get();
        $image = Image::limit(6)->inRandomOrder()->get();

        //print_r($daily);
        //exit();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'daily' => $daily,
            'image' => $image,
            'page' => 'home'];

        return view('home.index', $data);
    }

    public function product($id, $slug)
    {
        $data = Product::find($id);
        $datalist = Image::where('product_id', $id)->get();
        $review = Review::where('product_id', $id)->where('status','True')->get();
        //print_r($data);
        //exit();
        return view('home.product_detail', ['data' => $data, 'datalist' => $datalist,'review'=>$review]);
    }

    public function getproduct(Request $request)
    {
        $search = $request->input('search');
        $count = Product::where('title', 'like', '%' . $search . '%')->where('status','True')->get()->count();
        if ($count == 1) {
            $data = Product::where('title', 'like', '%' . $search . '%')->where('status','True')->first();
            return redirect()->route('product', ['id' => $data->id, 'slug' => $data->slug]);
        } else {
            return redirect()->route('productlist', ['search' => $search]);
        }
    }
        public function productlist($search){
        $datalist=Product::where('title','like','%'.$search.'%')->where('status','True')->get();
        return view('home.search_products',['search'=>$search,'datalist'=>$datalist]);
        }

    public function addtocart($id)
    {
        $data = Product::find($id);
        $dateNow= new Carbon();
        $dateNow=now();

        return view('home.user_order_add',['data'=>$data,'dateNow'=>$dateNow]);
    }

    public function categoryproducts($id, $slug)
    {
        $datalist = Product::where('category_id', $id)->where('status','=','True')->get();
        $data = Category::find($id);
        //print_r($data);
        //exit();
        return view('home.category_products', ['data' => $data, 'datalist' => $datalist]);
    }
    public function categoryproduct()
    {
        $datalist = Product::all()->where('status','=','True')->sortBy('title');
        //print_r($datalist);
        //exit();
        return view('home.category_product', ['datalist' => $datalist]);
    }

    public function aboutus()
    {
        $setting = Setting::where('status','True')->first();
        return view('home.about', ['setting' => $setting]);
    }

    public function gallery()
    {
        return view('home.about');
    }

    public function references()
    {
        $setting = self::getSetting();
        return view('home.references', ['setting' => $setting]);
    }

    public function faq()
    {
        $datalist = Faq::all()->where('status','=','True')->sortBy('position');
        return view('home.faq', ['datalist' => $datalist]);
    }

    public function contact()
    {
        $setting = self::getSetting();
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
