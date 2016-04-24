<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function aboutPage()
    {
        $url = 'https:<span style="color:red;">//laracasts.com/series/laravel-5-fundamentals/episodes/4</span>';
        return View('index')->with('url',$url);
    }
    
    public function logIn()
    {
        $name = "GomezChris";
        
        $first = 'Fox';
        $last = 'Mulder';
        
        $data = [];
        $data['first'] = 'Douglas';
        $data['last'] = 'Gmo';
        
        /*with([
                'first' => 'Chris',
                'last' => 'Gomez'
            ]);*/
        
        return view('logIn',compact('first','last'));
    }
    
    public function about()
    {
        $url = 'HELLO';
        return view('index')->with('url',$url);
    }
    
    public function add()
    {
        return view('userAdd');
    }
    
    public function app()
    {
        $first = 'Chris';
        return view('app')->with('first',$first);    
    }
    
    public function addMoney()
    {
        return view('payment');
    }
    
    public function moneyList()
    {
        return view('paymentList');
    }
    
    public function contact()
    {
        return view('pages.contact');
    }
}
