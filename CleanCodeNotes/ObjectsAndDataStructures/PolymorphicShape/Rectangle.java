package ObjectsAndDataStructures.PolymorphicShape;

import ObjectsAndDataStructures.Concrete_Point;

public class Rectangle implements Shape {
  private Concrete_Point topLeft;
  private double height;
  private double width;

  public double area() {
    return height * width;
  }
}
