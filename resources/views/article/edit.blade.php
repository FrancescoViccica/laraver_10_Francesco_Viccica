<x-layout>
  

        <div class="container-fluid create_header vh-100 edit-header">
        <div class="row justify-content-center">
            <div class="d-flex justify-content-center align-items-center">
                
                <h2 class="text-color text-danger">Modifiche</h2>
                
            </div>
        </div>
  
    <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2 class="text-white mb-4">Modifica Articolo #{{ $article->id }}</h2>

        <form action="{{ route('article.update', compact('article')) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT') {{-- Direttiva fondamentale per indicare il metodo PUT --}}

          <div class="mb-3">
            <label class="form-label text-white">Titolo</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $article->title) }}">
          </div>

          <div class="mb-3">
            <label class="form-label text-white">Sottotitolo</label>
            <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $article->subtitle) }}">
          </div>

          <div class="mb-3">
            <label class="form-label text-white">Corpo del testo</label>
            <textarea name="body" class="form-control" rows="5">{{ old('body', $article->body) }}</textarea>
          </div>

           <div class="mb-3">
                    @foreach ($tags as $tag )
                        
                    <div class="form-check">
                        <input name="tags[]" class="form-check-input" type="checkbox" value="{{$tag->id}}" id="checkDefault" 
                        @if ($article->tags->contains($tag))
                            checked
                        @endif>
                        <label class="form-check-label text-white" for="checkDefault">
                            {{$tag->name}}
                        </label>
                    </div>
                    @endforeach
                    
                </div>

          <div class="mb-3">
            <label class="form-label">Immagine Attuale</label>
            <div class="mb-2">
              <img src="{{ Storage::url($article->img) }}" width="150" class="img-thumbnail" alt="">
            </div>
            <label class="form-label text-white">Sostituisci Immagine (Opzionale)</label>
            <input type="file" name="img" class="form-control">
          </div>

          <button type="submit" class="btn btn-warning">Aggiorna Articolo</button>
        </form>
      </div>
    </div>
  </div>
</x-layout>
