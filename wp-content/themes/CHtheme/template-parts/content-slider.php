<!-- slider -->
<div class="slider">
  <ul class="slides">
    <?php
    // The Query
    $args = array( 'cat' => 1, 'posts_per_page'=> 2 );
    $the_query = new WP_Query( $args );


    if ( $the_query->have_posts() ) {
      while ( $the_query->have_posts() ) {
        $the_query->the_post();
    ?>

    <li>
      <?php the_post_thumbnail('full'); ?>
      <div class="caption right-align">
        <h3><span><?php the_title(); ?></span></h3>
        <h5 class="light grey-text text-lighten-3">
          <span>
            <?php echo get_the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="link_more left">
              التفاصيل
              <i class="fa fa-angle-double-left" aria-hidden="true"></i>
            </a>
          </span>
        </h5>
      </div>
    </li>
    <?php
      } // end while
    } // end if
    ?>
  </ul>
</div>
<!-- .slider -->
