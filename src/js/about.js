$(function () {
	/** Init the background images position */
	parallaxAnimation(section_style);
	parallaxAnimation(section_style_2, { shift: -6 });
	parallaxAnimation(section_style_3, { shift: -8 });

	/** On scroll */
	$(window).scroll(function () {
		/** Changes the background images position depending on the scroll state */
		parallaxAnimation(section_style);
		parallaxAnimation(section_style_2, { shift: -6 });
		parallaxAnimation(section_style_3, { shift: -8 });
	});
});
