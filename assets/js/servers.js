let d, e;
const premium = Servers.premium,
	embedru = Servers.embedru,
	superembed = Servers.superembed,
	svetacdn = Servers.svetacdn,
	openvids = Servers.openvids;

function loadServer(e) {
	jQuery("#iframe").attr("src", e)
}

function loadEmbed(e) {
	jQuery("#iframe").attr("src", e)
}
vidsrc = Servers.vidsrc, video = Servers.embed + "&video=true", jQuery(".server").click(function(e) {
	e.preventDefault(), jQuery(".server").removeClass("active"), jQuery(this).addClass("active"), jQuery("#movie-player").removeClass("no-player"), jQuery(this).addClass("no-player")
}), jQuery("#playme").click(function(e) {
	e.preventDefault(), setTimeout(function() {
		jQuery("#iframe").show()
	}, 1e3), jQuery("#playme").hide(), jQuery(".server.active").trigger("click")
}), void 0 !== Servers.vote_average && (d = parseFloat(Servers.vote_average)), jQuery("#manual:first").addClass("active");