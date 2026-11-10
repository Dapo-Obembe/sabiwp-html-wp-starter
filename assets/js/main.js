/**
 * Small progressive-enhancement interactions.
 */
(function () {
	'use strict';

	const menuToggle = document.querySelector('.menu-toggle');
	const navigation = document.querySelector('.primary-navigation');

	if (!menuToggle || !navigation) {
		return;
	}

	menuToggle.addEventListener('click', function () {
		const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';

		menuToggle.setAttribute('aria-expanded', String(!isExpanded));
		navigation.classList.toggle('is-open', !isExpanded);
	});
})();
