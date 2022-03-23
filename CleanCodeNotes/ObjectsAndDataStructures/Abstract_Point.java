package ObjectsAndDataStructures;

/**
 * Expose an interface which can be used to manipulate data.
 */
public interface Abstract_Point {
  double getX();
  double getY();
  void setCartesian(double x, double y);
  double getR();
  double getTheta();
  void setPolar(double r, double theta);
}
