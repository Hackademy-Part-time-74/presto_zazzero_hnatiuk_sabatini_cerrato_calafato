<div class="card mx-auto card-w shadow text-center mb-3">
    <a href="{{ route ('article.show',compact('article')) }}"><img src="https://picsum.photos//200" class="card-img-top" alt="immagine articolo {{ $article->title }}"></a>
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h6 class="card-subtitle text-body-secondary">{{ $article->price }} €</h6>
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="{{ route ('article.show',compact('article')) }}" class="btn btn-outline-warning border border-3 border-warning text-black">Dettaglio</a>
            <a href="{{ route('byCategory',['category'=>$article->category]) }}" class="btn btn-outline-warning border border-3 border-warning text-black">Categoria</a>
        </div>
    </div>

</div>