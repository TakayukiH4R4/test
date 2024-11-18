
public class practice2 {

	public static void main(String[] args) {
		// TODO 自動生成されたメソッド・スタブ


	//第９講

	int a = 1;
	if(a == 0) {
		System.out.println("aは０に等しい");
	}else if(a == 1) {
		System.out.println("aは１に等しい");
	}else {
		System.out.println("aは０でも１でもない");
	}

	switch(a) {
	case 0:
		System.out.println("aは０に等しい");
		break;
	case 1:
		System.out.println("aは１に等しい");
		break;
	default:
		System.out.println("aは０でも１でもない");
	}

	//第１０講

	String [] name = new String[3];
	name[0] = "田中";
	name[1] = "高橋";
	name[2] = "斎藤";
	System.out.println(name[0]);

	String[] name2 ={"秋元","長浜","阿部"};
	System.out.println(name2[0]);


	char[] c = {'X','Y','Z'};
	System.out.println(c[1]);


	int[] i = {1,4,8,12};
	System.out.println(i[1]);

	name [0] = "加藤";
	System.out.println(name[0]);
	System.out.println(name[1]);

	//第１１講

	String[][] country =
		{
			{"日本","タイ"},
			{"アメリカ","ブラジル"},
			{"フランス","ロシア"}
		};

	System.out.println(country[1][1]);

	String[][] country2 = new String[3][2];

	country2[0][0] = "日本";
	country2[0][1] = "タイ";
	country2[1][0] = "アメリカ";
	country2[1][1] = "ブラジル";
	country2[2][0] = "フランス";
	country2[2][1] = "ロシア";

	System.out.println(country2[0][1]);


	//第１２講

	for(int i2 = 1; i2 <= 10; i2++){
		System.out.println(i2);
		System.out.println("|");
		}


	//第１３講
	for(int i3 = 1; i3 <= 10; i3++) {
		if(i3 % 2 == 0) {
			System.out.println(i3);
		}
	}

	for(int e = 0; e < 3; e++) {
		for(int f = 1; f < 4; f++) {
			System.out.println(f);
		}
	}


	int g = 10;
	String g2 = g >= 0? "プラス":"マイナス";
	System.out.println(g2);

	int h = 15;
	String h2 = h%2 == 0? "偶数":"奇数";
	System.out.println(h2);


	for(int j = 0; j <= 5; j++) {
		String j2 = j % 2 == 0? "☆":"★";
		System.out.println(j2);
	}

	//第１４講

	int k = 1;
	while(k <= 5) {
		System.out.println(k);
		k++;
	}

	int l = 1;
	while(l <= 10) {
		System.out.println(l);
		l+=3;
	}


	//第１５講

	int m = 1;
	do {
		System.out.println(m);
		m--;
	} while(m > 1);

	int m2 = 0;
	do {
		System.out.println(m2);
		m2++;
	} while(m2 < 10);


//ここで終わりここで終わりここで終わり
	}
}


