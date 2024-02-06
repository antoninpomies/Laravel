@extends('layouts.main')

@section('content')

	{{-- Start card --}}
    <div class="card shadow">
        <div class="card-body">
            <h4 class="card-title">Créer une nouvelle publication</h4>
            <div class="card-text">
                @include('posts.partials.create_post')
            </div>
        </div>
    </div>
  {{-- End --}}
    
@endsection