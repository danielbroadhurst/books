package ErrorHandling;

import ErrorHandling.externalClasses.DeviceHandle;
import ErrorHandling.externalClasses.DeviceShutDownError;
import ErrorHandling.externalClasses.Record;
import externalClasses.logger;

public class UseExceptionsRatherThanReturnCodes {
  private static final String DEV1 = null;
  private static final String DEVICE_SUSPENDED = null;

  /**
   * Using error flags can clutter the method and make it confusing.
   */
  public void sendShutDown_ErrorCode() {
    Record record = new Record();
    DeviceHandle handle = getHandle(DEV1);
    // Check the state of the device
    if (handle != DeviceHandle.INVALID) {
      // Save the device status to the record field
      retrieveDeviceRecord(handle);
      // If not suspended, shut down
      if (record.getStatus() != DEVICE_SUSPENDED) {
        pauseDevice(handle);
        clearDeviceWorkQueue(handle);
        closeDevice(handle);
      } else {
        logger.log("Device Suspended. Unable the shut down.");
      }
    } else {
      logger.log("Invalid Handle for: " + DEV1.toString());
    }
  }

  /**
   * Using exceptions can clean up the function by the use of a try/catch block.
   */
  public void sendShutDown_Exception() {
    try {
      tryToShutDown();
    } catch (DeviceShutDownError e) {
      logger.log(e.toString());
    }
  }

  private void tryToShutDown() throws DeviceShutDownError {
    DeviceHandle handle = getHandleThrows(DEV1);
    Record record = retrieveDeviceRecord(handle);
    
    pauseDevice(handle);
    clearDeviceWorkQueue(handle);
    closeDevice(handle);
    logger.log(record.toString());
  }

  // TODO: These are methods which are not implemented.
  private void closeDevice(DeviceHandle handle) {
  }

  private void clearDeviceWorkQueue(DeviceHandle handle) {
  }

  private void pauseDevice(DeviceHandle handle) {
  }

  private Record retrieveDeviceRecord(DeviceHandle handle) {
    logger.log("Device Suspended. Unable the shut down.");
    return null;
  }

  private DeviceHandle getHandle(String id) {
    return null;
  }

  private DeviceHandle getHandleThrows(String id) throws DeviceShutDownError {
    if (id.toString() == "123") {
      throw new DeviceShutDownError("Invalid handle for: " + id.toString());
    }
    return null;
  }
}
