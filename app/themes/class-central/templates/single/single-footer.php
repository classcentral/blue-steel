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
          <span class="disabled">Viewing the Latest Article</span>
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
        <?php the_date(); ?>
      </td>
    </tr>
  </table>
</section>
<?php comments_template(); ?>
