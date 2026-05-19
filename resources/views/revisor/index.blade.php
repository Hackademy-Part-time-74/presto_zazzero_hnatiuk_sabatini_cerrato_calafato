<x-layout>
    <div class="container-fluid pt-5">
        <div class="row justify-content-center mb-5">
            <div class="col-12">
                <div class="rounded justify-content-center">
                    <h1 class="display-5 text-center pb-2 ">Revisor Dashboard <a href="{{ route('revisor.index-status') }}" class="btn btn-sm btn-warning ms-5 hover-grow ">Articoli revisionati</a>
                    </h1>
                </div>
            </div>
        </div>



       @if(session()->has('message'))
       <div class="row justify-content-center">
            <div class="col-5 alert alert-secondary text-center shadow rounded">
                {{session('message')}}
            </div>
       </div>
       @endif


        <div class="row justify-content-center pt-5">
            <div class="col-md-6">
                <div class="row justify-content-center">
        @if($article_to_check)
                    @if($article_to_check->images->count())
                    @foreach ($article_to_check->images as $key => $image)
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="row">
                                    <div class="col-md-12  d-flex justify-content-center align-items-center">
                                        <img src="{{ $image->getUrl(600, 600) }}"
                                             alt="Immagine {{ $key + 1 }} dell'articolo {{ $article_to_check->title }}"
                                             class="img-fluid rounded shadow">
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="card-body">
                                            <h5>Labels</h5>
                                            @if ($image->labels)
                                            @foreach ($image->labels as $label)
                                                #{{ $label }},
                                            @endforeach
                                            @else
                                            <p class="fst-italic">No labels</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6">
                                        <div class="card-body">
                                            <h5>Google Vision Ratings</h5>
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                    <div class="text-center mx-auto {{ $image->adult }}"></div>
                                                </div>
                                                <div class="col-10">adult</div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                    <div class="text-center mx-auto {{ $image->violence }}"></div>
                                                </div>
                                                <div class="col-10">violence</div>
                                            </div>
                                            
                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                    <div class="text-center mx-auto {{ $image->spoof }}"></div>
                                                </div>
                                                <div class="col-10">spoof</div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                    <div class="text-center mx-auto {{ $image->racy }}"></div>
                                                </div>
                                                <div class="col-10">racy</div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col-2">
                                                    <div class="text-center mx-auto {{ $image->medical }}"></div>
                                                </div>
                                                <div class="col-10">medical</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                @endif
                </div>
            </div>
            <div class="col-md-6 h-25 ps-4 d-flex flex-column justify-content-between">
                <div>
                    <h2>{{ $article_to_check->title }}</h2>
                    <h3>Autore: {{ $article_to_check->user->name }} </h3>
                    <h4>Prezzo: {{ $article_to_check->price }} € </h4>
                    <h4 class="text-muted">Categoria: {{ $article_to_check->category->name }}</h4>
                    <p class="h6">{{ $article_to_check->description }}</p>
                </div>
            <div class="d-flex pb-4 justify-content-around">
                <form action="{{ route('reject',['article'=>$article_to_check, 'routeName'=>'revisor.index']) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                </form>
                 <form action="{{ route('accept',['article'=>$article_to_check, 'routeName'=>'revisor.index']) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
                </form>
            </div>
            </div>
        </div>
        @else
            <div class="row justify-content-center align-items-center height-custom text-center">
                <div class="col-12">
                    <h2 class="fw-light"> Nessun articolo da revisionare </h2>
                    <a href="{{ route('homepage') }}" class="mt-5 btn text-warning">Torna all'homepage</a>
                </div>
            </div>
        @endif
    </div>
</x-layout>
