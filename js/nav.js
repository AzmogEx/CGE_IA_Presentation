document.addEventListener("DOMContentLoaded", function () {
	var links = document.querySelectorAll("nav a");
	var icon = document.querySelector("nav i");
	var container = document.querySelector("nav ul");

	links.forEach(function (link) {
		link.addEventListener("click", function () {
			links.forEach(function (otherLink) {
				otherLink.parentNode.classList.remove("active");
			});

			link.parentNode.classList.add("active");

			var leftPosition = link.getBoundingClientRect().left - container.getBoundingClientRect().left;

			icon.style.left = leftPosition + "px";
			if (link.textContent.trim() === "Sugestões") {
				icon.style.width = "134px";
			} else if (link.textContent.trim() === "Apps") {
				icon.style.width = "90px";
			} else {
				icon.style.width = "100px";
			}
		});
	});
});
