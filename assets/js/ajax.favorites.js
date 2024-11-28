jQuery(function(e) {
	e.post(Favorites.ajax_url, {
		action: "display_fav_movies",
		favorite_movies_list: JSON.parse(localStorage.favorite_movies)
	}).done(function(a) {
		a ? e("#page-favorites").html(a + '<div class="clearfix"></div>') : (e("#page-favorites").addClass("alert alert-dark p-5 m-5"), e("#page-favorites").text("It looks like you haven't added any favorites!")), lazyload()
	}).fail(function() {
		e("#page-favorites").html('<h3 class="alert alert-danger">An error occured, please reload the page.</h3>')
	}).always(function() {})
});