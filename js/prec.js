//function opacityfull2(id1, id2) {
//	var x = document.getElementById(id1);
//	var y = document.getElementById(id2);
//	x.style.opacity = .6;
//	x.style.height = "20%";
//	x.style.width = "20%";
//	x.style.backgroundColor = "white";
//	y.style.opacity = 1;
//	y.style.height = "47%";
//	y.style.backgroundColor = "white";
//}


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

//
//
//function opacityzero(id1, id2) {
//	var x = document.getElementById(id1);
//	var y = document.getElementById(id2);
//	x.style.opacity = 0;
//	x.style.height = "70px";
//	x.style.width = "0px";
//	x.style.backgroundColor = "white";
//	y.style.opacity = 0;
//	y.style.opacity = 0;
//	y.style.height = "220px";
//	y.style.backgroundColor = "white";
//}


function bgcolor(id) {
	var x = document.getElementById(id);
	x.style.backgroundColor = "white";
}



function bgcolorout(id) {
	var x = document.getElementById(id);
	x.style.backgroundColor = "#00094a";
}
$(window).load(function () {
	function hideAll() {
		$(".lines").css("opacity", "0");
		$(".titles").css("opacity", "0");
	}

	$(".nodes").click(function (e) {
		hideAll();
		var no = ($(this).attr("id")).toString();
		no = no.substr(4, no.length);
		no = parseInt(no);
		console.log(no);
		switch (no) {
		case 1:
			opacityfull('nname1', 'nline1');
			break;
		case 2:
			opacityfull('nname6', 'nline5');
			break;
		case 3:
			opacityfull('nname9', 'nline8');
			break;
		case 4:
			opacityfull('nname10', 'nline9');
			break;
		case 5:
			opacityfull('nname5', 'nline10');
			break;
		case 6:
			opacityfull('nname2', 'nline2');
			break;
		case 7:
			opacityfull('nname3', 'nline3');
			break;
		case 8:
			opacityfull('nname4', 'nline4');
			break;
		case 9:
			opacityfull('nname7', 'nline6');
			break;
		case 10:
			opacityfull('nname8', 'nline7');
			break;
		case 11:
			opacityfull('nname11', 'nline12');
			break;
		case 12:
			opacityfull('nname12', 'nline11');
			break;
		case 13:
			opacityfull('nname13', 'nline13');
			break;
		default:
			console.log("fuck up")
		}
	});
})