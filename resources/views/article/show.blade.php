<x-layout>
  
  
  
  
  {{-- Header --}}
  <div class="container-fluid articoli">
    <div class="row h-100 justify-content-center">
      
      <x-display_message/>
      
      
      {{-- @dd($articoli) --}}
      <div class="row p-5">
        <h2 class="display-5 text-white text-center text-color">Articolo {{$article->id}}</h2>
      </div>
      
      <div class="col-12 col-md-3 my-5">
       <div class="card my-3" style="width: 18rem;">
          {{-- <img src="{{ $img }}" class="card-img-top cardImg" alt=" immagine di {{ $title }}"> --}}
          <img src="{{Storage::url($article->img)}}" class="card-img-top cardImg" alt=" immagine della card">

          <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p class="card-text">{{ $article->subtitle }}</p>
            <p class="card-text">{{ $article->body }}</p>

            {{-- <a href="{{route('article.show',compact('article'))}}" class="btn btn-primary">scopri in dettaglio</a> --}}
            
            {{-- <a href="{{ route('dettaglio.articoli', ['id'=>$articleId]) }}" class="btn btn-primary">scopri in dettaglio</a> --}}
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
</x-layout>