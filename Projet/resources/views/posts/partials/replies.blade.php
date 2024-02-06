{{-- list all replies for a comment --}}
@foreach ($comment->replies as $reply)
    
  <div class="ml-4">
		<b>{{ $reply->owner->name }}</b> a répondu
		<small class="text-muted float">{{ $reply->created_at->diffForHumans() }}</small>
		<p>{{ $reply->body }}</p>
  </div>

@endforeach