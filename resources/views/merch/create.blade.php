<x-layout>
    
    <div class="container-fluid create_header vh-100">
        <div class="row h-50 justify-content-center">
            <div class="d-flex justify-content-center align-items-center">
                
                <h2 class="text-color text-danger">Inserisci il prodotto che ti piace</h2>
                
            </div>
        </div>
        
        <div class="row justify-content-center text-color text-danger">
            <div class="col-12 col-md-8">
                
                <x-display_error/>
                
                
                <form class=" bg-secondary-subtle rounded-3 p-3" method="POST" action="{{ route('merch.submit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        
                        <label for="title" class="form-label">Nome prodotto</label>
                        <input name='title' value="{{ old('title') }}" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                        
                    </div>
                    
                    <div class="mb-3">
                        
                        <label for="genres" class="form-label">Genere prodotto</label>
                        <input name='genres' value="{{ old('genres') }}" type="text" class="form-control" id="genres" aria-describedby="emailHelp">
                        
                    </div>
                    
                    <div class="mb-3">
                        
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input name='img' type="file" class="form-control" id="img" aria-describedby="emailHelp">
                        
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
</x-layout>