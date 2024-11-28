! function(t) {
	t.browser = {}, t.browser.mozilla = /mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase()), t.browser.webkit = /webkit/.test(navigator.userAgent.toLowerCase()), t.browser.opera = /opera/.test(navigator.userAgent.toLowerCase()), t.browser.msie = /msie/.test(navigator.userAgent.toLowerCase()), t(".tab_content").hide(), t(".top span:first").addClass("active").show(), t(".tab_content:first").show(), t(".top span").click(function() {
		t(".top span").removeClass("active"), t(this).addClass("active"), t(".tab_content").hide();
		var e = t(this).find("a").attr("href");
		return t.browser.msie ? (t.browser.msie = !0, t(e).show()) : t(e).fadeIn(), !1
	})
}(jQuery);