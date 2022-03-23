import externalClasses.PageCrawlerImpl;
import externalClasses.PageData;
import externalClasses.PathParser;
import externalClasses.SuiteResponder;
import externalClasses.WikiPage;
import externalClasses.WikiPagePath;

public class SmallFunctions {

  /**
   * Long Hard to understand function with lots of duplicated code.
   * @param pageData
   * @param includeSuiteSetup
   * @return
   * @throws Exception
   */
  public static String testableHtml(PageData pageData, boolean includeSuiteSetup) throws Exception {
    WikiPage wikiPage = pageData.getWikiPage();
    StringBuffer buffer = new StringBuffer();
    if (pageData.hasAttribute("Test")) {
      if (includeSuiteSetup) {
        WikiPage suiteSetup = PageCrawlerImpl.getInheritedPage(
          SuiteResponder.SUITE_SETUP_NAME, wikiPage
        );
        if (suiteSetup != null) {
          WikiPagePath pagePath = suiteSetup.getPageCrawler().getFullPath(suiteSetup);
          String pagePathName = PathParser.render(pagePath);
          buffer.append("!include -setup .")
          .append(pagePathName)
          .append("\n");
        }
      }
      WikiPage setup = PageCrawlerImpl.getInheritedPage("SetUp", wikiPage);
      if (setup != null) {
        WikiPagePath setupPath = wikiPage.getPageCrawler().getFullPath(setup);
          String setupPathName = PathParser.render(setupPath);
          buffer.append("!include -setup .")
          .append(setupPathName)
          .append("\n");
      }
    }
    buffer.append(pageData.getContent());
    if (pageData.hasAttribute("Test")) {
      WikiPage teardown = PageCrawlerImpl.getInheritedPage("TearDown", wikiPage);
      if (teardown != null) {
        WikiPagePath tearDownPath = wikiPage.getPageCrawler().getFullPath(teardown);
          String tearDownPathName = PathParser.render(tearDownPath);
          buffer.append("\n")
          .append("!include -teardown .")
          .append(tearDownPathName)
          .append("\n");
      }
      if (includeSuiteSetup) {
        WikiPage suiteTearDown = PageCrawlerImpl.getInheritedPage(
          SuiteResponder.SUITE_TEARDOWN_NAME, wikiPage
        );
        if (suiteTearDown != null) {
          WikiPagePath pagePath = suiteTearDown.getPageCrawler().getFullPath(suiteTearDown);
          String pagePathName = PathParser.render(pagePath);
          buffer.append("!include -teardown .")
          .append(pagePathName)
          .append("\n");
        }
      }
    }
    pageData.getContent(buffer.toString());
    return pageData.getHtml();
  }

  /**
   * Refactored code which extracts parts of the function into other functions to improve readability.
   * 
   * @param pageData
   * @param isSuite
   * @return
   * @throws Exception
   */
  public static String renderPageWithSetupsAndTeardowns(PageData pageData, boolean isSuite) throws Exception {
    boolean isTestPage = pageData.hasAttribute("Test");
    if (isTestPage) {
      includeSetupAndTeardownPages(pageData, isSuite);
    }
    return pageData.getHtml();
  }
  private static void includeSetupPages(WikiPage testPage, StringBuffer newPageContent, boolean isSuite) {
    if (isSuite) {
      WikiPage suiteSetup = PageCrawlerImpl.getInheritedPage(
        SuiteResponder.SUITE_SETUP_NAME, testPage
      );
      if (suiteSetup != null) {
        WikiPagePath pagePath = suiteSetup.getPageCrawler().getFullPath(suiteSetup);
        String pagePathName = PathParser.render(pagePath);
        newPageContent.append("!include -setup .")
        .append(pagePathName)
        .append("\n");
      }
    }
    WikiPage setup = PageCrawlerImpl.getInheritedPage("SetUp", testPage);
    if (setup != null) {
      WikiPagePath setupPath = testPage.getPageCrawler().getFullPath(setup);
        String setupPathName = PathParser.render(setupPath);
        newPageContent.append("!include -setup .")
        .append(setupPathName)
        .append("\n");
    }
  }
  private static void includeTeardownPages(WikiPage testPage, StringBuffer newPageContent, boolean isSuite) {
    WikiPage teardown = PageCrawlerImpl.getInheritedPage("TearDown", testPage);
    if (teardown != null) {
      WikiPagePath tearDownPath = testPage.getPageCrawler().getFullPath(teardown);
        String tearDownPathName = PathParser.render(tearDownPath);
        newPageContent.append("\n")
        .append("!include -teardown .")
        .append(tearDownPathName)
        .append("\n");
    }
    if (isSuite) {
      WikiPage suiteTearDown = PageCrawlerImpl.getInheritedPage(
        SuiteResponder.SUITE_TEARDOWN_NAME, testPage
      );
      if (suiteTearDown != null) {
        WikiPagePath pagePath = suiteTearDown.getPageCrawler().getFullPath(suiteTearDown);
        String pagePathName = PathParser.render(pagePath);
        newPageContent.append("!include -teardown .")
        .append(pagePathName)
        .append("\n");
      }
    }
  }

  /**
   * Refactored out the test page section to decrease the functions size and improve readability furhter.
   * 
   * @param pageData
   * @param isSuite
   * @return
   * @throws Exception
   */
  public static String renderPageWithSetupsAndTeardownsFinal(PageData pageData, boolean isSuite) throws Exception {
    boolean isTestPage = pageData.hasAttribute("Test");
    if (isTestPage) {
      includeSetupAndTeardownPages(pageData, isSuite);
    }
    return pageData.getHtml();
  }
  private static void includeSetupAndTeardownPages(PageData pageData, boolean isSuite) {
    WikiPage testPage = pageData.getWikiPage();
    StringBuffer newPageContent = new StringBuffer();
    includeSetupPages(testPage, newPageContent, isSuite);
    newPageContent.append(pageData.getContent());
    includeTeardownPages(testPage, newPageContent, isSuite);
    pageData.setContent(newPageContent.toString());
  }
}

