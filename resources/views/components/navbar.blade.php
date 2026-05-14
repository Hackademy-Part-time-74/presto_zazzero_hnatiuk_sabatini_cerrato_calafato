<nav class="bg-info shadow-sm sticky-top customText d-flex flex-wrap
            align-items-center justify-content-center justify-content-md-between
            p-3 mb-4 border-bottom">
    <div class="col-md-auto mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img src="{{ asset('images/logo_Presto.png') }}" width="50" height="50" alt="Logo">
        </a>
    </div>

    @auth
    @if(auth()->user()->is_revisor)
    <ul class="nav col-12 col-sm-auto col-md-auto justify-content-center mb-md-0 position-relative">
        <a href="{{ route('revisor.index') }} " class="hover-grow nav-link text-black "> {{ __('ui.revisorZone') }}
            <span class="badge bg-warning mt-2 rounded-3 text-black">{{ \App\Models\Article::toBeRevisedCount() }}</span>
        </a>
    </ul>
    @endif
    @endauth

    <ul class="nav col-12 col-md-auto justify-content-center mb-md-0">
        <li><a href="/" class="hover-grow nav-link px-2 link-dark hover-link">{{ __('ui.home') }}</a></li>
        <li><a href="{{ route ('article.index') }}" class="hover-grow nav-link text-black">{{ __('ui.articles') }}</a></li>
        <li class="nav-item dropdown">
            <a href="#" class="hover-grow nav-link dropdown-toggle text-black" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ __('ui.categories') }}</a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                <li>
                    <a href="{{ route('byCategory',['category'=>$category]) }}" class="text-black dropdown-item text-capitalize"> {{ __("ui.$category->name") }}</a>
                </li>
                @if (!$loop->last)
                <hr class="dropdown-divider">
                @endif
                @endforeach
            </ul>
        </li>
    </ul>

    <form class="d-flex md-auto me-4" role="search" action="{{ route('article.search') }}" method="GET">
        <div class="input-group">
            <input class="form-control" type="search" name="query" placeholder="{{ __('ui.search') }}" aria-label="Search"/>
            <button class="input-group-text btn btn-outline-warning" type="submit" id="basic-addon2"><i class="bi bi-search"></i></button>
        </div>
    </form>


    <x-_locale lang="it"/>
    <x-_locale lang="uk"/>
    <x-_locale lang="es"/>

    @auth
    @if(!auth()->user()->is_revisor)
     <button class="hover-grow btn btn-sm btn-warning border border-3 border-warning text-black"><a href="{{ route('create.article') }}" class="nav-link px-2">{{ __('ui.createArticle') }}<i class="bi bi-journal-plus ms-2"></i></a></button>
    @endif
    <div class="d-flex p-2 justify-content-center">
        <ul class="nav-item dropdown">
            <a href="#" class="hover-grow nav-link dropdown-toggle mt-3 text-black" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('ui.hello') }} {{ auth()->user()->name }} <i class="bi bi-person-fill"> </i></a>
            <li class="dropdown-menu">
                <ul class="hover-exit">
                    <form action="{{ route('logout')}}" method="POST" id="form-logout" >
                    @csrf
                        <button type="submit" class="btn btn-sm text-black">{{ __('ui.logout') }}<i class="bi bi-door-open ms-2"></i></button>
                    </form>
                </ul>
            </li>
        </ul>
    </div>

    @else
    <div class="col-md-8 col-lg-3 justify-md-content-center text-end py-2">

        <button type="button" class="hover-grow btn btn-sm btn-outline-warning border border-3 border-warning px-4 me-3">
            <a href="{{ route('login')}}" class="text-black"> {{ __('ui.login') }}<i class="bi bi-box-arrow-in-right"></i></a>
        </button>

        <button type="button" class="hover-grow btn btn-sm btn-outline-warning border border-3 border-warning">
            <a href="{{ route('register')}}" class="text-black">{{ __('ui.register') }} <i class="bi bi-person-fill-add"></i></a>
        </button>

    </div>
    @endauth
</nav>
