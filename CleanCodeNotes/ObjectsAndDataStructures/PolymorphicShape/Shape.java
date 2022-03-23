package ObjectsAndDataStructures.PolymorphicShape;

/**
 * Object-orientated solution:
 *
 * The area method is implemented in each shape when a new Shape class is
 * created. No Geometry class is necessary, but if a new function is added to
 * shape then all the classes which implement the class are affected.
 */
public interface Shape {
  public double area();
}
