document.addEventListener("DOMContentLoaded", function () {
	const target = ".splide";
	const options = {
		mediaQuery: "min",
		perPage: 1,
		gap: 24,
		perMove: 1,
		focus: "center",
		type: "loop",
		breakpoints: {
			600: {
				perPage: 2,
			},
			1025: {
				perPage: 3,
				gap: 36,
				drag: false,
			},
		},
	};
	const mySplide = new Splide(target, options);

	mySplide.mount();
});
