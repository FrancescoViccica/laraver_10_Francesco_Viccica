   
   
   
   
   <div class="card my-3" style="width: 18rem;">
    {{-- <img src="{{ $img }}" class="card-img-top cardImg" alt=" immagine di {{ $title }}"> --}}
    <img src="{{Storage::url($article->img)}}" class="card-img-top cardImg" alt=" immagine della card">
    
    <div class="card-body bg-dark text-light">
      <h5 class="card-title">{{ $article->title }}</h5>
      <p class="card-text">{{ $article->subtitle }}</p>
      <p class="card-text">{{ $article->body }}</p>
      
      @if ($article->tags->isNotEmpty()) {{-- METODO 2 (PIU' CORRETTO) --}}
      
      <div class="mb-3">
        @foreach ($article->tags as $tag )
        
        <span class="badge text-bg-primary ">#{{$tag->name}}</span>
        
        @endforeach
      </div>
      
      @endif
        
        <a href="{{route('article.show', compact('article'))}}" class="btn btn-outline-primary">scopri in dettaglio</a>
        
        {{-- <a href="{{ route('dettaglio.articoli', ['id'=>$articleId]) }}" class="btn btn-primary">scopri in dettaglio</a> --}}
        
        <!-- Pulsante Modifica -->
        <a href="{{ route('article.edit', compact('article')) }}" class="btn btn-outline-warning btn-sm">Modifica</a>
        
        <!-- Form Eliminazione -->
        <form action="{{ route('article.destroy', compact('article')) }}" method="POST" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Sei sicuro di voler eliminare questo articolo?')">
            Elimina
          </button>
        </form>
      
    </div>
  </div>
  
  