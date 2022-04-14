/**
 * Variables
 */
let html = $("html"),
  meta_theme_color = $("meta[name=theme-color]"),
  nav = $("#nav"),
  active_link =
    "header nav ul li:nth-child(" + $("#page_num").attr("data-page-num") + ")",
  img_dir = "/public/img/",
  icons_dir = img_dir + "icons/",
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

  /** Init the background images position */
  parallaxAnimation(section_style_start, { shift: 1 });

  /** On window resize */
  $(window).resize(function () {
    /** Reset the new window size */
    windowW = window.innerWidth;
    windowH = $(window).height();
  });

  /** On scroll */
  $(window).scroll(function () {
    actualPos = $(window).scrollTop();

    /** Changes the background images position depending on the scroll state */
    parallaxAnimation(section_style_start, { shift: 1 });

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
