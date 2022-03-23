package MeaningfulNames;

public class UseSearchableNames {
  private static final int[] t = null;
  private static final int[] taskEstimate = null;
  private static final int NUMBER_OF_TASKS = 34;

  public Object UseSearchableNamesPoor() {
    Object s = 0;
    for (int i = 0; i < 34; i++) {
      s = (t[i]*4) / 5;
    }
    return s;
  }

  /**
   * By using a name which can be searched via IDE will make it easier to find variables.
   * 
   * @return
   */
  public Object UseSearchableNamesFixed() {
    int realDaysPerIdealDay = 4;
    final int WORK_DAYS_PER_WEEK = 5;
    int sum = 0;
    for (int i = 0; i < NUMBER_OF_TASKS; i++) {
      int realTaskDays = taskEstimate[i] * realDaysPerIdealDay;
      int realTaskWeeks = (realTaskDays / WORK_DAYS_PER_WEEK);
      sum += realTaskWeeks;
    }
    return sum;
  }
}
