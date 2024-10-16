document.write("■■■問１■■■"+"<br>");

function mennseki(hannkei,ensyuuritu=3.14) {
return hannkei * hannkei * ensyuuritu;
}
	
document.write(mennseki(5)+"<br>");
document.write(mennseki(7)+"<br>");
document.write(mennseki(10)+"<br>");

document.write("<br>")
document.write("■■■問２■■■"+"<br>");

function goukei(adult,child,adult_price=500,child_price=200) {
	return (adult_price * adult) + (child_price * child) + "円です。"
}

document.write(goukei(2, 4)+"<br>");
document.write(goukei(1, 5)+"<br>");
document.write(goukei(3, 7)+"<br>");