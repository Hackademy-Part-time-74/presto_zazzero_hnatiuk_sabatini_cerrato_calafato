<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    // Mostra gli articoli da revisionare
    public function index(){
        $article_to_check=Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('article_to_check'));
    }
    
    // Metodo per accettare gli articoli
    public function accept(Article $article, string $routeName){
        $article->setAccepted(true);
        return redirect(route($routeName))->with('message', "Hai accettato l'articolo $article->title");
    }

    // Metodo per rifiutare gli articoli
      public function reject(Article $article, string $routeName){
        $article->setAccepted(false);
        return redirect(route($routeName))->with('message', "Hai rifiutato l'articolo $article->title");
    }

    // Metodo che mostra tutti gli articoli creati in Zona Revisore in ordine discendente
    public function articleTable() 
    {
        $articles = Article::whereNotNull('is_accepted')->orderBy('created_at','desc')->paginate(4);

        return view('revisor.index-status', [
            'articles' => $articles,
        ]);
    } 

    // Metodo che modifica lo stato di un articolo da accettato a rifiutato e viceversa
    public function modifyStatus(Article $article) 
    {
        return view('revisor.modify-status', [
            'article' => $article,
        ]);
    }

    // Metodo che invia la richiesta di diventare revisor e accettazione richiesta
    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('homepage')->with('message', 'Complimenti, hai richiesto di diventare revisor!');
    }

    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor', ['email' => $user->email]); 
        return redirect()->back();
    }

}
