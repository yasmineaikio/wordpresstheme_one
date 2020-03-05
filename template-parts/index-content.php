<div class="front-page">
<div class="first-content">
  <?php
    if ( have_posts() ) {
    	while ( have_posts() ) {
    		the_post();
      		?>
          <h1><?php the_title();?></h1>
          <?php the_content();
    	} // end while
    } // end if
  ?>
</div>

<div class="second-content">
  <div class="first-column">
    <?php if( get_field('text_to_left') ): ?>
      <?php the_field('text_to_left'); ?>
    <?php endif; ?>
  </div>
  <div class="second-column">
    <?php
      $postslist = get_posts( array(
      'posts_per_page' => 3,
      'order'          => 'ASC'
      ) );

      if ( $postslist ) {
          foreach ( $postslist as $post ) :
              setup_postdata( $post );
              ?>
              <div class="news">
                <a href=" <?php the_permalink(); ?> ">
                  <h3><?php the_title(); ?></h3>
                  <p><?php the_date(); ?></p>
                  <?php the_excerpt(); ?>
                </a>
              </div>
          <?php
          endforeach;
          wp_reset_postdata();
      }
    ?>
  </div>
</div>

<div class="third-content">
  <div class="first-column">
    <?php
      $image = get_field('image');
      if( !empty($image) ): ?>
	     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
     <?php endif; ?>
  </div>
  <div class="second-column">
    text
  </div>
</div>
</div>
