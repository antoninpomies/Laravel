<form action="{{ route('posts.store') }}" method="post">
    @csrf

    {{-- Post title --}}
    <div class="form-group">
      <label for="title">Titre de la publication</label>
      <input type="text"
                name="title"
                id="title"
                class="form-control"
                placeholder="écrire le titre de la publication ici ..."
                required />

        @if ($errors->has('title'))
            <small class="text-danger">{{ $errors->first('title') }}</small>
        @endif
    </div>
    {{-- End --}}

    {{-- Post body --}}
    <div class="form-group">
      <label for="body">Contenu de la publication</label>
      <textarea class="form-control"
                name="body"
                id="body"
                rows="3"
                placeholder="écrire le contenu de la publication ici ..."
                required
                style="resize: none;"></textarea>

        @if ($errors->has('body'))
            <small class="text-danger">{{ $errors->first('body') }}</small>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Sauvegarder la publication</button>
        <a href="{{ route('home') }}" class="btn btn-default">Retour</a>
    </div>

</form>