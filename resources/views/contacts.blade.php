<x-layout>
  
  
  
  
  {{-- Header --}}
  
  <div class="container-fluid contact_header">
    
    {{-- SOCIAL --}}
    <div class="row vh-75 justify-content-around align-items-center">
      <div class="col-12 h-25 justify-content-center align-items-center">
        <h2 class="text-white text-center text-color display-5">Contattaci</h2>
      </div>
      
      <div class="col-md-3 text-center custom-box d-flex flex-column justify-content-center align-items-center text-white">
        
        
        {{-- WHATSAPP --}}
        <div class="row">
          
          <div class="col-12">
            <i class="icon bi bi-whatsapp"></i>
          </div>
          
        </div>
        
        <div class="row">
          
          <div class="col-12">
            <p>Scrivici su Whatsapp</p>
          </div>
          
        </div>
        
        
        
      </div>
      
      
      {{-- INSTAGRAM --}}
      <div class="col-md-3 text-center custom-box d-flex flex-column justify-content-center align-items-center text-white">
        
        <div class="row">
          
          <div class="col-12">
            <i class="icon bi bi-instagram"></i>
          </div>
          
        </div>
        
        <div class="row">
          
          <div class="col-12">
            <p>Seguici su Instagram</p>
          </div>
          
        </div>
        
        
      </div>
      
      {{-- TIK TOK --}}
      <div class="col-md-3 text-center custom-box d-flex flex-column justify-content-center align-items-center text-white">
        
        <div class="row">
          
          <div class="col-12">
            <i class="icon bi bi-tiktok"></i>
          </div>
          
        </div>
        
        <div class="row">
          
          <div class="col-12">
            <p>Seguici su TikTok</p>
          </div>
          
        </div>
        
        
      </div>
    </div>
    
    {{-- FORM --}}
    
    <div class="row vh-100 justify-content-center align-items-center">
      <h2 class="text-white display-4 text-color text-center">Ci puoi anche scrivere!!</h2>
      
      <div class="col-12 col-md-8 text-white text-color">
        
        
        <x-display_message/>

        <x-display_error/>
        
        
        <form method="POST" action="{{ route('send_email') }}">
          @csrf
          
          <div class="mb-3">
            <label for="userName" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="userName" aria-describedby="emailHelp">
          </div>
          
          
          <div class="mb-3">
            <label for="userEmail" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="userEmail" aria-describedby="emailHelp">
          </div>
          
          <div class="mb-3">
            <label for="userText" class="form-label">Scrivici qualcosa</label>
            <textarea name="description" id="userText" cols="80" rows="10"></textarea>
            
          </div>
          
          
          <button type="submit" class="btn btn-primary">Invia</button>
        </form> 
        
        
        
      </div>
      
    </div>
    
  </div>
  
</x-layout>