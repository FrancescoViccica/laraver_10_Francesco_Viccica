<x-layout>
    
    <div class="container-fluid register_header vh-100">
        <div class="row h-50 justify-content-center">
            <div class="d-flex justify-content-center align-items-center">
                
                <h2 class="text-color text-info">Registrati</h2>
                
            </div>
        </div>
        
         <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-12 col-md-6">
                
                <form action="{{ route('register') }}" method="POST"
                class="p-4 shadow rounded-4 text-info">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                        
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    
</x-layout>