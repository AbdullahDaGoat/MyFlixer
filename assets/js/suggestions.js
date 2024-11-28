const delay = function() {
	let a = 0;
	return function(e, s) {
		clearTimeout(a), a = setTimeout(e, s)
	}
}();
let searchRequest = !1,
	enterActive = !0;

function imgError(e) {
	return e.onerror = "https://image.tmdb.org/t/p/w370_and_h556_bestv2null", e.onerror = "", e.onerror = "undefined", e.src = "//i.imgur.com/z0iTYmn.png", !0
}
jQuery('input[name="s"]').on("input", function() {
	var r = this.value;
	delay(function() {
		return r.length <= 2 ? (jQuery(Suggestions.area).hide(), void jQuery(Suggestions.form).find("#search > i.fa").removeClass("hide").removeClass("")) : void(searchRequest || (searchRequest = !0, jQuery(Suggestions.form).find("i").addClass("fa fa-refresh").addClass(""), jQuery(Suggestions.area).find("ul").addClass("items").addClass("noselect"), jQuery(".suggestions > ul").addClass("items"), jQuery.ajax({
			type: "GET",
			url: Suggestions.api,
			data: "keyword=" + r + "&nonce=" + Suggestions.nonce,
			dataType: "json",
			success: function(e) {
				if (e.error) jQuery(Suggestions.area).hide();
				else {
					jQuery(Suggestions.area).show();
					var s = '<span class="icon-search-1">' + r + "</span>",
						s = '<li class="ctsx"><a class="more" href="javascript:;" onclick="document.getElementById(\'search\').submit();">' + Suggestions.more.replace("%s", s) + "</a></li>";
					moreText2 = "";
					const a = [];
					jQuery.each(e, function(e, s) {
						name = "", release_date = "", vote_average = "", poster = "", !1 !== s.extra.release_date && (release_date = "<i class='dot'></i>" + s.extra.release_date), !1 !== s.extra.names && (name = s.extra.names), !1 !== s.extra.vote_average && (vote_average = "<div class='meta'><span class='imdb'><i class='fa fa-star'></i> " + s.extra.vote_average + "</span>" + release_date + "</div>"), a.push("<li id='" + e + "'><a href='" + s.url + "' class='item'><div class='poster'><img onerror='imgError(this);' src='" + s.poster + "' /></div><div class='info'><div class='title text-truncate'>" + s.title + "</div>" + vote_average + "</div></a></li>")
					}), jQuery(Suggestions.area).html("<ul>" + a.join("") + s + "</ul>")
				}
			},
			complete: function() {
				searchRequest = !1, enterActive = !1, jQuery(Suggestions.form).find("i").removeClass("hide").removeClass(""), jQuery(Suggestions.area).find("ul").removeClass("process").removeClass("noselect")
			}
		})))
	}, 500)
}), jQuery(document).on("keypress", "#search", function(e) {
	if (enterActive) return 13 != e.keyCode
}), jQuery(document).click(function() {
	jQuery(event.target);
	0 == jQuery(event.target).closest('input[name="s"]').length ? jQuery(Suggestions.area).hide() : jQuery(Suggestions.area).show()
});