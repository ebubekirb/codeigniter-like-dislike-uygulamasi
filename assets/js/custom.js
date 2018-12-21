$(document).ready(function(){

	$(".likeBtn").click(function(){
		
		var data_id = $(this).attr("data-id");

		$.post("http://localhost/CodeIgniter/like_dislike/oyla", { post_id : data_id, vote_status : 1}, function(resp){

			// alert(resp);
		})

		// alert(data_id);
	})

	$(".dislikeBtn").click(function(){

		var data_id = $(this).attr("data-id");

		$.post("http://localhost/CodeIgniter/like_dislike/oyla", { post_id : data_id, vote_status : -1 }, function(resp){

			// alert(resp);
		})
	})
})