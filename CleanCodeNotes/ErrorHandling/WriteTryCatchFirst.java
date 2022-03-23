package ErrorHandling;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import ErrorHandling.externalClasses.RecordedGrip;
import ErrorHandling.externalClasses.StorageException;
import ErrorHandling.externalClasses.Test;

public class WriteTryCatchFirst {
  
  @Test (expected = StorageException.class)
  public void retrieveSectionShouldThrowOnInvalidFileName() throws StorageException, IOException {
    WriteTryCatchFirst.retrieveSection("invalid - file");
  }

  public static List<RecordedGrip> retrieveSection(String sectionName) throws StorageException, IOException {
    try {
      FileInputStream stream = new FileInputStream(sectionName);
      stream.close();
    } catch (FileNotFoundException e) {
      throw new StorageException("retrival error", e);
    } catch (IOException e) {
    }
    return new ArrayList<RecordedGrip>();
  }
}
