package Classes.OrganisingForChange;

import Classes.OrganisingForChange.externalClasses.Column;
import Classes.OrganisingForChange.externalClasses.Criteria;

/**
 * Class violates the Single Responsibility Principle and is violates the Open
 * Close Principle. Any changes which are required could affect the other
 * methods of this class.
 * 
 * Can be improved by creating closed Classes in the examples which just handle
 * one operation and that extends the SQL Class
 */
public abstract class SqlBad {
  public SqlBad(String table, Column[] columns) {
  };

  abstract public String create();

  abstract public String insert(Object[] fields);

  abstract public String selectAll();

  abstract public String findByKey(String keyColumn, String keyValue);

  abstract public String select(Column column, String pattern);

  abstract public String select(Criteria criteria);

  abstract public String preparedInsert();

  abstract public String columnList(Column[] columns);

  abstract public String valuesList(Object[] filed, final Column[] columns);

  abstract public String selectWithCriteria(String criteria);

  abstract public String placeHolderList(Column[] columns);
}
