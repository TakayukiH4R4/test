var myoji1 = ["高木","田中","山本"];
document.write(myoji1);

document.write("<br>"+"<br>");

var color = ["赤","白","黒"];
document.write(color);

document.write("<br>"+"<br>");

document.write(color[0]);
document.write(color[1]);
document.write(color[2]);

document.write("<br>"+"<br>");

delete color[0];
document.write(color);

document.write("<br>"+"<br>");


var pre1 = ["東京","神奈川","埼玉"];
pre1[3]="千葉";
document.write([pre1]);

document.write("<br>"+"<br>");

var pre2 = ["東京","神奈川","埼玉"];
delete pre2[0];
pre2[0] = "千葉";
document.write(pre2);

document.write("<br>"+"<br>");

var month = ["1月","２月","３月"];
month[2]="誕生日"
document.write(month);
document.write(month[2]);

document.write("<br>"+"<br>");

var myoji2 = {"A組":"田中","B組":"高橋","C組":"斎藤"};
document.write(myoji2["A組"]);
document.write("<br>"+"<br>");


var number = {"１番":"佐藤","２番":"山田","３番":"斎藤"};
document.write(number["１番"]);