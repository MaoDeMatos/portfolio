/**
 * Functions
 */

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
