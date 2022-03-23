package externalClasses;

import UnitTests.externalClasses.WikiPageProperties;

public class PageData {
  public WikiPage getWikiPage() {
    WikiPage wikiPage = new WikiPage();
    return wikiPage;
  }

  public boolean hasAttribute(String string) {
    return false;
  }

  public Object getContent(String string) {
    return null;
  }

  public String getHtml() {
    return null;
  }

  public Object getContent() {
    return null;
  }

  public void setContent(String string) {
  }

  public WikiPageProperties getProperties() {
    return null;
  }
}
