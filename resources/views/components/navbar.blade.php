<nav class="bg-info shadow-sm sticky-top customText d-flex flex-wrap 
            align-items-center justify-content-center justify-content-md-between 
            p-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img src="{{ asset('images/logo_Presto.png') }}" width="50" height="50" alt="Logo">
        </a>
    </div>

    
    <ul class="nav col-12 col-md-auto justify-content-center mb-md-0">
        <li><a href="/" class="hover-grow nav-link px-2 link-dark hover-link">Home</a></li>
        <li><a href="{{ route ('article.index') }}" class="hover-grow nav-link text-black">Articoli</a></li>
        <li class="nav-item dropdown">
            <a href="#" class="hover-grow nav-link dropdown-toggle text-black" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li>
                    <a href="{{ route('byCategory',['category'=>$category]) }}" class="text-black dropdown-item text-capitalize">{{ $category->name }}</a>
                </li>
                @if (!$loop->last)
                <hr class="dropdown-divider">
                @endif
                @endforeach
            </ul>
        </li>


    </ul>

    @auth
    @if(auth()->user()->is_revisor)
    <ul class="nav col-12 col-md-auto justify-content-center mb-md-0">
        <a href="{{ route('revisor.index') }} " class="nav-link btn btn-outline-warning btn-sm text-black">Zona revisore</a>
    </ul>
    @endif
    <button class="hover-grow btn btn-warning border border-3 border-warning text-black"><a href="{{ route('create.article') }}" class="nav-link px-2">Crea Articolo<i class="bi bi-journal-plus ms-2"></i></a></button>

    <div class="d-flex p-2 justify-content-center">        
        <ul class="nav-item dropdown">
            <a href="#" class="hover-grow nav-link dropdown-toggle mt-3 text-black" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao {{ auth()->user()->name }} <i class="bi bi-person-fill"> </i></a>
            <li class="dropdown-menu">
                <ul>
                    <form action="{{ route('logout')}}" method="POST" id="form-logout">
                    @csrf
                        <button type="submit" class="btn text-black">Esci<i class="bi bi-door-open ms-2"></i></button>
                    </form>
                </ul>
            </li>
        </ul>
    </div>

    @else
    <div class="col-md-3 text-end">

        <button type="button" class="hover-grow btn btn-sm btn-outline-warning border border-3 border-warning px-4 me-3">
            <a href="{{ route('login')}}" class="text-black"> Login <i class="bi bi-box-arrow-in-right"></i></a>
        </button>

        <button type="button" class="hover-grow btn btn-sm btn-outline-warning border border-3 border-warning">
            <a href="{{ route('register')}}" class="text-black">Registrati <i class="bi bi-person-fill-add"></i></a>
        </button>
    </div>
    @endauth
</nav>