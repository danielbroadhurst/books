package ErrorHandling;

import ErrorHandling.externalClasses.ACMEPort;
import ErrorHandling.externalClasses.ATM1212UnlockedException;
import ErrorHandling.externalClasses.DeviceResponseException;
import ErrorHandling.externalClasses.GMXError;
import ErrorHandling.externalClasses.PortDeviceFailure;
import externalClasses.logger;

public class DefineExceptionClasses {

  /**
   * Lots of duplication of how certain errors are handled.
   */
  public void withoutExceptionClass() {
    ACMEPort port = new ACMEPort(12);

    try {
      port.open();
    } catch (DeviceResponseException e) {
      reportPortError(e);
      logger.log("Device response exception", e);
    } catch (ATM1212UnlockedException e) {
      reportPortError(e);
      logger.log("Unlock exception", e);
    } catch (GMXError e) {
      reportPortError(e);
      logger.log("Device response exception");
    } finally {
      // Additional Code can be placed here...
    }
  }

  /**
   * By creating a wrapper which reduces dependency on the third party. By
   * creating a standardised PortDeviceFailure the code can be cleaned up.
   */
  public void withExceptionClass() {
    LocalPort port = new LocalPort(12);
    try {
      port.open();
    } catch (PortDeviceFailure e) {
      reportError(e);
      logger.log(e.getMessage(), e);
    } finally {
      // Additional Code can be placed here...
    }
  }

  private void reportError(PortDeviceFailure e) {
  }

  private void reportPortError(GMXError e) {
  }

  private void reportPortError(DeviceResponseException e) {
  }

  private void reportPortError(ATM1212UnlockedException e) {
  }
}
