<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function aboutPage()
    {
        $url = 'https:<span style="color:red;">//laracasts.com/series/laravel-5-fundamentals/episodes/4</span>';
        $url2 = 'http://qiita.com/mito_log/items/b2ae413e49fc6d208ff9';
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
    
    public function withdrawalList()
    {
        return view('withdrawal_list');
    }
    
    public function subject()
    {
        return view('subject');
    }
    
    public function monthly()
    {
        return view('monthly_total');
    }
    
    public function contact()
    {
        $people = [
            'Taylor Swift', 'Steve Jobs'
        ];
        //$people = [];
        
        
        return view('pages.contact',compact('people'));
    }
}
