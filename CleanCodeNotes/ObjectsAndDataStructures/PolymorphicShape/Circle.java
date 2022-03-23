package ObjectsAndDataStructures.PolymorphicShape;

import ObjectsAndDataStructures.Concrete_Point;

public class Circle implements Shape {
  private Concrete_Point center;
  private double radius;
  public final double PI = 3.141592653589793;

  public double area() {
    return PI * radius * radius;
  }
}
