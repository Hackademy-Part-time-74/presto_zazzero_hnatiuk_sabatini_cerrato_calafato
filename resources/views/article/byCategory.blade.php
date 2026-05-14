<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-5">Articoli della categoria</h1>
                <span class=" display-6 fw-semibold">{{ $category->name }}</span>
            </div>
        </div>

        <div class="row height-custom py-5 justify-content-center align-items-center">
            @forelse ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4 col-xl-4 ">
                    <x-card :article="$article"/>
                </div>
            @empty
                <div class="col-12 text-center">

                    <h3>Non sono ancora stati creati articoli per questa categoria</h3>
                    @auth
                        <a href="{{ route('create.article') }}" class="btn btn-warning my-5">Pubblica un articolo</a>
                    @endauth
                </div>
            @endforelse
        </div>
    </div>
</x-layout>