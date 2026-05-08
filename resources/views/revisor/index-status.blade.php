<x-layout>

    <div class="container rounded-3">

        <h1 class="display-5 text-center mt-5 mb-3">Articoli creati</h1>

        <div class="border rounded overflow-hidden shadow-lg">
            <table class="table table-bordered border-black mb-0">
                <thead class="text-center">
                    <tr>
                        <th>Titolo</th>
                        <th>Stato</th>
                        <th>Modifica</th>
                    </tr>
                </thead>

                <tbody class="table-group-divider text-center">
                    @foreach ( $articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>

                        <td>@if ($article->is_accepted)
                            <i class="bi bi-check-circle-fill text-success fs-4"></i>
                            @else
                            <i class="bi bi-x-circle-fill text-danger fs-4"></i>
                            @endif
                        </td>

                        <td> <a href="{{ route('revisor.modify-status', $article) }}" class="text-dark"> <i class="bi bi-pencil-square fs-3"></i> </a></td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>


</x-layout>