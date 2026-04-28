<x-layout>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-2">Articoli della categoria
                    <span class="fw-semibold">{{ $category->name }}</span>
                </h1>
            </div>
        </div>

        <div class="row height-custom py-5 justify-content-center align-items-center">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article"/>
                </div>
            @empty
                <div class="col-12 text-center">

                    <h3>Non sono ancora stati creati articoli per questa categoria</h3>
                    @auth
                        <a href="{{ route('create.article') }}" class="btn btn-dark my-5">Pubblica un articolo</a>
                    @endauth
                </div>
            @endforelse
        </div>
    </div>
</x-layout>