package jp.co.diworks.action;

public class Human {

	public static void main(String[]args) {


		HumanName abc= new HumanName();
		HumanAge edf = new HumanAge();
		HumanAddress ghi = new HumanAddress();


		System.out.println(abc.getName());
		System.out.println(edf.getAge());
		System.out.println(ghi.getAddress());
	}
}
