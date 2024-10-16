document.write("■■■問１■■■" + "<br>");

function mennseki(hannkei) {
	return hannkei * hannkei * 3.14;
}
	
document.write(mennseki(5) + "<br>");
document.write(mennseki(7) + "<br>");
document.write(mennseki(10) + "<br>");

document.write("<br>")
document.write("■■■問２■■■" + "<br>");

function goukei(a, b, a_price = 500, b_price = 200) {
	return "合計金額は" + (a_price * a + b_price * b) + "円です。"
}

document.write(goukei(2, 4) + "<br>");
document.write(goukei(1, 5) + "<br>");
document.write(goukei(3, 7) + "<br>");