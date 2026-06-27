<x-layout>
    
    <div class="container-fluid register_header vh-100">
        <div class="row h-50 justify-content-center">
            <div class="d-flex justify-content-center align-items-center">
                
                <h2 class="text-color text-info">Effettua l'accesso</h2>
                
            </div>
        </div>
        
         <div class="container text-info">
        <div class="row my-3 justify-content-center">
            <div class="col-12 col-md-6">
                
                <form action="{{ route('login') }}" method="POST"
                class="p-4 shadow rounded-4 text-info">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        
                    </div>

                    

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>

                    
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    
</x-layout>