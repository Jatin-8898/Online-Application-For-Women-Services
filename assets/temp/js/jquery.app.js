/**
 * Author: Himanshu Thakkar
 * Module/App: Main Js
 */

! function (e) {
	"use strict";

	function t() {
		e(".slimscroll-menu").slimscroll({
			height: "auto",
			position: "right",
			size: "8px",
			color: "#9ea5ab",
			wheelStep: 5
		})
	}

	function a() {
		e(".slimscroll").slimscroll({
			height: "auto",
			position: "right",
			size: "8px",
			color: "#9ea5ab"
		})
	}

	function n() {
		e("#side-menu").metisMenu()
	}

	function i() {
		e(".button-menu-mobile").on("click", function (a) {
			a.preventDefault(), e("body").toggleClass("enlarged"), t()
		})
	}

	function s() {
		e(window).width() < 1025 ? e("body").addClass("enlarged") : 1 != e("body").data("keep-enlarged") && e("body").removeClass("enlarged")
	}

	function o() {
		e("#sidebar-menu a").each(function () {
			this.href == window.location.href && (e(this).addClass("active"), e(this).parent().addClass("active"), e(this).parent().parent().addClass("in"), e(this).parent().parent().prev().addClass("active"), e(this).parent().parent().parent().addClass("active"), e(this).parent().parent().parent().parent().addClass("in"), e(this).parent().parent().parent().parent().parent().addClass("active"))
		})
	}

	function r() {
		t(), a(), n(), i(), s(), o()
	}
	r()
}(jQuery);
