package ErrorHandling.externalClasses;

public class ACMEPort {
  private int value;

  public ACMEPort(int i) {
    this.value = i;
  }

  public void open() throws DeviceResponseException, ATM1212UnlockedException, GMXError {
    if (value >= 5) {
      throw new DeviceResponseException();
    } else if (value >= 10) {
      throw new ATM1212UnlockedException();
    } else {
      throw new GMXError();
    }
  }

}
