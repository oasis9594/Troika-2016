function opacityfull2(id1, id2) {
	var x = document.getElementById(id1);
	var y = document.getElementById(id2);
	x.style.opacity = .6;
	x.style.height = "20%";
	x.style.width = "20%";
	x.style.backgroundColor = "white";
	y.style.opacity = 1;
	y.style.height = "47%";
	y.style.backgroundColor = "white";
}


function opacityfull(id1, id2) {
	var x = document.getElementById(id1);
	var y = document.getElementById(id2);
	x.style.opacity = .6;
	x.style.height = "15%";
	x.style.width = "20%";
	x.style.backgroundColor = "white";
	y.style.opacity = 1;
	y.style.height = "31%";
	y.style.backgroundColor = "white";
}



function opacityzero(id1, id2) {
	var x = document.getElementById(id1);
	var y = document.getElementById(id2);
	x.style.opacity = 0;
	x.style.height = "70px";
	x.style.width = "0px";
	x.style.backgroundColor = "white";
	y.style.opacity = 0;
	y.style.opacity = 0;
	y.style.height = "220px";
	y.style.backgroundColor = "white";
}



function bgcolor(id) {
	var x = document.getElementById(id);
	x.style.backgroundColor = "white";
}



function bgcolorout(id) {
	var x = document.getElementById(id);
	x.style.backgroundColor = "#00094a";
}