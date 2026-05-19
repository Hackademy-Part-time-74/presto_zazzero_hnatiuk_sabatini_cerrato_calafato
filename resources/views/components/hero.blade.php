<div class="hero-section flex-column py-5">
    <h1 class="display-5 fw-bold mb-4 text-center px-4">
        Il tuo spazio per vendere e guadagnare in totale autonomia.
    </h1>
    <p class="text-center">
        Pubblica i tuoi annunci in pochi clic, gestisci le tue vendite in modo semplice e raggiungi migliaia di acquirenti.<br>
        Con Presto.it hai il controllo completo della tua vetrina online, dall'inserimento alla trattativa.
    </p>
    <div class="my-3 text-center ">
        @auth
            @if(!auth()->user()->is_revisor)
                <a href="{{ route('create.article') }}"
                   class="hover-grow btn btn-lg btn-warning border border-3 border-warning text-black px-3">
                    {{ __('ui.createArticle') }}
                </a>
            @endif
        @endauth
    </div>
</div>