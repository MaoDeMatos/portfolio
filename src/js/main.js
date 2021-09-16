/**
 * Variables
 */
 var html = $("html"),
 nav = $("#nav"),
 page_num = $("#page_num").attr("data-page-num"),
 active_link = "header nav ul li:nth-child(" + page_num + ")",
 img_dir = "/src/img/",
 section_style_start = $("#section-style-start"),
 section_style_languages = $("#section-style-languages"),
 section_style_pcs = $("#section-style-pcs"),
 section_style_bubbles = $("#section-style-bubbles"),
 menu_button = $("#hamburger"),
 color_theme_button = $("#change-color-theme-button"),
 scrollbar = $("#scrollbar-container"),
 contact_section = $("#section-contact"),
 windowW = window.innerWidth,
 windowH = $(window).height(),
 actualPos = $(window).scrollTop();

/** Wait for the page to load before executing the code */
$(function () {
 /** Sets the actual page in the header nav */
 $(active_link).toggleClass("active");

 /** Init the scrollbar position */
 scrollBarAnimation(scrollbar);

 /** On window resize */
 $(window).resize(function () {
	 /** Reset the new window size */
	 windowW = window.innerWidth;
	 windowH = $(window).height();
 });

 /** On scroll */
 $(window).scroll(function () {
	 actualPos = $(window).scrollTop();

	 /** Changes top scrollbar width depending on the scroll state */
	 scrollBarAnimation(scrollbar);
 });

 /** On menu button click, activate or de-activate it */
 menu_button.click(function () {
	 toggleMenu($(this));
 });

 /** On color theme button click */
 color_theme_button.click(function () {
	 changeColorTheme();
 });
});
