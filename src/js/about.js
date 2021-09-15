$(function () {
	/** Init the background images position */
	parallaxAnimation(section_style_start);
	parallaxAnimation(section_style_languages, { shift: -6 });
	parallaxAnimation(section_style_pcs, { shift: -8 });

	/** On scroll */
	$(window).scroll(function () {
		/** Changes the background images position depending on the scroll state */
		parallaxAnimation(section_style_start);
		parallaxAnimation(section_style_languages, { shift: -6 });
		parallaxAnimation(section_style_pcs, { shift: -8 });
	});
});
