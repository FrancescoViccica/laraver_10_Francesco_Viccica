<div class="card my-3" style="width: 18rem;">
          {{-- <img src="{{ $img }}" class="card-img-top cardImg" alt=" immagine di {{ $title }}"> --}}
          <img src="{{Storage::url($article->img)}}" class="card-img-top cardImg" alt=" immagine della card">

          <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p class="card-text">{{ $article->subtitle }}</p>
            <p class="card-text">{{ $article->body }}</p>

            <a href="{{route('article.show' , compact('article'))}}" class="btn btn-primary">scopri in dettaglio</a>
            
            {{-- <a href="{{ route('dettaglio.articoli', ['id'=>$articleId]) }}" class="btn btn-primary">scopri in dettaglio</a> --}}
          </div>
        </div>