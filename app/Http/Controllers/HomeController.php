<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserAddress;
use App\Http\Requests\UserAddressRequest;
use Auth;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Auth::user()->deposit(100);
        $this->middleware(['auth','verified']);
        return view('tailwindcss.home',[
            'orders'=> Auth::user()->orders->take(5),
            'addresses'=>Auth::user()->addresses->take(4),
            'products'=>Auth::user()->favoriteProducts,
        ]);

    }

    /**
     * Change session locale
     * @param  Request $request
     * @return Response
     */
    public function changeCurrency(Request $request)
    {
        Session::put('currency', $request->currency);
        return redirect()->back();
    }

 
    public function faqs()
    {
        // Auth::user()->deposit(100);
        return view('tailwindcss.faqs');
    }

    public function blog()
    {
        return view('tailwindcss.blog');
    }

    public function news()
    {
        return view('tailwindcss.news');
    }
    
    public function about()
    {
        return view('tailwindcss.about');
    }
   
    public function events()
    {
        return view('tailwindcss.events.list');
    }

    public function contact()
    {
        return view('tailwindcss.contact');
    }
   
    public function careers()
    {
        return view('tailwindcss.careers');
    }
}
