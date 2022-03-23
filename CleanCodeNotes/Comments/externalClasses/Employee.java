package Comments.externalClasses;

public class Employee {

  public static final boolean flags = true;
  public int age;

  public Employee(int age) {
    this.age = age;
  }

  public static boolean isEligibleForFullBenefits() {
    return false;
  }

}
