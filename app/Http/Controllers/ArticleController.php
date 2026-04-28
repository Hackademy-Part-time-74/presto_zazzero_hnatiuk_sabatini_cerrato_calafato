<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ArticleController extends Controller implements HasMiddleware
{

    public static function middleware(): array
    {
        return [
            new Middleware('auth', only: ['create']),
        ];
    }

    public function create() 
    {
        return view('article.create');
    }

    public function show(Article $article)
    {
        return view('article.show',compact('article'));
    }
    
    public function byCategory()
    {
        return view('article.byCategory',[
            'articles' => $category->articles,
            'category' => $category,
        ]);
    }
}
