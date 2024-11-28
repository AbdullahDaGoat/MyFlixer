! function (l) {
	function t() {
		window.innerWidth < 1024 || l(".filmlist .movie-item")
			.tooltipster({
				trigger: "hover",
				theme: "tooltipster-base",
				contentAsHTML: !0,
				animation: "fade",
				updateAnimation: !0,
				interactive: !0,
				arrow: !1,
				position: "right",
				maxWidth: 260,
				minWidth: 260,
				maxHeight: 252,
				minHeight: 252,
				delay: 150,
				plugins: ["sideTip"]
			})
	}
	new Swiper("#featured", {
			autoplay: !0,
			grabCursor: !0,
			preloadImages: !1,
			lazy: !0,
			slidesPerView: 1,
			pagination: {
				el: ".swiper-pagination",
				clickable: !0
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev"
			}
		}), l('a[rel*="null"]')
		.click(function (e) {
			e.preventDefault()
		}), l("a.bookmark")
		.click(function (e) {
			e.preventDefault()
		}), l("#menu-toggler")
		.click(function () {
			l("#menu, #menu-header")
				.toggle()
		}), l("#show-search")
		.click(function () {
			l("#search-wrapper")
				.toggle(), l("#search-wrapper")
				.toggleClass("active")
		});
	var o = l(".genre"),
		n = l(".country");

	function a() {
		var t = document.querySelectorAll(".bookmark, .favo");
		if (null != typeof t && 0 < t.length) {
			function o(e, t) {
				e ? l(t)
					.attr("data-bookmark", "Remove")
					.text("Remove") : l(t)
					.attr("data-bookmark", "Favorite")
					.text("Favorite")
			}
			let e;
			for (e = localStorage.hasOwnProperty("favorite_movies") ? JSON
				.parse(localStorage.favorite_movies) : (localStorage.setItem(
					"favorite_movies", "[]"), []), d = 0; d < t.length; d++) {
				const l = t[d],
					n = l.id,
					a = l.classList;
				e.includes(n) ? (a.remove("inactive"), a.add("active"), o(!0,
					l)) : o(!1, l), l.addEventListener("click",
			function () {
					a.toggle("inactive"), a.toggle("active"), e
						.includes(n) ? (e = e.filter(function (e) {
							return e !== n
						}), o(!1, l)) : (e.push(n), o(!0, l)),
						localStorage.favorite_movies = JSON.stringify(e)
				})
			}
		}
	}

	function e() {
		l("#years.dropdown-menu")
			.removeClass("lg c4")
			.addClass("md c3"), l("#type.dropdown-menu")
			.removeClass("lg c4")
			.addClass("c1")
	}

	function i() {
		l.each(l(".dropdown input[type='checkbox']"), function (e, t) {
			const o = l(t)
				.closest(".dropdown"),
				n = o.find("input[type='checkbox']:checked");
			t = o.find(".value")
				.attr("data-placeholder");
			o.find(".value");
			let a = "";
			1 === n.length ? a = n.next("label")
				.text() : 1 < n.length ? a = n.length + "Selected" : n
				.length <= 1 && (a = t), a && o.find(".value")
				.text(a)
		});
		const e = l(".dropdown.sort-by input[type='radio']")
			.closest(".dropdown.sort-by"),
			t = e.find("input[type='radio']:checked");
		var o = t.next("label")
			.text();
		if (o) {
			e.find(".value")
				.text(o);
			const n = l(".dropdown.Type input[type='radio']")
				.closest(".dropdown.Type"),
				a = n.find("input[type='radio']:checked");
			o = a.next("label")
				.text();
			if (o) {
				n.find(".value")
					.text(o);
				const i = l(".dropdown.rating input[type='radio']")
					.closest(".dropdown.rating"),
					d = i.find("input[type='radio']:checked");
				o = d.next("label")
					.text();
				o && i.find(".value")
					.text(o)
			}
		}
	}

	function d(e) {
		l(e)
			.on("click.bs.dropdown", this.toggle)
	}

	function r(e, t) {
		var o;
		s && (t = t || [s], s[0] !== t[0][0] ? o = s : (o = t[t.length - 1])
			.parent()
			.hasClass("dropdown-menu") && (o = o.parent()), o.find(".show")
			.removeClass("show"), o.find(".dropdown-menu")
			.slideUp(150), o.hasClass("show") && o.removeClass("show"),
			o === s) && (s = null, l(".dropdown-backdrop")
			.remove())
	}

	function c(e) {
		var t = e.attr("data-target");
		return (t = (t = t || (t = e.attr("href")) && /#[A-Za-z]/.test(t) && t
				.replace(/.*(?=#[^\s]*$)/, "")) && l(t)) && t.length ? t : e
			.parent()
	}
	l("#genere")
		.on("touchstart click", function (e) {
			e.stopPropagation(), e.preventDefault(), o.stop()
				.slideToggle(150), n.slideUp("fast")
		}), l("#paese")
		.on("touchstart click", function (e) {
			e.stopPropagation(), e.preventDefault(), n.stop()
				.slideToggle(150), o.slideUp("fast")
		}), l(document)
		.on("click", function (e) {
			o.hide()
		}), l(document)
		.on("click", function (e) {
			n.hide()
		}), l("[data-go='#comment']")
		.click(function () {
			l("html, body")
				.animate({
					scrollTop: l("#comment")
						.offset()
						.top
				}, 2e3)
		}), l(".light.movie-manager")
		.click(function (e) {
			e.preventDefault(), l(
					".item.light, #overlay, #body, #watch, #movie-player, #player, #content-embed, #disqus_thread"
					)
				.toggleClass("active"), l([document.documentElement,
					document.body])
				.animate({
					scrollTop: +l("#player")
						.offset()
						.top
				}, 1e3)
		}), l("#overlay")
		.click(function () {
			l(".bp-btn-light, #overlay, #body, #watch, #movie-player, #player, #disqus_thread")
				.removeClass("active")
		}), l(".btn-eps")
		.click(function (e) {
			e.preventDefault(), l([document.documentElement, document.body])
				.animate({
					scrollTop: +l("#player")
						.offset()
						.top
				}, 1e3)
		}), l(".bp-btn-auto")
		.click(function () {
			l(".bp-btn-auto")
				.toggleClass("active")
		}), l(".bp-btn-auto")
		.click(function () {
			l(".bp-btn-auto")
				.toggleClass("active")
		}), l("#toggle, .cac-close")
		.click(function () {
			l("#comment")
				.toggleClass("active")
		}), l(".servers")
		.on("click", "li", function () {
			l(".servers li.active")
				.removeClass("active"), l(this)
				.addClass("active"), l([document.documentElement, document
					.body])
				.animate({
					scrollTop: +l("#player")
						.offset()
						.top
				}, 1e3)
		}), l(".seasons")
		.on("click", "li", function () {
			l(".seasons li.active")
				.removeClass("active"), l(this)
				.addClass("active")
		}), l("#episodes.movie > div.body > ul > li > a")
		.on("click", function () {
			l([document.documentElement, document.body])
				.animate({
					scrollTop: +l("#player")
						.offset()
						.top
				}, 1e3)
		}), l(".lol")
		.on("click", function (e) {
			e.preventDefault(), l(".lol")
				.removeClass("active"), l(this)
				.addClass("active");
			l(".lol.active i");
			l.ajax({
				type: "POST",
				url: ajax_url,
				dataType: "html",
				async: !1,
				cache: !0,
				data: {
					action: "filter_posts",
					category: l(this)
						.data("slug"),
					orderby: l(this)
						.data("orderby"),
					exclude: l(this)
						.data("exclude"),
					meta: l(this)
						.data("meta")
				},
				beforeSend: function (e) {
					setTimeout(function () {}, 1e3)
				},
				success: function (e) {
					l(".filmlist.no")
						.html(e +
							'<div class="clearfix"></div>'),
					t(), a(), lazyload()
				}
			})
		}), l(".dropdown input[type='checkbox']")
		.change(function () {
			const e = l(this)
				.closest(".dropdown"),
				t = e.find("input[type='checkbox']:checked");
			var o = e.find(".value")
				.attr("data-placeholder");
			let n = "";
			1 === t.length ? n = t.next("label")
				.text() : 1 < t.length ? n = t.length + " Selected" : t
				.length <= 1 && (n = o), e.find(".value")
				.text(n)
		}), l(".dropdown.sort-by input[type='radio']")
		.change(function () {
			const e = l(this)
				.closest(".dropdown.sort-by"),
				t = e.find("input[type='radio']:checked");
			var o = t.next("label")
				.text();
			e.find(".value")
				.text(o)
		}), l(".dropdown.Type input[type='radio']")
		.change(function () {
			const e = l(this)
				.closest(".dropdown.Type"),
				t = e.find("input[type='radio']:checked");
			var o = t.next("label")
				.text();
			e.find(".value")
				.text(o)
		}), l(".dropdown.rating input[type='radio']")
		.change(function () {
			const e = l(this)
				.closest(".dropdown.rating"),
				t = e.find("input[type='radio']:checked");
			var o = t.next("label")
				.text();
			e.find(".value")
				.text(o)
		}), l(".sf-field-reset")
		.click(function () {
			window.location.reload(!0)
		}), i();
	var s, p = "ontouchstart" in document.documentElement,
		u = d.prototype;
	u.toggle = function (e) {
		var t = l(this);
		if (("click" !== e.type || 0 !== e.clientX) && !t.is(
				".disabled, :disabled")) {
			var e = (t = c(t))
				.hasClass("show"),
				o = t.hasClass("dropdown-submenu") ? function (e) {
					for (var t, o = [e]; !t || t.hasClass(
							"dropdown-submenu");)(t = (t = (t || e)
								.parent())
							.hasClass("dropdown-menu") ? t.parent() : t)
						.children('[data-toggle="dropdown"]') && o.unshift(
							t);
					return o
				}(t) : null;
			if (r(0, o), !e) {
				o = o || [t], !p || t.closest(".navbar-nav")
					.length || o[0].find(".dropdown-backdrop")
					.length || l('<div class="' + ".dropdown-backdrop"
						.substr(1) + '"/>')
					.appendTo(o[0])
					.on("click", r);
				for (var n, a, i = 0, d = o.length; i < d; i++) o[i]
					.hasClass("show") || (o[i].addClass("show"), o[i]
						.children(".dropdown-menu")
						.slideDown(150), a = n = void 0, n = o[i].children(
							".dropdown-menu"), a = o[i], n.hasClass(
							"pull-center") && n.css("margin-right", -n
							.outerWidth() / 2), n.hasClass("pull-middle") &&
						n.css("margin-top", -n.outerHeight() / 2 - a
							.outerHeight() / 2));
				s = o[0]
			}
			return !1
		}
	}, u.keydown = function (e) {
		if (/(38|40|27)/.test(e.keyCode)) {
			var t = l(this);
			if (e.preventDefault(), e.stopPropagation(), !t.is(
					".disabled, :disabled")) {
				var o = c(t),
					n = o.hasClass("open");
				if (!n || n && 27 == e.keyCode) return 27 == e.which && o
					.find('[data-toggle="dropdown"]')
					.trigger("focus"), t.trigger("click");
				n = " li:not(.divider):visible a", (t = o.find(
						'li:not(.divider):visible > input:not(disabled) ~ label, [role="menu"]' +
						n + ', [role="listbox"]' + n))
					.length && (o = t.index(t.filter(":focus")), 38 == e
						.keyCode && 0 < o && o--, 40 == e.keyCode && o < t
						.length - 1 && o++, t.eq(o = ~o ? o : 0)
						.trigger("focus"))
			}
		}
	};
	var f = l.fn.dropdown;
	l.fn.dropdown = function (o) {
			return this.each(function () {
				var e = l(this),
					t = e.data("bs.dropdown");
				t || e.data("bs.dropdown", t = new d(this)), "string" ==
					typeof o && t[o].call(e)
			})
		}, l.fn.dropdown.Constructor = d, l.fn.dropdown.clearMenus = function (
			o) {
			return l(".dropdown-backdrop")
				.remove(), l('.show [data-toggle="dropdown"]')
				.each(function () {
					var e = c(l(this)),
						t = {
							relatedTarget: this
						};
					e.hasClass("open") && (e.trigger(o = l.Event(
							"hide.bs.dropdown", t)), o
						.isDefaultPrevented() || e.removeClass("open")
						.trigger("hidden.bs.dropdown", t))
				}), this
		}, l.fn.dropdown.noConflict = function () {
			return l.fn.dropdown = f, this
		}, l(document)
		.ready(function (e) {
			e(".dropdown-menu")
				.each(function (e, t) {})
		}), l(document)
		.off(".bs.dropdown.data-api")
		.on("click.bs.dropdown.data-api", r)
		.on("click.bs.dropdown.data-api", '[data-toggle="dropdown"]', u.toggle)
		.on("click.bs.dropdown.data-api",
			'.dropdown-menu > li > input[type="checkbox"] ~ label, .dropdown-menu > li > input[type="checkbox"], .dropdown-menu.noclose > li, .dropdown-menu.noclose',
			function (e) {
				e.stopPropagation()
			})
		.on("change.bs.dropdown.data-api", "", u.change)
		.on("keydown.bs.dropdown.data-api",
			'[data-toggle="dropdown"], [role="menu"], [role="listbox"]', u
			.keydown), l(document)
		.on("sf:ajaxstart", ".searchandfilter", function () {
			t(), lazyload(), i(), e()
		}), l(document)
		.on("sf:ajaxfinish", ".searchandfilter", function () {
			t(), lazyload(), i(), e()
		}), l(document)
		.on("sf:init", ".searchandfilter", function () {
			t(), lazyload(), i(), e()
		}), t(), lazyload(), e(), l('[data-toggle="tooltip"]')
		.tooltip()
}(jQuery);
//Customer: okpangola