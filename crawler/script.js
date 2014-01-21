$(document).ready(function() {



	$("#nextStory").click(function(){
		
		$.ajax({
			type: "POST",
			url: "summarize_stories.php"

		})
		.done(function(story) {
			$(".stories-container").empty().append(story);
		});

	})

})