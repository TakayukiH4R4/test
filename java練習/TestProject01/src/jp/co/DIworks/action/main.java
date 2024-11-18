package jp.co.DIworks.action;

public class main {

	public static void main(String[] args) {
		// TODO 自動生成されたメソッド・スタブ

		System.out.println("Hello world");
		System.out.println(gokei());

		int total = gokei();
		System.out.println(total);

		System.out.println(gokei_2(3, 4));

		System.out.println(en_menseki(4));


	//ここで記述は終了
	}

	//ここにメソッドの記述

	public static int gokei() {
		return 1+1;
	}

	public static int gokei_2(int number1, int number2) {
		return number1 + number2;
	}

	public static double en_menseki(int hankei) {
		return hankei * hankei * 3.14;
	}

		//ここでメソッドの記述は終了
	}


