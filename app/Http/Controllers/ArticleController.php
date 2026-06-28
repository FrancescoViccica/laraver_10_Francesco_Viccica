<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $articles = Article::all(); 
        return view('article.index', compact('articles'));
    }

    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        return view('article.create');
    }

    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        // È consigliato validare i dati anche in creazione
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'body' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'img' => $request->file('img')->store('img', 'public') // Salva in storage/app/public/img
        ]);

        return redirect()->back()->with('message', 'articolo inserito con successo');
    }

    /**
    * Display the specified resource.
    */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Article $article)
    {
         return view('article.edit', compact('article'));
    }

    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'body' => 'required|string',
            'img' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->body = $request->body;

        if ($request->hasFile('img')) {
            // Elimina la vecchia immagine dallo storage public se esiste
            if ($article->img) {
                Storage::disk('public')->delete($article->img);
            }
            // Salva la nuova immagine nello stesso percorso del metodo store
            $article->img = $request->file('img')->store('img', 'public');
        }

        $article->save();

        return redirect()->route('article.index')->with('message', 'Articolo aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        // Elimina l'immagine dal disco 'public' prima di cancellare il record
        if ($article->img) {
            Storage::disk('public')->delete($article->img);
        }

        Article::destroy($article->id);

        return redirect()->route('article.index')->with('message', 'Articolo eliminato definitivamente.');
    }
}
