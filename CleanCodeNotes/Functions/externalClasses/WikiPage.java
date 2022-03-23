package externalClasses;


public class WikiPage {

  public PageCrawlerImpl getPageCrawler() {
    return new PageCrawlerImpl();
  }

  public WikiPagePath getFullPath(WikiPage suiteSetup) {
    WikiPagePath wikiPagePath = new WikiPagePath();
    return wikiPagePath;
  }

  public PageData getData() {
    return null;
  }

}
