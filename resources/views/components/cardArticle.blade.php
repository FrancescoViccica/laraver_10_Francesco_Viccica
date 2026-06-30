   
   
   
   
   <div class="card my-3" style="width: 18rem;">
          {{-- <img src="{{ $img }}" class="card-img-top cardImg" alt=" immagine di {{ $title }}"> --}}
          <img src="{{Storage::url($merch->img)}}" class="card-img-top cardImg" alt=" immagine della card">

          <div class="card-body">
            
            <h5 class="card-title">{{ $merch->title }}</h5>
            <p class="card-text">{{ $merch->genres }}</p>
            <p class="card-text">Creato da: {{$merch->user->name}}</p>

            {{-- ! Se abbiamo una lista di oggetti con user_id=null possiamo provare a fare cosi per non far rompere il codice --}}
            {{-- <p class="card-text">Creato da: {{ $merch->user?->name ?? 'Utente Anonimo' }}</p> --}}


            <a href="#" class="btn btn-primary">scopri in dettaglio</a>
            
            {{-- <a href="{{ route('dettaglio.articoli', ['id'=>$articleId]) }}" class="btn btn-primary">scopri in dettaglio</a> --}}
          </div>
        </div>

