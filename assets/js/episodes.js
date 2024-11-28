function infoSerieTV(t, e) {
	e = Episodes.base_path + t + "/season/" + e + "?api_key=" + Episodes.tvapikey + Episodes.base_lang + Episodes.language + Episodes.base_inc + Episodes.language.slice(0, 2) + ",null", jQuery.getJSON(e, function(o) {
		jQuery("#movie-episode > .episode-range > div").empty(), jQuery(".go2ep span").empty();
		for (let a = 0; a < o.episodes.length; a++) {
			o.name, o.overview;
			var d = o.season_number;
			o.poster_path;
			let e = o.episodes[a].name;
			var i = o.episodes[a].episode_number;
			null == e && (e = Episodes.tvepisode + " " + i), o.episodes[a].overview, o.episodes[a].air_date, jQuery("#w-info > div.poster > img").empty();
			let s = "<img data-season='season" + d + "' src='" + Episodes.base_poster + o.poster_path + "' alt='" + Episodes.tvtitle + "'>";
			s == "<img data-season='season1' src='" + Episodes.base_poster + o.poster_path + "' alt='" + Episodes.tvtitle + "'>" ? s = "<img data-season='season1' src='" + Episodes.tvposter + "' alt='" + Episodes.tvtitle + "'>" : s == "<img data-season='season" + d + "' src='" + Episodes.base_poster_lost + "' alt='" + Episodes.tvtitle + "'>" && (s = "<img data-season='season" + d + "' src='" + Episodes.base_poster_null + "' alt='" + Episodes.tvtitle + "'>"), jQuery("#w-info > div.poster > img").append(s), "" === e && (e = Episodes.tvepisode + "&nbsp;" + i), jQuery(".episodes").append("<div><a href='javascript:void(0)' data-episode_id='" + i + "' onclick='infoEpisodio(" + t + "," + d + "," + o.episodes[a].episode_number + ")'><span class='num'>" + Episodes.tvepisode + ": " + o.episodes[a].episode_number + "</span><span>" + o.episodes[a].name + "</span></a></div>"), jQuery(".episodes > div > a").on("click", function(e) {
				e.preventDefault(), jQuery(".episodes > div > a").removeClass("active"), jQuery(this).addClass("active")
			}), jQuery('[data-episode_id="1"]').addClass("active"), jQuery("[data-load-embed]").attr("data-load-season", o.season_number)
		}
	})
}

function imgError(e) {
	return e.onerror = "", e.src = Episodes.placeholder, !0
}

function infoEpisodio(e, p, l) {
	var v = Episodes.novideo;
	e = Episodes.base_path + e + "/season/" + p + "/episode/" + l + "?api_key=" + Episodes.tvapikey + Episodes.base_lang + Episodes.language + Episodes.base_inc + Episodes.language.slice(0, 2) + ",null", jQuery.getJSON(e, function(e) {
		e.overview;
		e.air_date;
		var s = Episodes.base_backdrop + e.still_path;
		e.overview;
		Episodes.base_backdrop_null === s && (s = Episodes.placeholder), null == e.name && (e.name = "");
		var a = e.name,
			e = e.episode_number;
		"" === a && Episodes.tvepisode, jQuery(".player").empty(), jQuery(".go2ep span").empty(), jQuery(".go2ep").append("<span>" + Episodes.tvseason + " " + p + " " + Episodes.tvepisode + " " + l + "</span>"), jQuery(".server_container").empty(), jQuery("#seasons > button").empty(), jQuery("#seasons > button").append("<i class='uil uil-cell mr-1'></i> <span class='season-view'>" + Episodes.tvseason + " " + p + "</span>"), jQuery("[data-load-embed]").attr("data-load-season", p), jQuery("[data-load-embed]").attr("data-load-episode", l), jQuery(".server_container").attr("id", "s" + p + "_" + l), jQuery('[data-server="1"]').attr("id", "s" + p + "_" + l + "_1"), jQuery('[data-server="2"]').attr("id", "s" + p + "_" + l + "_2"), jQuery('[data-server="3"]').attr("id", "s" + p + "_" + l + "_3"), jQuery('[data-server="4"]').attr("id", "s" + p + "_" + l + "_4");
		var o, d, i, t, r, n = links["s" + p + "_" + l];
		Episodes.tvid;
		void 0 === n ? (console.log("data is empty"), jQuery("#iframe").attr("src", v), jQuery(".sv-desc").text("We are sorry but no server is available")) : (d = n.data[0], console.log("data is not empty"), jQuery(".sv-desc").text("If current server doesn't work please try other servers below."), o = d[1].url, s = d[2].url, e = d[3].url, a = d[1].server, n = d[2].server, d = d[3].server, "" === o ? i = "" : (i = '<div data-server="1" class="movie-cloud server active" data-load-embed-host="' + a + '" data-load-embed="' + Episodes.tvid + '" data-load-link="' + o + '" data-load-season="' + p + '" data-load-episode="' + l + '"><div><span>server</span><span class="server_name">' + a + "</span></div></div>", console.log(o)), "" === s ? t = "" : (t = '<div data-server="2" class="movie-cloud server" data-load-embed-host="' + n + '" data-load-embed="' + Episodes.tvid + '" data-load-link="' + s + '" data-load-season="' + p + '" data-load-episode="' + l + '"><div><span>server</span><span class="server_name">' + n + "</span></div></div>", console.log(s)), "" === s ? r = "" : (r = '<div data-server="3" class="movie-cloud server" data-load-embed-host="' + d + '" data-load-embed="' + Episodes.tvid + '" data-load-link="' + e + '" data-load-season="' + p + '" data-load-episode="' + l + '"><div><span>server</span><span class="server_name">' + d + "</span></div></div>", console.log(e)), jQuery(".server_container#s" + p + "_" + l).append(i + t + r)), jQuery(".movie-cloud.active").trigger("click")
	})
}
if (jQuery(function() {
		var e = Episodes.tvapikey + Episodes.base_lang + Episodes.language + Episodes.base_inc + Episodes.language.slice(0, 2) + ",null",
			i = Episodes.tvid;
		document.getElementById("image"), new Event("error"), e = Episodes.base_path + i + "?api_key=" + e, jQuery.getJSON(e, function(s) {
			s.overview;
			var e = (s.seasons.length, s.number_of_episodes),
				a = s.status;
			let o = s.tagline;
			var d = s.original_name;
			"" === o && (o = d), null === o && (o = d), jQuery(".tagline").append(o), jQuery(".stato").text(a), jQuery(".epinum i").append(e), jQuery("#seasons .dropdown-menu").empty();
			for (let e = 0; e < s.seasons.length; e++) jQuery("#seasons .dropdown-menu").append("<a href='javascript:;' class='dropdown-item season-item' onclick='infoSerieTV(" + i + "," + s.seasons[e].season_number + ");infoEpisodio(" + i + "," + s.seasons[e].season_number + ",1);' data-tab='season" + s.seasons[e].season_number + "'>" + Episodes.tvseason + " " + s.seasons[e].season_number + "</a>");
			jQuery("#seasons .dropdown-menu a").on("click", function(e) {
				e.preventDefault(), jQuery("#seasons .dropdown-menu a").removeClass("active"), jQuery(this).addClass("active")
			}), jQuery('#seasons .dropdown-menu a[data-tab="season1"]').addClass("active"), jQuery('#seasons .dropdown-menu a[data-tab="season0"]').hide()
		})
	}), jQuery(".btn-play").click(function(e) {
		e.preventDefault(), setTimeout(function() {
			jQuery("#iframe").show()
		}, 1200), jQuery(".btn-play").hide(), jQuery("#movie-player").removeClass("no-player"), jQuery(this).addClass("no-player")
	}), jQuery(window).on("load", function() {
		infoSerieTV(Episodes.tvid, 1), infoEpisodio(Episodes.tvid, 1, 1), jQuery('#seasons .dropdown-menu a[data-tab="season1"]').hide()
	}), jQuery(document).on("click", "[data-load-embed]", function() {
		var e = jQuery(this).attr("data-load-link");
		jQuery(this).attr("data-load-season"), jQuery(this).attr("data-load-episode");
		jQuery("[data-load-embed]").removeClass("active"), jQuery(this).addClass("active"), jQuery("#iframe").attr("src", e)
	}), void 0 !== Episodes.vote_average) {
	const U = parseFloat(Episodes.vote_average),
		V = rateToStars(U);
	jQuery(".stars").append(V)
}