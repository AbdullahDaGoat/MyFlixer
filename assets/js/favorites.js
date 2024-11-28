jQuery(function(o) {
	var r = document.querySelectorAll(".bookmark, .favo");
	if (0 < r.length) {
		function l(e, t) {
			e ? o(t).attr("data-bookmark", "Remove").text("Remove") : o(t).attr("data-bookmark", "Favorite").text("Favorite")
		}
		let a;
		for (a = localStorage.hasOwnProperty("favorite_movies") ? JSON.parse(localStorage.favorite_movies) : (localStorage.setItem("favorite_movies", "[]"), []), i = 0; i < r.length; i++) {
			let e = r[i],
				t = e.id,
				o = e.classList;
			a.includes(t) ? (o.remove("inactive"), o.add("active"), l(!0, e)) : l(!1, e), e.addEventListener("click", function() {
				o.toggle("inactive"), o.toggle("active"), a.includes(t) ? (a = a.filter(function(e) {
					return e !== t
				}), l(!1, e)) : (a.push(t), l(!0, e)), localStorage.favorite_movies = JSON.stringify(a)
			})
		}
	}
});