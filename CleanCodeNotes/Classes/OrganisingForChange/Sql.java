package Classes.OrganisingForChange;

import Classes.OrganisingForChange.externalClasses.Column;

public abstract class Sql {
  public Sql(String table, Column[] columns) {
    
  };
  abstract public String generate();
}
