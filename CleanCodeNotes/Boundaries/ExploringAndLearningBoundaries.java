package Boundaries;

import java.util.logging.ConsoleHandler;
import java.util.logging.Logger;

import Boundaries.externalClasses.Test;

public class ExploringAndLearningBoundaries {
  /**
   * When learning a new package, consider making a small test suite on how you
   * expect to use the external library. The exmaple below is for log4j.
   * 
   * Learning tests give you an understanding of how the library works and is a
   * positive return on investment.
   */
  @Test
  public void testLogCreate() {
    Logger logger = Logger.getLogger("MyLogger");
    logger.info("hello");
  }

  @Test
  public void testLogAddHandler() {
    Logger logger = Logger.getLogger("MyLogger");
    ConsoleHandler handler = new ConsoleHandler();
    logger.addHandler(handler);
    logger.info("hello");
  }
}
