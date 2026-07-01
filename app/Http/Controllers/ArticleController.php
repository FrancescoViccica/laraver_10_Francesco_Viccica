<?php

namespace App\Http\Controllers;
use \App\Models\Tag;
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
        $tags = Tag::all(); // Recupera tutti i tag dal database
        return view('article.create', compact('tags'));     
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

        $article = Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'img' => $request->file('img')->store('img', 'public') // Salva in storage/app/public/img
        ]);

        $article->tags()->attach($request->tags); // Associa i tag selezionati all'articolo

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
        $tags = Tag::all(); // Recupera tutti i tag dal database
         return view('article.edit', compact('article', 'tags'));
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

        $article->tags()->sync($request->tags); // Aggiorna i tag associati all'articolo

        return redirect()->route('article.index')->with('message', 'Articolo aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {

    $article->tags()->detach(); // Rimuove le associazioni dei tag prima di eliminare l'articolo
    
        // Elimina l'immagine dal disco 'public' prima di cancellare il record
        if ($article->img) {
            Storage::disk('public')->delete($article->img);
        }

        Article::destroy($article->id);

        return redirect()->route('article.index')->with('message', 'Articolo eliminato definitivamente.');
    }
}
