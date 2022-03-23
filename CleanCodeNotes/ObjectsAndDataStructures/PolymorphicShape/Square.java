package ObjectsAndDataStructures.PolymorphicShape;

import ObjectsAndDataStructures.Concrete_Point;

public class Square implements Shape {
  private Concrete_Point topLeft;
  private double side;

  public double area() {
    return side * side;
  }
}
