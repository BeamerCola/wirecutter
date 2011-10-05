<div id="side">
  <div class="side-wrapper">
    <a href="/tech-as-magic/"><img src="<?php echo get_template_directory_uri(); ?>/img/tech_as_magic.png" alt="Tech As Magic" title="Tech As Magic" /></a>
    <ul class="blog">
      <?php
      $args = array(
        'offset' => 1,
        'showposts' => 4,
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'post__not_in' => array(93),    // skip WELCOME post
      );

      $wp_query_bottom = null;
      $wp_query_bottom = new WP_Query();
      $wp_query_bottom->query($args);
      while ($wp_query_bottom->have_posts()) : 
      $wp_query_bottom->the_post(); 
      ?>
      <li>
        <dl>
          <dt><a href="<?php echo the_permalink();?>"><?php echo substr($post->post_title, 0); ?></a></dt>
          <dd>
            <a href="#"><img src="http://placehold.it/200x100/38375F/B6A186" /></a>
            <?php echo get_the_excerpt(); ?>
          </dd>
        </dl>
      </li>
      <?php endwhile; ?>
    </ul>
    
    <h3>[<a href="/tech-as-magic/">MORE</a>]</h3><br>
  
    <?php do_action('wcfn_openx', '300b'); ?>
  </div>
  <div class="clear"></div>
</div><!-- #sidebar -->
