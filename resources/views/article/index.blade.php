<x-layout>
  
  
  
  
  {{-- Header --}}
  <div class="container-fluid articoli">
    <div class="row h-100 justify-content-center">
      
      <x-display_message/>
      
      
      {{-- @dd($articoli) --}}
      <div class="row">
        <h2 class="display-5 text-white text-center text-color">I MIEI ARTICOLI</h2>
      </div>
      @foreach ($articles as $article )
      
      <div class="col-12 col-md-3 my-5 ">
        <x-article_card

        :article="$article"
        
        {{-- title="{{ $merch['title'] }}"
        genres="{{ $merch['genres'] }}"
        articleId="{{ $merch['id'] }}"
        img="{{ $merch['img'] }}" --}}
        
        ></x-article_card>
      </div>
      
      @endforeach
    </div>
  </div>
  
</x-layout>