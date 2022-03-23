package MeaningfulNames;

import java.util.ArrayList;
import java.util.List;

import MeaningfulNames.externalClasses.Cell;

/**
 * Clean Code - Chapter 2: Meaningful Names
 * 
 * Techniques and ideas on how to use meaningful names to improve programmes.
 */
public class UseIntentionRevealingNames {

  private static final Cell[] gameBoard = null;
  private static final int[][] theList = null;
  private static final int SATUS_VALUE = 0;
  private static final int FLAGGED = 4;

  /**
   * What is theList?
   * What is x[0] and the number 4?
   * How would you use the returned list?
   * 
   * @return
   */
  public List<int[]> getThem() {
    List<int[]> list1 = new ArrayList<int[]>();
    for (int[] x : theList) {
      if (x[0] == 4) {
        list1.add(x);
      }
    }
    return list1;
  }

  /**
   * Uses named variables and constants to make the function more readable.
   * 
   * @return
   */
  public List<int[]> getFlaggedCell() {
    List<int[]> flaggedCells = new ArrayList<int[]>();
    for (int[] cell : theList) {
      if (cell[SATUS_VALUE] == FLAGGED) {
        flaggedCells.add(cell);
      }
    }
    return flaggedCells;
  }

  /**
   * Improves on previous by utilising a Cell class.
   * 
   * @return
   */
  public List<Cell> getFlaggedCells() {
    List<Cell> flaggedCells = new ArrayList<Cell>();
    for (Cell cell : gameBoard) {
      if (cell.isFlagged()) {
        flaggedCells.add(cell);
      }
    }
    return flaggedCells;
  }
}