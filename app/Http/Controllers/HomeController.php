<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Image;
use App\Models\Product;
use \App\Models\Review;
use League\CommonMark\Context;

class HomeController extends Controller
{
    

    public static function getsetting()
    {      
        return Setting::first();
    }

    public static function categorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function countreview($id)
    {
        return Review::where('product_id',$id)->count();
    }

    public static function avrgreview($id)
    {
        return Review::where('product_id',$id)->average('rate');
    }
    
    public function index()
    {
        $setting=Setting::first();
        $slider=Product::select('id','price','title','image','description','slug')->limit(3)->get();
        $daily=Product::select('id','price','title','image','description','slug')->limit(3)->inRandomOrder()->get();
        $last=Product::select('id','price','title','image','description','slug')->limit(3)->orderByDesc('id')->get();
        $topsales=Product::select('id','price','title','image','description','slug')->limit(12)->orderByDesc('id')->get();       
        
        // print($last);
        // exit();
        $data=[
            'setting'=>$setting,
            'slider'=>$slider,
            'topsales'=>$topsales,
            'daily'=>$daily,
            'last'=>$last,
            'page'=>'home',

        ];
        return view('home.index',$data);
    }

    public function product($id,$slug)
    {
        $data=Product::find($id);
        $datalist=Image::where('product_id',$id)->get();
        $reviews=Review::where('product_id',$id)->get();
        // print($data);
        // exit();
        return view('home.product-detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }

    public function getproduct(Request $request)
    {
        $search=$request->input('search');
        $count=Product::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data=Product::where('title',$request->input('search'))->first();
            return redirect()->route('product',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('productlist',['search'=>$search]);
        }
        
    }

    public function productlist($search)
    {
        $datalist=Product::where('title','like','%'.$search.'%')->get();

        return view('home.search_products',['search'=>$search,'datalist'=>$datalist]);
    }



    public function addtocart($id)
    {
        $data=Product::find($id);
        print($data);
        exit();
        return view('admin.');
    }

    

    public function login()
    {
        return view('admin.login');
    }

    
    public function sendmessage(Request $request)
    {
        $data=new Message();
        $data->name=$request->input('name');
        $data->email=$request->input('email');
        $data->phone=$request->input('phone');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->save();
        return redirect()->route('home_contact-us')->with('success','Message successfully added.','Thank You');
    }

    public function productdetail()
    {
        return view('home.product-detail');
    }

   

    public function productlisting($id,$slug)
    {
        $data=Category::find($id);
        $datalist=Product::where('category_id',$id)->get();
        $datalist2=Image::where('category_id',$id)->get();
        

        return view('home.product-listing',['data'=>$data,'datalist'=>$datalist,'datalist2'=>$datalist2]);
    }



    public function cart()
    {
        return view('home.cart');
    }

    public function checkout()
    {
        return view('home.checkout');
    }

    public function contactus()
    {
        return view('home.contact-us');
    }

    public function compare()
    {
        return view('home.compare');
    }

    public function whishlist()
    {
        return view('home.whishlist');
    }

    public function error404()
    {
        return view('home.404');
    }

    public function about()
    {
        return view('home.about');
    }

    public function register()
    {
        return view('home.contact-us');
    }

    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials=$request->only('email','password');
            if(Auth::attempt($credentials))
            {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors(['email'=>'The provided credentials do not match our records.']);
        }
        else
        {            
            return view('admin.login');
        }
    }

    public function logout (Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
