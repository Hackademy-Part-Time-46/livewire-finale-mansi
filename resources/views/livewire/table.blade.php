<div class="col-12 col-md-8" wire:poll.3600s>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Sottotitolo</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{ $article->id }}</th>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->subtitle }}</td>
                    <td>
                        <a href="{{ route('articles.edit', compact('article')) }}" class="btn btn-warning">Modifica</a>
                        <button type="button" class="btn btn-danger"
                            wire:click="delete({{ $article }})">Elimina</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
