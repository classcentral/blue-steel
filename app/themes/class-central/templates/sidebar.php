
<?php if (roots_display_sidebar()) : ?>
  <aside class="sidebar col-sm-3">
    <?php if (is_home()) : ?>

    <?php else : ?>
      <?php //dynamic_sidebar('sidebar-primary'); ?>

      <section class="widget">
        <h3 class="section-heading">
            <span>Featured Post</span>
        </h3>
        <ul>
          <li>
            <div class="crop-wrap"><img src="http://placehold.it/85x58" alt="post thumbnail"></div>
            <div class="post-info-wrap">
              <a href="/futurelearn-350k-learners/">Futurelearn gains steam with 350,000 learners and 7 new partner institutions</a>
              <span class="post-date">June 10, 2014</span>
            </div>
          </li>
        </ul>
      </section>

      <section class="widget recent-posts-3 widget_recent_entries">
        <h3 class="section-heading">
            <span>Latest Posts</span>
        </h3>
        <ul>
          <li>
            <div class="crop-wrap"><img src="http://placehold.it/85x58" alt="post thumbnail"></div>
            <div class="post-info-wrap">
              <a href="/futurelearn-350k-learners/">Futurelearn gains steam with 350,000 learners and 7 new partner institutions</a>
              <span class="post-date">June 10, 2014</span>
            </div>
          </li>
          <li>
            <div class="crop-wrap"><img src="http://placehold.it/85x58" alt="post thumbnail"></div>
            <div class="post-info-wrap">
              <a href="/japanese-moocs-from-gacco-and-jmooc/">The first Japanese MOOCs from gacco and JMOOC</a>
              <span class="post-date">June 2, 2014</span>
            </div>
          </li>
          <li>
            <div class="crop-wrap"><img src="http://placehold.it/85x58" alt="post thumbnail"></div>
            <div class="post-info-wrap">
              <a href="/study-crime-for-credit-penn-state-mooc/">Study Crime for Credit with a Penn State MOOC</a>
              <span class="post-date">May 30, 2014</span>
            </div>
          </li>
          <li>
            <div class="crop-wrap"><img src="http://placehold.it/85x58" alt="post thumbnail"></div>
            <div class="post-info-wrap">
              <a href="/downton-abbey-futurelearn-mooc/">Downton Abbey, Americans, and an English Country House MOOC</a>
              <span class="post-date">May 26, 2014</span>
            </div>
          </li>
        </ul>
      </section>

      <section class="widget categories-3 widget_categories">
        <h3 class="section-heading">
            <span>Categories</span>
        </h3>
        <ul>
          <li class="cat-item cat-item-61"><a href="/category/interviews/" title="View all posts filed under Interviews">Interviews</a>
        </li>
          <li class="cat-item cat-item-26"><a href="/category/mooc-commentary/" title="View all posts filed under MOOC Commentary">MOOC Commentary</a>
        </li>
          <li class="cat-item cat-item-8"><a href="/category/mooc-interview-2/" title="View all posts filed under MOOC Interview">MOOC Interview</a>
        </li>
          <li class="cat-item cat-item-3"><a href="/category/mooc-provider-walkthrough/" title="View all posts filed under MOOC Provider Walkthrough">MOOC Provider Walkthrough</a>
        </li>
          <li class="cat-item cat-item-1"><a href="/category/uncategorized/" title="View all posts filed under Uncategorized">Uncategorized</a>
        </li>
            </ul>
      </section>

    <?php endif; ?>
    <!--
    <div class="ad-wrap">
      <div class="ad-content">

        <a class="ad-title" href="#">
        Lorem ipsum dolor
        </a>

        <a class="ad-link" href="#">
          https://loremipsumdolor.lorem
        </a>
        <p class="ad-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
      </div>
      <span class="ad-note">Advertisement</span>
    </div>
    <div class="ad-wrap">
      <div class="ad-content">
        <a class="ad-title" href="#">
          Lorem ipsum dolor
        </a>

        <a class="ad-link" href="#">
            https://loremipsumdolor.lorem
        </a>
        <p class="ad-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
      </div>
      <span class="ad-note">Advertisement</span>
    </div>
    -->

  </aside><!-- /.sidebar -->
<?php endif; ?>

