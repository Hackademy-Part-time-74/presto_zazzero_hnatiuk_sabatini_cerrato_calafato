<x-layout>

    <h1 class="text-center pt-5">HOME PAGE</h1>
    <h2>CIAO</h2>
    <h3>Test carlo</h3>
    @if(session()->has('errorMessage'))
    <div class="container text-center">
        <div class="alert alert-danger text-center shadow rounded w-50">
            {{ session('errorMessage') }}
        </div>
    </div>
    @endif

    @if(session()->has('message'))
    <div class="alert alert-success text-center shadow rounded w-50">
        {{ session('message') }}
    </div>
    @endif

    <div class="container">
        <div class="row height-custom justify-content-center align-items-center p-4 g-4">
            @forelse ($articles as $article)
            <div class="col-12 col-md-6 col-lg-4 col-xl-4 ">
                <x-card :article="$article" />
            </div>
            @empty
            <div class="col-12">
                <h3 class="text-center">Non sono ancora stati creati degli articoli</h3>
            </div>
            @endforelse
        </div>
    </div>


</x-layout>