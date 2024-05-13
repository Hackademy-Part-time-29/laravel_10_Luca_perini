<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function ArticlesView(){
        $articles=Article::all();
        return view('articles', compact('articles'));
    }
    public function ArticleCreate(){

        return view('add-article');
    }

    public function store(Request $request){

        $article = Article::create([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        return redirect()->back()->with(['success'=>'Article created successfully!']);
    }

}
