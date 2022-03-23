package Classes.SingleResponsibilityPrinciple;

import javax.swing.JFrame;

import Classes.SingleResponsibilityPrinciple.externalClasses.Component;
import Classes.SingleResponsibilityPrinciple.externalClasses.MetaDataUser;

/**
 * SuperDashboard
 * 
 * The class has two responsibilities, one to get the Component and the other is
 * to return the version and build information. This could be improved by
 * extracting the version functions into a separate class Version.
 */
public class SuperDashboard extends JFrame implements MetaDataUser {

  public Component getLastFocusedComponent() {
    return null;

  }

  public void setLastFocused() {

  }

  public int getMajorVersionNumber() {
    return 0;
  }

  public int getMinorVersionNumber() {
    return 0;
  }

  public int getBuildNumber() {
    return 0;
  }
}