<footer>
  <div class="container">
      <div class="row">
          <div class="col-md-2 col-sm-4 col-xs-4 link-column">
              <h5 class="list-heading">Browse courses by</h5>
              <ul>
                  <li><a href="/random" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Browse by - Random'])" title="Are you feeling lucky?">Random</a></li>
                  <li><a href="/providers" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Browse by - Providers'])">Providers</a></li>
                  <li><a href="/universities" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Browse by - Universities'])">Universities</a></li>
                  <li><a href="/institutions" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Browse by - Institutions'])">Institutions</a></li>
                  <li><a href="/subjects" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Browse by - Subjects'])">Subjects</a></li>
                  <li><a href="/careers" onmousedown="ga('send','event', 'Footer', 'Browse by - Careers')">Careers</a></li>
                  <li><a href="/languages" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Browse by - Languages'])">Languages</a></li>
              </ul>
          </div>
          <div class="col-md-2 col-sm-4 col-xs-4 link-column">
              <h5 class="list-heading">More</h5>
              <ul>
                  <li><a href="https://www.class-central.com/report/moocs-for-credit/" onmousedown="ga('send','event', 'Footer', 'MOOCs for Credit')">MOOCs for Credit</a></li>
                  <li><a href="/certificate" onmousedown="ga('send','event', 'Footer', 'Earn a Credential')">Earn A Credential</a></li>
                  <li><a href="https://www.class-central.com/report/follow-button-for-education/" onmousedown="ga('send','event', 'Footer', 'Follow Button')">Follow Button</a></li>
                  <li><a href="/report" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'MOOC Report'])">MOOC Report</a></li>
                  <li><a href="/faq" title="Frequently asked questions about MOOCs" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'FAQ'])">FAQ</a></li>
                  <li><a href="/privacy-policy" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'Privacy Policy'])"> Privacy Policy</a></li>
                  <li><a href="/moocwatch" onmousedown="ga('send','event', 'Footer', 'MOOCWatch')">MOOCWatch</a></li>
                  <li><a href="https://www.class-central.com/report/mooc-tracker/" onmousedown="_gaq.push(['_trackEvent', 'Footer', 'What is MOOC Tracker?'])">What is MOOC Tracker?</a></li>
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
                  <form class="newsletter-subscription" action="/newsletters/subscribeTo/mooc-report" method="post">
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
              <iframe src="/githubbtn?user=dhawalhshah&repo=class-central&type=watch&count=true"
                      allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
          </div>
      </div>
  </div>
</footer>

<?php wp_footer(); ?>

