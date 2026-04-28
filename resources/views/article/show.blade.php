<x-layout>
    <div class="container">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12">

                <h1 class="display-4">{{ $article->title }}</h1>

            </div>
        </div>
        <div class="row height-custom justify-content-center py-5">
            <div class="col-12 col-md-6 mb-3">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <img src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">

                        </div>
                        <div class="carousel-item">

                            <img src="https://picsum.photos/402" class="d-block w-100 rounded shadow" alt="...">

                        </div>
                        <div class="carousel-item">

                            <img src="https://picsum.photos/401" class="d-block w-100 rounded shadow" alt="...">

                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
            <div class="col-12 col-md-6 mb-3 height-custom text-center shadow-lg p-5 rounded border border-2 border-warning">

                <span class="display-6 fw-semibold">Descrizione </span>
                <h2 class="fw-light">{{ $article->description }}</h2>

                <div class="d-flex flex-column justify-content-end align-items-center h-75">

                    <h4 class="fw-bold mb-4">Prezzo: {{ $article->price }} €</h4>
                    <button type="submit" class="btn btn-sm w-50 btn-warning border border-3 border-warning text-dark fw-semibold">Aggiungi al Carrello <i class="bi bi-cart-plus-fill"></i></button>
                </div>
            </div>
        </div>
    </div>
</x-layout>
