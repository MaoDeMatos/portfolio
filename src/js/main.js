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
		/** Define "this" for the setTimeout() function */
		$this = $(this);
		/** On desktop version */
		if (windowW > 799) {
			/** If not active : animates to the arrow */
			if (!$this.hasClass("active")) {
				$this.toggleClass("arrow");
				setTimeout(function () {
					$this.toggleClass("arrow").toggleClass("active").toggleClass("left");
				}, 1000);
				/** If already active : animates to the left */
			} else {
				$this.toggleClass("active");
				setTimeout(function () {
					$this.toggleClass("left");
				}, 1000);
			}
			/** On mobile version */
		} else {
			$this.toggleClass("arrow");
		}
		nav.toggleClass("active");
	});

	/** On color theme button click */
	color_theme_button.click(function () {
		/** If page has dark mode on */
		if (html.hasClass("dark")) {
			/** Cancel animation queue on the image and fade it out */
			color_theme_button.children("img").stop(true, true).fadeOut(200);

			/** After .2s, change image and fade it back in */
			setTimeout(function () {
				color_theme_button
					.children("img")
					.prop("src", img_dir + "moon-dark.svg")
					.fadeIn(200);
			}, 200);

			/** Change the background of the style sections */
			section_style_start.css(
				"background-image",
				"url(" + img_dir + "code_block_web_red.svg)"
			);
			section_style_pcs.css(
				"background-image",
				"url(" + img_dir + "pcs_red.svg)"
			);
			section_style_bubbles.css(
				"background-image",
				"url(" + img_dir + "speech_bubbles_black.png)"
			);

			/** Change the icons in the contact section */
			contact_section
				.find("#linkedin_img")
				.attr("src", img_dir + "linkedin_black.svg");
			contact_section
				.find("#github_img")
				.attr("src", img_dir + "github_black.svg");

			/** Else, page has light mode on */
		} else {
			/** Cancel animation queue on the image and fade it out */
			color_theme_button.children("img").stop(true, true).fadeOut(200);

			/** After .2s, change image and fade it back in */
			setTimeout(function () {
				color_theme_button
					.children("img")
					.prop("src", img_dir + "sun.svg")
					.fadeIn(200);
			}, 200);

			/** Change the background of the style sections */
			section_style_start.css(
				"background-image",
				"url(" + img_dir + "code_block_web.svg)"
			);
			section_style_pcs.css("background-image", "url(" + img_dir + "pcs.svg)");
			section_style_bubbles.css(
				"background-image",
				"url(" + img_dir + "speech_bubbles_grey.png)"
			);

			/** Change the icons in the contact section */
			contact_section
				.find("#linkedin_img")
				.attr("src", img_dir + "linkedin_grey.svg");
			contact_section
				.find("#github_img")
				.attr("src", img_dir + "github_grey.svg");
		}
		/** Change the color theme class */
		html.toggleClass("dark").toggleClass("light");
	});
});
