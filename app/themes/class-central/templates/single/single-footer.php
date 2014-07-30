<nav class="post-nav">
  <table class="pager">
    <tr>
      <td class="previous">
        <?php if ($prev = get_adjacent_post(false, '', true)): ?>
          <?php $prev_url = get_permalink($prev->ID); ?>
          <a href="<?php echo $prev_url ?>"><?php echo get_the_title($prev->ID); ?></a>
        <?php else: ?>
          <span class="disabled">Previous Article</span>
        <?php endif; ?>
      </td>
      <td class="next">
        <?php if ($next = get_adjacent_post(false, '', false)): ?>
          <?php $next_url = get_permalink($next->ID); ?>
          <a href="<?php echo $next_url ?>"><?php echo get_the_title($next->ID); ?></a>
        <?php else: ?>
          <span class="disabled">Next Article</span>
        <?php endif; ?>
      </td>
    </tr>
  </table>
</nav>
<section class="post-meta">
  <table>
    <tr>
      <td class="post-categories">
        <span>Category</span> <?php echo get_the_category_list('', ',&nbsp;'); ?>
      </td>
      <td class="post-tags">
        <span>Tags</span> <?php echo get_the_tag_list('', ',&nbsp;'); ?>
      </td>
      <td class="social">
        <div class="facebook">
          <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=511266875576923&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
          <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        </div>
        <div class="twitter">
          <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
      </td>
    </tr>
  </table>
</section>
<?php comments_template(); ?>
