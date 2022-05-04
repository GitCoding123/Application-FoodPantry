function openNav() {
	let menuBtn = document.getElementById("menu-btn");
	let nav = document.getElementById("nav");
	nav.style.minWidth = "16.375em"; //16.375em = 262.2px / 16px (262.2px is the width of the logo in nav and 16 px is the default font size)
	nav.style.padding = "0 1em 0 1em";
	nav.style.borderRight = "5px double #96d647";
	menuBtn.innerHTML = "&#x2715";
	menuBtn.setAttribute("onclick", "closeNav()");
}

function closeNav() {
	let menuBtn = document.getElementById("menu-btn");
	let nav = document.getElementById("nav");
	nav.style.minWidth = "0%";
	nav.style.padding = "0";
	nav.style.borderRight = "none";
	menuBtn.innerHTML = "&#9776;";
	menuBtn.setAttribute("onclick", "openNav()");
}

function openShopList() {
	let shopBtn = document.getElementById("shop-btn");
	let rightCol = document.getElementById("right-column");
	rightCol.style.minWidth = "16.375em"; //same width as the left collapsible menu
	rightCol.style.padding = "0 1em 0 1em";
	rightCol.style.borderLeft = "5px double #96d647";
	shopBtn.innerHTML = "&#129046;";
	shopBtn.setAttribute("onclick", "closeShopList()");
}

function closeShopList() {
	let shopBtn = document.getElementById("shop-btn");
	let rightCol = document.getElementById("right-column");
	rightCol.style.minWidth = "0%";
	rightCol.style.padding = "0"
	rightCol.style.borderLeft = "none";
	shopBtn.innerHTML = "&#129044;";
	shopBtn.setAttribute("onclick", "openShopList()");
}