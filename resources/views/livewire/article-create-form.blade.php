<div class="col-12 col-md-6 ">
    <form wire:submit="store">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" wire:model.blur="title">
            @error('title')
                <p class="text-danger fst-italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" id="subtitle" wire:model.blur="subtitle">
            @error('subtitle')
                <p class="text-danger fst-italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="text-center my-5">
            <button type="submit" class="btn btn-dark">Salva</button>
        </div>
    </form>

</div>
