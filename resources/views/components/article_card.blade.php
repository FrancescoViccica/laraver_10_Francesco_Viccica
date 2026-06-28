   
   
   
   
   <div class="card my-3" style="width: 18rem;">
    {{-- <img src="{{ $img }}" class="card-img-top cardImg" alt=" immagine di {{ $title }}"> --}}
    <img src="{{Storage::url($article->img)}}" class="card-img-top cardImg" alt=" immagine della card">
    
    <div class="card-body">
      <h5 class="card-title">{{ $article->title }}</h5>
      <p class="card-text">{{ $article->subtitle }}</p>
      <p class="card-text">{{ $article->body }}</p>
      
      <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">scopri in dettaglio</a>
      
      {{-- <a href="{{ route('dettaglio.articoli', ['id'=>$articleId]) }}" class="btn btn-primary">scopri in dettaglio</a> --}}
      
      <!-- Pulsante Modifica -->
      <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-warning btn-sm">Modifica</a>
      
      <!-- Form Eliminazione -->
      <form action="{{ route('article.destroy', compact('article')) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Sei sicuro di voler eliminare questo articolo?')">
          Elimina
        </button>
      </form>
      
      
    </div>
  </div>
  
  