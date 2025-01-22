import java.util.Scanner; 

public class UserInfo {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter your username: ");
        String name = sc.nextLine();


        
        System.out.print("Enter your username: ");
        String name = sc.nextLine();

        
        System.out.print("Enter your password: ");
        int age = sc.nextInt();
        sc.nextLine(); 

        
        System.out.print("login succesfully welcome: ");
        String address = sc.nextLine();

        
        System.out.println("Name: " + name);
        System.out.println("Age: " + age);
        System.out.println("Address: " + address);

        sc.close(); 
    }
}