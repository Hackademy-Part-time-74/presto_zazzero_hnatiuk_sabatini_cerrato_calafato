<div class="card mx-auto card-w rounded-4 shadow text-center mb-3 h-100">
    <a href="{{ route ('article.show',compact('article')) }}">
        <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(600, 600) : 'https://picsum.photos/300'}}"
        class="card-img-top img-card-custom" alt="immagine articolo {{ $article->title }}">
    </a>

    <div class="card-body bg-info">
        <h5 class="card-title text-overflow pt-3">{{ $article->title }}</h5>
        <h6 class="card-subtitle text-body-secondary">{{ $article->price }} €</h6>

        <div class="mt-3">
            <span> {{ __('ui.category') }}: <a href="{{ route('byCategory',['category'=>$article->category]) }}" class="text-warning fw-semibold">{{__("ui.".$article->category->name) }}</a></span>
        </div>

        <div class="d-flex justify-content-evenly align-items-center mt-3">
            <a href="{{ route ('article.show',compact('article')) }}" class="btn btn-warning border border-3 border-warning text-black fs-semibold">{{__('ui.articleDetails') }}</a>
        </div>
    </div>
</div>
