package Comments;

import Comments.externalClasses.Employee;

/**
 * ExplainYourselfInCode
 */
public class ExplainYourselfInCode {
  private static final boolean HOURLY_FLAG = true;

  // Check to see if the employee is eligible for the full benefits
  public boolean usingComments() {
    Employee employee = new Employee(55);
    if ((Employee.flags && HOURLY_FLAG) && (employee.age > 65)) {
      return true;
    }
    return false;
  }

  public boolean usingCode() {
    if (Employee.isEligibleForFullBenefits()) {
      return true;
    }
    return false;
  }
}