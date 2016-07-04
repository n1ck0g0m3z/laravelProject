<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

use App\Article;

use Carbon\Carbon;

use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    public function index()
    {
        //$articles = Article::latest('published_at')->where('published_at','<=',Carbon::now())->get();
        //$articles = Article::latest('published_at')->get();
        $articles = Article::latest('published_at')->published()->get();
        
        return view('articles.index',compact('articles'));
    }
    
    public function show($id)
    {
        $article = Article::findOrFail($id);
        
        //dd($article->created_at->addDays(8)->diffForHumans());
        dd($article->published_at);
        
        /*if (is_null($article)){
            abort(404);
        }*/
        
        return view('articles.show',compact('article'));
    }
    
    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        //validation
        //$this->validate($request, ['title'=>'required','body'=>'required']);
        //$input = Request::all();
        //$input['published_at']=Carbon::now();
        
        Article::create($request->all());
        
        return redirect('articles');
    }
    
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        
        return view('articles.edit',compact('article'));
    }
    
    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        
        $article->update($request->all());
        
        return redirect('articles');
    }
    
}