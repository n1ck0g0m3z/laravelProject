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
        return View('web.index')->with('url',$url);
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
        
        return view('web.logIn',compact('first','last'));
    }
    
    public function about()
    {
        $url = 'HELLO';
        return view('web.index')->with('url',$url);
    }
    
    public function add()
    {
        return view('web.userAdd');
    }
    
    public function app()
    {
        $first = 'Chris';
        return view('app')->with('first',$first);    
    }
    
    public function addMoney()
    {
        return view('web.payment');
    }
    
    public function moneyList()
    {
        return view('web.paymentList');
    }
    
    public function withdrawalList()
    {
        return view('web.withdrawal_list');
    }
    
    public function subject()
    {
        return view('web.subject');
    }
    
    public function monthly()
    {
        return view('web.monthly_total');
    }
    
     public function userList()
    {
        return view('web.userList');
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
