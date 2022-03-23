package ErrorHandling;

import ErrorHandling.externalClasses.ACMEPort;
import ErrorHandling.externalClasses.ATM1212UnlockedException;
import ErrorHandling.externalClasses.DeviceResponseException;
import ErrorHandling.externalClasses.GMXError;
import ErrorHandling.externalClasses.PortDeviceFailure;

/**
 * Wrapper Class for ACME Port means changing the third party software is
 * possible.
 */
public class LocalPort {
  private ACMEPort innerPort;

  public LocalPort(int portNumber) {
    innerPort = new ACMEPort(portNumber);
  }

  public void open() throws PortDeviceFailure {
    try {
      innerPort.open();
    } catch (DeviceResponseException e) {
      throw new PortDeviceFailure(e);
    } catch (ATM1212UnlockedException e) {
      throw new PortDeviceFailure(e);
    } catch (GMXError e) {
      throw new PortDeviceFailure(e);
    }
  }

}
