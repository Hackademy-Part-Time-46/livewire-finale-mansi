<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center py-5">
                Modifica articolo: <span class="fst-italic">{{ $title }} </span>
            </h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form wire:submit="update">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" wire:model.blur="title"
                        value="{{ $title }}">
                    @error('title')
                        <p class="text-danger fst-italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Sottotitolo</label>
                    <input type="text" value="{{ $subtitle }}" class="form-control" id="subtitle"
                        wire:model.blur="subtitle">
                    @error('subtitle')
                        <p class="text-danger fst-italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="text-center my-5">
                    <button type="submit" class="btn btn-dark">Aggiorna</button>
                </div>
            </form>
        </div>
    </div>
</div>
