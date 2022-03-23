package MeaningfulNames;

public class AddMeaningfulContext {
  /**
   * Unclear Context - Everything happens in the one function.
   */
  public void printGuessStatistics(char candidate, int count) {
    String number;
    String verb;
    String pluralModifier;
    if (count == 0) {
      number = "no";
      verb = "are";
      pluralModifier = "s";
    } else if (count == 1) {
      number = "1";
      verb = "is";
      pluralModifier = "";
    } else {
      number = Integer.toString(count);
      verb = "are";
      pluralModifier = "s";
    }
    String guessMessage = String.format("There %s %s %s%s", verb, number, candidate, pluralModifier);
    System.out.println(guessMessage);
  }

  /**
   * Variables shoudl have a context and functions extracted to improve readability
   */
  private String number;
  private String verb;
  private String pluralModifier;

  public String make(char candidate, int count) {
    createPluralDependentMessageParts(count);
    return String.format("There %s %s %s%s", verb, number, candidate, pluralModifier);
  }

  private void createPluralDependentMessageParts(int count) {
    if (count == 0) {
      thereAreNotLetters();
    } else if (count == 1) {
      thereIsOneLetter();
    } else {
      thereAreManyLetters(count);
    }
  }

  private void thereAreManyLetters(int count) {
    number = Integer.toString(count);
    verb = "are";
    pluralModifier = "s";
  }

  private void thereIsOneLetter() {
    number = "1";
    verb = "is";
    pluralModifier = "";
  }

  private void thereAreNotLetters() {
    number = "no";
    verb = "are";
    pluralModifier = "s";
  }
}
