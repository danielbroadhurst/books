package ErrorHandling.externalClasses;

public class PortDeviceFailure extends Throwable {

  public PortDeviceFailure(DeviceResponseException e) {
  }

  public PortDeviceFailure(ATM1212UnlockedException e) {
  }

  public PortDeviceFailure(GMXError e) {
  }

}
