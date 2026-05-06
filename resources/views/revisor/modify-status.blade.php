<x-layout>
    <div class="container pt-5">
        <div class="row justify-content-center mb-5">
            <div class="col-12">
                <div class="rounded justify-content-center">
                    <h1 class="display-5 text-center pb-2 ">Revisiona articolo</h1>
                </div>
            </div>
        </div>



        @if(session()->has('message'))
        <div class="row justify-content-center">
            <div class="col-5 alert alert-secondary text-center shadow rounded w-25">
                {{session('message')}}
            </div>
        </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-6">
                 <img src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">
            </div>
            <div class="col-6 ps-4 d-flex flex-column justify-content-between rounded-2 shadow-lg p-3">
                <div class="justify-content-around">
                    <h2>Titolo: {{ $article->title }}</h2>
                    <h3>Autore: {{ $article->user->name }} </h3>
                    <h4>Prezzo: {{ $article->price }}€ </h4>
                    <h4>Categoria: {{ $article->category->name }}</h4>
                    <h6 class="mt-3"> Descrizione: {{ $article->description }}</h6>
                </div>
                <div class="d-flex py-4 justify-content-around align-items-center">
                    <h5 class="mt-2">Stato :
                        @if ($article->is_accepted)
                        <span class="text-success">Accettato</span>
                        @else
                        <span class="text-danger">Rifiutato</span>
                        @endif
                    </h5>
                    @if ($article->is_accepted)
                    <form action="{{ route('reject',['article'=>$article, 'routeName'=>'revisor.index-status']) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                    </form>
                    @else
                    <form action="{{ route('accept',['article'=>$article, 'routeName'=>'revisor.index-status']) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>

  
    </div>
</x-layout>