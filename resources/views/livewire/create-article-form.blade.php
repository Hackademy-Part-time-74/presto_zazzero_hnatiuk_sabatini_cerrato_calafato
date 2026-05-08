<form class="shadow-lg p-5 rounded-5 border border-2 border-warning" wire:submit="store">

    <div class="mb-3">
        <label for="title" class="form-label ">Titolo:</label>
        <input type="text" class="form-control shadow-sm @error('title') is-invalid @enderror" id="title" wire:model.blur="title" value="{{ old('title') }}">
        @error('title')
        <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
            <label for="title" class="form-label">Aggiungi immagini :</label>
            <input type="file" wire:model.live="temporary_images" multiple
            class="form-control shadow-sm  @error('temporary_images.*') is-invalid @enderror" placeholder="img/">
            @error('temporary_images.*')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            @error('temporary_images')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        @if (!empty($images))
             <div class="row">
                <div class="col-12">
                    <p>Anteprima immagini: </p>
                    <div class="row border border-1 border-warning rounded shadow py-4">
                        @foreach ($images as $key => $image)
                        <div class="col d-flex flex-column align-items-center my-3">
                            <div class="img-preview mx-auto shadow rounded" wire:key="{{ $key }}" style="background-image: url('{{ $image->temporaryUrl() }}');"></div>
                            <button type="button" class="btn btn-sm mt-1 btn-danger" wire:click="removeImage({{ $key }})"><i class="bi bi-trash-fill"></i></button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

    <div class="mb-3 mt-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea cols="30" rows="10" class="form-control shadow-sm @error('description') is-invalid @enderror" id="description" wire:model.blur="description">{{ old('description') }}</textarea>
        @error('description')
        <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo:</label>
        <input type="text" class="form-control shadow-sm @error('price') is-invalid @enderror" id="price" wire:model.blur="price" value="{{ old('price') }}">
        @error('price')
        <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="category" class="mb-3">Categorie:</label>
        <select id="category" wire:model="category" class="form-control shadow-sm @error('category') is-invalid @enderror">
            <option selected>Seleziona una categoria</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
        <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-warning w-25 py-2 mb-3 fw-semibold mt-3 shadow">Crea</button>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

</form>

