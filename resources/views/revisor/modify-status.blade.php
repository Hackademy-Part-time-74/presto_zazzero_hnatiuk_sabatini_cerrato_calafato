<x-layout>
    <div class="container-fluid pt-5">
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
            <div class="col-4 ps-4 d-flex flex-column justify-content-between rounded-2 shadow-lg p-3">
                <div class="justify-content-center">
                    <h2>Titolo: {{ $article->title }}</h2>
                    <h3>Autore: {{ $article->user->name }} </h3>
                    <h4>Prezzo: {{ $article->price }}€ </h4>
                    <h4 class="text-muted">Categoria: {{ $article->category->name }}</h4>
                    <h6> Descrizione: {{ $article->description }}</h6>
                </div>
                <div class="d-flex pb-4 justify-content-around">
                    <form action="{{ route('reject',['article'=>$article]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                    </form>
                    <form action="{{ route('accept',['article'=>$article]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
                    </form>
                </div>
            </div>
        </div>

        @if (session()->has('message'))
           <div class="row justify-content-center mt-4 p-2">
                <a href="{{ route('revisor.index-status') }}" class="btn btn-sm btn-warning w-25">Torna all'elenco</a>   
           </div>
        @endif
    </div>
</x-layout>