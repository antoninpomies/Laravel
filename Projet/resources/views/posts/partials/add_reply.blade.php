<form action="{{ route('replies.store', $comment->id) }}" method="POST" class="mb-2">
	@csrf

	<div class="input-group">
	  <input 
	  	name="new_reply" 
	  	type="text" 
	  	class="form-control" 
	  	placeholder="écrire votre réponse.."
	  	required>

	  <div class="input-group-append">
	    <button class="btn btn-primary" type="submit">répondre</button> 
	  </div>

	</div>

</form>