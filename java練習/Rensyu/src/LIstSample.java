import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;


public class LIstSample {

public static void main(String[] args) {

	List<String>list = new ArrayList<String>();

	//値の記憶はaddメソッドを利用

	list.add("1");
	list.add("2");
	list.add("3");
	list.add("4");
	list.add("5");
	list.add("田中");


	//値の取得
	for(int i =0; i < list.size(); i++) {
	//値の取得はgetメソッドを利用
	System.out.println(list.get(i));
	}

	System.out.println("");

	//拡張for文を利用するともっと簡単
	for(String s : list) {
		System.out.println(s);
	}


	List<String>list2 = new LinkedList<String>();

	//値の記憶はaddメソッドを利用

	list2.add("1");
	list2.add("2");
	list2.add("3");
	list2.add("4");
	list2.add("5");
	list2.add("田中");


	//値の取得
	for(int j =0; j < list2.size(); j++) {
	//値の取得はgetメソッドを利用
	System.out.println(list2.get(j));
	}

	}
}
