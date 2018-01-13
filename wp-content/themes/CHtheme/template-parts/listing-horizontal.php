<div class="row">
  <?php


  // The Query
$args = array( 'cat' => 1, 'posts_per_page'=> 2 );
$the_query = new WP_Query( $args );


  if ( $the_query->have_posts() ) {
  	while ( $the_query->have_posts() ) {
  		$the_query->the_post();
  ?>
      <div class="col l6 m12 s12">
        <div class="card">
          <div class="card-image">
            <?php the_post_thumbnail('medium'); ?>
            <span class="card-title"><?php the_title(); ?></span>
          </div>
          <div class="card-content">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="link_more left">
              التفاصيل
              <i class="fa fa-angle-double-left" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
  <?php
  	} // end while
  } // end if
  ?>
</div>
