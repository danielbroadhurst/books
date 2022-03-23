package Boundaries;

import java.util.HashMap;
import java.util.Map;

import Boundaries.externalClasses.Sensor;

public class UsingThirdPartyCode {
  /**
   * When wanting to limit the use of Third Party Code, wrap the implementation in
   * a wrapper class. This way when the sensors map is passed around only getById
   * is a usuable method.
   */
  private Map sensors = new HashMap();

  public Sensor getById(String id) {
    return (Sensor) sensors.get(id);
  }
}
