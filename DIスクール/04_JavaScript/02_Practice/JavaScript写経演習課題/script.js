document.write("■■■問１■■■" + "<br>");

for (var a = 1; a <= 5; a++) {
	document.write("★");
}

document.write("<br>" + "<br>");
document.write("■■■問２■■■" + "<br>");

for (var b = 1; b <= 6; b++) {
	if (b == 4) {
		document.write("<br>");
	}
	document.write("★");
}

document.write("<br>" + "<br>");
document.write("■■■問３■■■" + "<br>");

for (var c = 1; c <= 10; c++) {
	
	document.write("☆");
	if (c == 5) {
		document.write("<br>");
	}
}

document.write("<br>" + "<br>");
document.write("■■■問４■■■" + "<br>");

for (var d = 1; d <= 4; d++) {
	for (var e = 1; e <= 5; e++) {
		document.write("★");
	}
	document.write("<br>");
}

document.write("<br>" + "<br>");
document.write("■■■問５■■■" + "<br>");

for (var f = 1; f <= 4; f++) {
	for (var g = 1; g <= 3; g++) {
		document.write("★");
	}
	document.write("<br>");
}

document.write("<br>" + "<br>");
document.write("■■■問６■■■" + "<br>");

for (var h = 1; h <= 3; h++) {
	for (var i = 1; i <= 3; i++) {
		if (i % 2 == 0) {
			document.write("☆");
		} else {
			document.write("★");
		}
	}
	document.write("<br>");
}

document.write("<br>" + "<br>");
document.write("■■■問７■■■" + "<br>");

for (var j = 1; j <= 4; j++) {
	for (var k = 1; k <= 5; k++) {
		if (k % 3 == 0) {
			document.write("☆");
		} else {
			document.write("★");
		}
	}
	document.write("<br>");
}

document.write("<br>" + "<br>");
document.write("■■■問８■■■" + "<br>");

for (var l = 1; l <= 5; l++) {
	for (var m = 1; m <= l; m++) {
		document.write("★");
	}
	document.write("<br>");
}