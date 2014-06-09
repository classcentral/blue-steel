<footer>
  <div class="container">
      <div class="row">
          <div class="col-md-2 col-sm-4 col-xs-4 link-column">
              <h5 class="list-heading">Browse courses by</h5>
              <ul>
                  <li><a href="/subjects" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Browse by - Subjects'])">Subjects</a></li>
                  <li><a href="/languages" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Browse by - Languages'])">Languages</a></li>
                  <li><a href="/random" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Browse by - Random'])" title="Are you feeling lucky?">Random</a></li>
              </ul>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-4 link-column">
              <h5 class="list-heading">More</h5>
              <ul>
                  <li><a target="_blank" href="http://www.blog.class-central.com" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Blog'])">Blog</a></li>
                  <li><a href="{{ path('ClassCentralSiteBundle_news') }}" title="MOOC News" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'News'])">News</a></li>
                  <li><a href="{{ path('ClassCentralSiteBundle_faq') }}" title="Frequently asked questions about MOOCs" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'FAQ'])">FAQ</a></li>
                  <li><a href="{{ path('ClassCentralSiteBundle_privacy') }}" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Privacy Policy'])"> Privacy Policy</a></li>
              </ul>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-4 link-column">
              <h5 class="list-heading">Connect</h5>
              <ul>
                  <li><a href="mailto:contact@class-central.com" title="Class Central contact" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Connect','Email'])">Email</a></li>
                  <li><a target="_blank" href="https://www.facebook.com/classcentral" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Connect','Facebook'])">Facebook</a></li>
                  <li><a target="_blank" href="https://twitter.com/classcentral" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Connect','Twitter'])">Twitter</a></li>
                  <li><a target="_blank" href="https://plus.google.com/+ClassCentral" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Connect','Google+'])">Google+</a></li>
                  <li><a target="_blank" href="http://www.youtube.com/channel/UC0VOktSaVdm_YIUa4X5mBTQ" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Connect','Youtube'])">Youtube</a></li>
              </ul>
          </div>
          <div class="col-md-6 col-lg-4 col-sm-7 col-xs-8 newsletter-column">
              <div class="newsletter-wrap">
                  <h4><span>Newsletter. </span>Never miss a course.</h4>
                  <form class="newsletter-subscription" action="{{ path('newsletter_subscribe_to',{code: 'mooc-report'}) }}" method="post">
                      <p>
                          <input type="email" placeholder="your@email.com" name="email" required>
                          <input type="submit" value="SUBSCRIBE">
                      </p>
                  </form>
                  <span class="reminder">No spam. Unsubscribe any time.</span>
              </div>
          </div>
      </div>

      <div class="row">
          <div class="col-lg-12">
              <span class="copyright">©Class Central 2011-2014</span>
              <iframe src="{{ path('github_btn') }}?user=dhawalhshah&repo=class-central&type=watch&count=true"
                      allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
          </div>
      </div>
  </div>
</footer>