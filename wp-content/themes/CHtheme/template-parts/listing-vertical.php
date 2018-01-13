


<?php


// The Query
$args = array( 'cat' => 1, 'posts_per_page'=> 3 );
$the_query = new WP_Query( $args );


if ( $the_query->have_posts() ) {
  while ( $the_query->have_posts() ) {
    $the_query->the_post();
?>
  <div class="row">
    <div class="col s12">
      <div class="card horizontal">
        <div class="card-image">
          <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <h2 class="header"><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="link_more left">
              التفاصيل
              <i class="fa fa-angle-double-left" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  } // end while
} // end if
?>
