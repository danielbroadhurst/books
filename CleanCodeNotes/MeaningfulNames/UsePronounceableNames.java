package MeaningfulNames;

import java.sql.Date;

public class UsePronounceableNames {
  public static String DtaRcrd102() {
    Date genymdhms = new Date(23423423);
    Date modymdhms = new Date(23423423);
    String pszqint = "102";
    return genymdhms.toString() + modymdhms.toString() + pszqint;
  }

  public static String Customer() {
    Date generationTimestamp = new Date(23423423);
    Date modificationTimestamp = new Date(23423423);
    String recordId = "102";
    return generationTimestamp.toString() + modificationTimestamp.toString() + recordId;
  }
}