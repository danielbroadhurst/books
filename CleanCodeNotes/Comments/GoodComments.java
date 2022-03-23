// Copyright (C) Comments are sometimes required on Source Code files.

package Comments;

import java.text.SimpleDateFormat;
import java.util.TimeZone;
import java.util.regex.Pattern;

import Comments.externalClasses.StringUtil;
import externalClasses.PathParser;
import externalClasses.WikiPagePath;

public class GoodComments {

  public int comapreTo(Object o) {
    if (o instanceof WikiPagePath) {
      WikiPagePath p = (WikiPagePath) o;
      Object names = new Object();
      String compressedName = StringUtil.join(names, "");
      compressedName.trim();
      // the trim is real important because it does something really important -
      // Example of Amplification which highlights important parts
      String compressedArgumentName = StringUtil.join(p.names, "");
      return compressedName.compareTo(compressedArgumentName);
    }
    return 1; // we are greater because we are right - Example Explanation of Intent
  }

  public static SimpleDateFormat makeStandardFormat() {
    // SimpleDateFormat is not thread safe so we need to create each instance
    // independantly - Example of Warning of Consequences
    SimpleDateFormat df = new SimpleDateFormat("EEE, dd MMM yyyy HH:mm:ss z");
    df.setTimeZone(TimeZone.getTimeZone("GMT"));
    extracted(df.toString());
    return df;
  }

  public void testCompareTo() {
    WikiPagePath a = PathParser.parse("PageA");
    assertTrue(a.compareTo(a) == 0); // a == a - Example of Clarification, to help show what the line is doing.
  }

  // format matched kk:mm:ss EEE, MMM dd, yyyy - Example of an Informative Comment
  private static Pattern extracted(String string) {
    return Pattern.compile("\\d*:\\d*:\\d* \\w*, \\w* \\d*, \\d*");
  }

  // TODO: This function would need to be completed - Example of TODO Comments
  private void assertTrue(boolean b) {
  }
}
