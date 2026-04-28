<div class="card mx-auto rounded-4 card-w shadow text-center mb-3">
    <a href="{{ route ('article.show',compact('article')) }}"><img src="https://picsum.photos/300" class="card-img-top" alt="immagine articolo {{ $article->title }}"></a>

    <div class="card-body bg-info">
        <h5 class="card-title">{{ $article->title }}</h5>
        <h6 class="card-subtitle text-body-secondary">{{ $article->price }} €</h6>

        <div class="mt-3">
            <span> Categoria: <a href="{{ route('byCategory',['category'=>$article->category]) }}" class="text-warning fw-semibold">{{ $article->category->name }}</a></span>
        </div>

        <div class="d-flex justify-content-evenly align-items-center mt-3">
            <a href="{{ route ('article.show',compact('article')) }}" class="btn btn-warning border border-3 border-warning text-black fs-semibold">Dettagli articolo</a>
        </div>
    </div>
</div>