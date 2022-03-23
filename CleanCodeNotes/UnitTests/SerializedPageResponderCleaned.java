package UnitTests;

import externalClasses.WikiPage;

public class SerializedPageResponderCleaned {
  public void testGetPageHieratchyAsXml() throws Exception {
    makePages("PageOne", "PageOne.ChildOne", "PageTwo");

    submitRequest("root", "type:pages");

    assertResponseIsXml();
    assertResponseContains("<name>PageOne</name>","<name>PageTwo</name>","<name>ChildOne</name>");
  }

  public void testGetPageHieratchyAsXmlDoesntContainiSymbolicLinks() throws Exception {
    WikiPage page = makePage("PageOne");
    makePages("PageOne.ChildOne", "PageTwo");

    addLinkTo(page, "PageTwo", "SymPage");

    submitRequest("root", "type:pages");

    assertResponseIsXml();
    assertResponseContains("<name>PageOne</name>","<name>PageTwo</name>","<name>ChildOne</name>");
    assertResponseDoesNotContain("SymPage");
  }

  public void testGetDataAsHtml() throws Exception {
    makePageWithContent("TestPageOne", "test page");

    submitRequest("root", "type:data");

    assertResponseIsXml();
    assertResponseContains("test page", "<Test");
  }


  private void assertResponseIsXml() {
  }
  private void assertResponseContains(String string, String string2, String string3) {
  }
  private void submitRequest(String string, String string2) {
  }
  private void makePages(String string, String string2, String string3) {
  }
  private void assertResponseContains(String string, String string2) {
  }
  private void makePageWithContent(String string, String string2) {
  }
  private void assertResponseDoesNotContain(String string) {
  }
  private void addLinkTo(WikiPage page, String string, String string2) {
  }
  private void makePages(String string, String string2) {
  }
  private WikiPage makePage(String string) {
    return null;
  }
}
