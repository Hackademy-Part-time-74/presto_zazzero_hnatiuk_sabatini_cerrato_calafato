<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PublicController extends Controller
{
    public function homepage()
    {
        $articles = Article::where('is_accepted',true)->orderBy('created_at','desc')-> take(6)->get();
        
        return view('welcome', compact('articles'));
    }
 
        public function searchArticles(Request $request)
    {   
        $query = $request->input('query');
        $articles = collect([]);
       //controllare se esistono articoli dentro la tabella
       if(Article::all()->isNotEmpty()){
           //true: restuiscimi una collezione degli articoli corrispondenti alla ricerca e dalla alla vista
           $articles = Article::search($query  . '*')->where('is_accepted', true)->paginate(10);
        } 
             
        //false:
        return view('article.search',['articles' => $articles, 'query' => $query]);
        //restituiscimi una collezione vuota
    }
}
