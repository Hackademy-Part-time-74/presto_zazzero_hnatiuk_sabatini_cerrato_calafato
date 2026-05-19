<x-layout>
    <div class="container">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12">

                <h1 class="display-4">{{ $article->title }}</h1>

            </div>
        </div>
        <div class="row height-custom justify-content-center py-5">
            <div class="col-12 col-md-6 mb-3">
             @if ($article->images->count() > 0)
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach($article->images as $key => $image)
                        <div class="carousel-item @if($loop->first) active @endif">

                            <img src="{{  $image->getUrl() }}" class="d-block w-100 rounded shadow" alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">

                        </div>
                        @endforeach
                    </div>
                       @if($article->images->count() > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                      @endif
                </div>
             @else
             <img src="https://picsum.photos/400" alt="Nessuna foto inserita dall'utente">
             @endif
            </div>
            <div class="col-12 col-md-6 mb-3 height-custom text-center shadow-lg p-5 rounded border border-2 border-warning">

                <span class="display-6 fw-semibold">Descrizione </span>
                <h2 class="fw-light">{{ $article->description }}</h2>

                <div class="d-flex flex-column justify-content-end align-items-center h-75">
                    <h4 class="fw-bold mb-4">Prezzo: {{ $article->price }} €</h4>
                </div>
            </div>
        </div>
    </div>
</x-layout>
