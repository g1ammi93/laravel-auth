@if ($project->exists)
    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @method('PUT')
    @else
        <form action="{{ route('admin.projects.store', $project) }}" method="POST">
@endif
@csrf
<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo..."
                value="{{ old('title', $project->title) }}">
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione del Progetto</label>
            <textarea class="form-control" id="description" name="description" rows="10">
                    {{ old('desription', $project->description) }}
                </textarea>
        </div>
    </div>
    <div class="col-11">
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="url" class="form-control" id="image" name="image" placeholder="https://..."
                value="{{ old('image', $project->image) }}">
        </div>
    </div>
    <div class="col-1">
        <div class="mb-3">
            <img src="{{ old('image', $project->image ?? 'https://marcolanci.it/boolean/assets/placeholder.png') }}"
                class="img-fluid" alt="Immagine post" id="preview">
        </div>
    </div>
</div>

<div class="d-flex justify-content-between align-items-center">
    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Torna alla lista</a>
    <div class="d-flex align-items-center gap-2">
        <button type="reset" class="btn btn-secondary"><i class="fas fa-eraser me-2"></i>Svuota i
            campi</button>
        <button type="submit" class="btn btn-success"><i class="fas fa-floppy-disk me-2"></i>Salva</button>
    </div>
</div>
</form>
