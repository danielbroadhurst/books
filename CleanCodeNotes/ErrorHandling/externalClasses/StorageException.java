package ErrorHandling.externalClasses;

import java.io.FileNotFoundException;

public class StorageException extends Throwable {

  public StorageException(String string, FileNotFoundException e) {
  }

}
