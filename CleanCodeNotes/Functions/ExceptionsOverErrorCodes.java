import externalClasses.configKeys;
import externalClasses.logger;
import externalClasses.page;
import externalClasses.registry;

public class ExceptionsOverErrorCodes {
  private static final boolean E_OK = false;
  private static final String E_ERROR = null;

  private boolean deletePage(page page) {
    return false;
  }

  /**
   * Long nested and hard to understand code which is printing out errors at each stage.
   * @return
   */
  public String UsingErrorCodes() {
    page page = new page();
    if (deletePage(page) == E_OK) {
      if (registry.deleteReference(page.name) == E_OK) {
        if (configKeys.deleteKey(page.name.makeKey()) == E_OK) {
          logger.log("page deleted");
        } else {
          logger.log("configKey not deleted");
        }
      } else {
        logger.log("deleteReference from registry failed");
      }
    } else {
      logger.log("delete failed");
      return E_ERROR;
    }
    return null;
  }

  /**
   * By using a try/catch block you can separate the happy path from the error handling.
   */
  public void UsingExceptions() {
    try {
      page page = new page();
      deletePage(page);
      registry.deleteReference(page.name);
      configKeys.deleteKey(page.name.makeKey());
    } catch (Exception e) {
      logger.log(e.getMessage());
    }
  }
  
  /**
   * By extracting the try catch block into a function it can separate the important part of the code.
   * @param page
   */
  public void delete(page page) {
    try {
      deletePageAndAllReferences(page);
    } catch (Exception e) {
      logError(e);
    }
  }
  private void logError(Exception e) {
    logger.log(e.getMessage());
  }
  private void deletePageAndAllReferences(page page) throws Exception {
    deletePage(page);
    registry.deleteReference(page.name);
    configKeys.deleteKey(page.name.makeKey());
  }
}
