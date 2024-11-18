
public class practice3 {


		public static int totalPrice(int fruitprice, double tax, int haiso) {
			 return (int)(fruitprice * tax) + haiso ;
			 }

		public static String hello(){
			return "こんにちは";
		}


		public static void main(String[] args) {
			// TODO 自動生成されたメソッド・スタブ


			System.out.println(totalPrice(300,1.08,350));
			System.out.println(totalPrice(450,1.08,350));
			System.out.println(totalPrice(400,1.08,350));
			System.out.println(totalPrice(350,1.08,350));

			System.out.println("山田さん。"+hello());


//ここまでが記述範囲
		}
	}


