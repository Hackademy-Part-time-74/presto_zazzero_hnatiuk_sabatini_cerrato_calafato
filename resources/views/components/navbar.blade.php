<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 px-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0"> <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none"> <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                    {{--Logo--}}
                </svg> </a> </div>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2">Features</a></li>
            <li><a href="#" class="nav-link px-2">Pricing</a></li>
            <li><a href="#" class="nav-link px-2">FAQs</a></li>
            <li><a href="#" class="nav-link px-2">About</a></li>
        </ul>
       @auth  
        <p class="mb-0">Ciao, {{ auth()->user()->name }}</p>
        <ul>
            <li><a href="{{ route('create.article') }}" class="nav-link px-2">Crea Articolo</a></li>
        </ul>
        <form action="{{ route('logout')}}" method="POST" id="form-logout">
       @csrf 
       <button type="submit" class="btn btn-sm btn-danger">Esci</button>
       </form>
       @else   
        <div class="col-md-3 text-end"> 
            <button  type="button" class="btn btn-outline-primary me-2">
                <a href="{{ route('login')}}"> Login</a>
            </button>
            <button type="button" class="btn btn-primary">
                <a href="{{ route('register')}}"> Registrati</a>
            </button> 
        </div>
        @endauth
</header>
