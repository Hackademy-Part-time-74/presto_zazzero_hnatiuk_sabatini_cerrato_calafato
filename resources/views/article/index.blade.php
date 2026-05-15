<x-layout>
    <div class="container">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-5">Tutti gli Articoli</h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5 g-3">
            @forelse ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4 d-flex ">
                    <x-card :article="$article"/>
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">Non sono ancora stati creati degli articoli</h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>