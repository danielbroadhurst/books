package ObjectsAndDataStructures.ProceduralShape;

import ObjectsAndDataStructures.ProceduralShape.externalClasses.NoSuchShapeException;

/**
 * Uses Data Structures to operate on the shape classes.
 * 
 * If another function is added to Geometry then the shapes are unchanged.
 * 
 * If a new Shape is added then all the functions in Geometry will need to be
 * updated.
 */
public class Geometry {
  public final double PI = 3.141592653589793;

  public double area(Object shape) throws NoSuchShapeException {
    if (shape instanceof Square) {
      Square s = (Square) shape;
      return s.side * s.side;
    } else if (shape instanceof Rectangle) {
      Rectangle r = (Rectangle) shape;
      return r.height * r.width;
    } else if (shape instanceof Circle) {
      Circle c = (Circle) shape;
      return PI * c.radius * c.radius;
    }
    throw new NoSuchShapeException();
  }
}
