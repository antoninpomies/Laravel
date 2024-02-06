<form action="{{ route('comments.store', $post->id) }}" method="POST" class="mt-2 mb-4">
	@csrf

	<div class="input-group">
	  <input 
	  	name="new_comment" 
	  	type="text" 
	  	class="form-control" 
	  	placeholder="écrire votre commentaire.."
	  	required>

	  <div class="input-group-append">
	    <button class="btn btn-primary" type="submit">Ajouter un commentaire</button> 
	  </div>

	</div>

</form>