/**
 * Changes the Y-position of an element's background.
 * It is designed to work with the "scroll" event.
 * @param {object} target A JQuery element
 * @param {object} options An object that can contain up to
 * the 3 following optional arguments :
 * - direction : direction when scrolling down, can be "1" (down) or "-1" (up) (default value : "1")
 * - factor : the larger the number, the smaller the increment will be, for more precision, if needed (default: 10)
 * - shift : the shift will be applied from the top position of the element (default: 0)
 * @returns {void}
 */
function parallaxAnimation(target, options = {}) {
  /**
   * Variables
   */
  let direction = options.direction || 1,
    factor = options.factor || 10,
    shift = options.shift || 0,
    startPos = Math.ceil(target.offset().top) - $(window).height(),
    endPos = Math.ceil(target.offset().top) + target.outerHeight(),
    increment = 0;

  /** If the element is displayed on the window */
  if (startPos < actualPos && actualPos < endPos) {
    /** Define scroll percent for the target element */
    scrollPercent = (actualPos / endPos) * 100;

    /** Define "movement" value */
    increment = (scrollPercent / factor) * direction;

    /** Change the Y-Position of the background */
    target.css("background-position-y", shift + increment + "rem");
  }
}

/**
 * Custom top scrollbar animation
 * @param {object} scrollbar JQuery object, your scrollbar element
 */
function scrollBarAnimation(scrollbar) {
  scrollPercent = Math.abs(
    (actualPos / (windowH - document.body.clientHeight)) * 100
  ).toFixed(1);
  if (isNaN(scrollPercent)) {
    scrollbar.prop("style", "width: 0;");
  } else {
    scrollbar.prop("style", "width: " + scrollPercent + "vw;");
  }
}

/**
 * Toggle menu on/off
 * @param $this The element that triggers the event
 */
function toggleMenu($this) {
  /** Define "$this" for the setTimeout() function */
  /** On desktop version */
  if (windowW > 799) {
    /** If not active : animates to the arrow */
    if (!$this.hasClass("active")) {
      $this.toggleClass("arrow");
      setTimeout(function () {
        $this.toggleClass("arrow").toggleClass("active").toggleClass("left");
      }, 600);
      /** If already active : animates to the left */
    } else {
      $this.toggleClass("active");
      setTimeout(function () {
        $this.toggleClass("left");
      }, 600);
    }
    /** On mobile version */
  } else {
    $this.toggleClass("arrow");
  }
  nav.toggleClass("active");
}

/**
 * Toggle light/dark modes
 */
function changeColorTheme() {
  /** If page has light mode on */
  if (html.hasClass("light")) {
    /** Cancel animation queue on the image and fade it out */
    color_theme_button.children("img").stop(true, true).fadeOut(200);
    meta_theme_color.attr("content", "#252525");

    /** After .2s, change image and fade it back in */
    setTimeout(function () {
      color_theme_button
        .children("img")
        .prop("src", icons_dir + "sun.svg")
        .fadeIn(200);
    }, 200);

    /** Change the icons in the contact section */
    contact_section
      .find("#linkedin_img")
      .attr("src", icons_dir + "linkedin_grey.svg");
    contact_section
      .find("#github_img")
      .attr("src", icons_dir + "github_grey.svg");
    contact_section
      .find("#gitlab_img")
      .attr("src", icons_dir + "gitlab_grey.svg");

    setCookie("color_theme", "dark");
    /** Else, page has dark mode on */
  } else {
    /** Cancel animation queue on the image and fade it out */
    color_theme_button.children("img").stop(true, true).fadeOut(200);
    meta_theme_color.attr("content", "#b9b9b9");

    /** After .2s, change image and fade it back in */
    setTimeout(function () {
      color_theme_button
        .children("img")
        .prop("src", icons_dir + "moon-dark.svg")
        .fadeIn(200);
    }, 200);

    /** Change the icons in the contact section */
    contact_section
      .find("#linkedin_img")
      .attr("src", icons_dir + "linkedin_black.svg");
    contact_section
      .find("#github_img")
      .attr("src", icons_dir + "github_black.svg");
    contact_section
      .find("#gitlab_img")
      .attr("src", icons_dir + "gitlab_black.svg");

    setCookie("color_theme", "light");
  }
  /** Change the color theme class */
  html.toggleClass("dark light");
}

/**
 * Set a cookie
 * @param {string} cName Cookie name
 * @param {string} cValue Cookie value
 * @param {number} expirationDays Number of days before it expires (default value : 60)
 *
 * Created simply to store user preferences about the color theme
 */
function setCookie(cName, cValue, expirationDays = 60) {
  const date = new Date();
  date.setTime(date.getTime() + expirationDays * 24 * 60 * 60 * 1000);
  document.cookie =
    cName +
    "=" +
    cValue +
    ";expires=" +
    date.toUTCString() +
    ";path=/; SameSite=Strict;"; // + "Secure"
}
