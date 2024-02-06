<h4 class="card-title">Commentaires</h4>

{{-- add comment form --}}
@include('posts.partials.add_comment')
    
{{-- list all comments --}}
@forelse($post->comments as $comment)
	<div class="card-text">
		<b>{{ $comment->owner->name }}</b> dit
		<small class="text-muted">
		    {{ $comment->created_at->diffForHumans() }}
		</small>
		<p>{{ $comment->body }}</p>

		{{-- include add reply form --}}
		@include('posts.partials.add_reply')

		{{-- list all replies --}}
		@include('posts.partials.replies')
	</div>
	{!! $loop->last ? '' : '<hr>' !!}
@empty
	<p class="card-text">Il n'y a pas encore de commentaires !</p>
@endforelse