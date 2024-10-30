
public class HelloWorld {

	public static void main(String[] args) {
		// TODO 自動生成されたメソッド・スタブ


		//Hello world の出力
		System.out.println("Hello world!!");

		System.out.println("おはよう。");
		System.out.println(0);
		System.out.println("例外が発生しました。");
		System.out.println("例外が");
		System.out.println("発生しました");
		System.out.println("例外が\r\n発生しました");


		//第４講

		int suugaku = 10;
		int eigo = 82;
		if(suugaku > 50 ||eigo >50){
			System.out.println("この人は合格です");
		}

		String name = "高橋";
		System.out.println(name);


		//いろんなプリミティブ値
		String str2 ="Tanaka";
		int num1 = 12345;
		char char1 ='A';
		boolean boo = true;

		System.out.println(str2);
		System.out.println(num1);
		System.out.println(char1);
		System.out.println(boo);


		//第５講

		int a4 = 10/3;
		System.out.println(a4);

		float a5 =(float)10/3;
		System.out.println(a5);

		double a6 =(double)10/3;
		System.out.println(a6);

		int a7 =7%3;
		System.out.println(a7);

		//第６講


		int a8 = 10;
		int a9 = 20;
		System.out.println(++a8);
		System.out.println(++a8);
		System.out.println(++a8);
		System.out.println(++a8);

		System.out.println(a8++);
		System.out.println(a8++);
		System.out.println(a8++);
		System.out.println(a8++);

		System.out.println(--a9);
		System.out.println(--a9);
		System.out.println(--a9);
		System.out.println(--a9);


		System.out.println(a9--);
		System.out.println(a9--);
		System.out.println(a9--);
		System.out.println(a9--);


		//第７講
		int a10 = 10;
		if(a10 < 20) {
			System.out.println("A");
		}

		String a11 = "山田";
		if(a11.equals ("山田")) {
			System.out.println(a11+"さん");
		}

		int a12 = 5;
		if(a12 < 10 && 3 < a12) {
			System.out.println("AA");
		}


		int a13 = 5;
		if(a13 >=5 || a13<=0) {
			System.out.println("B");
		}


		int a14 = 7;
		if(a14 > 8) {
			System.out.println("A");
		}else if(a14 < 10) {
			System.out.println("B");
		}


		int a15 = 3;
		if(a15 >5) {
			System.out.println("A");
		}else{
			System.out.println("Z") ;
		}

		int age = 35;
		if(age < 20) {
			System.out.println("未成年");
		}else if(age > 80) {
			System.out.println("高齢者");
		}else {
			System.out.println("成人");
		}



	}





}
