window.onscroll = function() {
	fadeinoderso();
	stick();
};
window.onload = function() {
	first_check_night_mode()
};


var x = document.getElementById("eksde2");
var y = document.getElementById("eksde");
var f = document.getElementById("nav");
var icon = document.getElementById("m-icon");
var l_icon = document.getElementById("icon-link");
var class_title = document.getElementsByClassName("entry title");
var class_entry = document.getElementsByClassName("eksde3");

function stick() {
	if (x != null) {
		if (scrollY >= x.offsetTop + 85) {
			x.style.transition = "height 0.6s, opacity 0.85s, padding 0.6s";
			x.classList.add("stick_nav");
			y.classList.add("stick_but");
			f.classList.add("site-title-stick");

			y.setAttribute('href', "#nav");
		} else {
			f.classList.remove("site-title-stick");
			x.classList.remove("stick_nav");
			y.classList.remove("stick_but");

			y.removeAttribute('href');
		}
	} else {;
	}


}

var rofl = setInterval(timer, 1000);

function timer(){
	if(window.localStorage.getItem("time") == null){
		window.localStorage.setItem("time", 0);
		var x = 0;
	} else {
		var x = parseInt(window.localStorage.getItem("time"));
		x++;
		window.localStorage.setItem("time", x);
	}
}




function first_check_night_mode() {
	if (window.localStorage.getItem("status") == "true") {
		night_mode_active();
	} else {
		night_mode_inactive();
	}
}

function check_night_mode() {
	document.body.style.transition = "background-color 1.2s";

	if (window.localStorage.getItem("status") == "true") {
		night_mode_inactive();
	} else {
		night_mode_active();
	}
}

function night_mode_inactive() {
	document.body.style.backgroundColor = "#fff";
	icon.style.filter = "brightness(100%)";
	b = false;

	window.localStorage.setItem("status", "false");
	l_icon.setAttribute("data-active", "active")
}

function night_mode_active() {
	document.body.style.backgroundColor = "#202020";
	icon.style.filter = "brightness(100%)";
	b = true;

	window.localStorage.setItem("status", "true");
	l_icon.setAttribute("data-active", "inactive")
}

function fadeinoderso() {
	for (var i = 0; i < class_entry.length; i++) {
		if ((class_entry[i].offsetTop < window.scrollY + 575)) {
			class_entry[i].style.opacity = "1";
		} else {
			class_entry[i].style.opacity = "0";
		}
	}


}