<x-layout>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-5">Risultati per la ricerca:</h1>
                <span class="fw-semibold fs-1">{{ $query }}</span>
                </div>
        </div>

        <div class="row height-custom justify-content-center align-items-center py-5">
            
            @forelse ( $articles as $article )
                <div class="col-12 col-md-6 col-lg-4 col-xl-4 ">
                    <x-card :article="$article" />
                </div>
                @empty
                <div class="col-12">
                    <h3 class="text-center fw-light">Nessun articolo trovato</h3>
                </div>
            @endforelse
            
        </div>
    </div>

    @if($articles->count())
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div> 
    @endif

</x-layout>