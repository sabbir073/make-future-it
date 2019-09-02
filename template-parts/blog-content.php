<?php
/**
 * Template part for displaying blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package make_future_it
 */

?>




<?php
          $mypostquery = new WP_Query( array(
           'post_type' => 'post',
           'post_status' => 'publish',
           'posts_per_page' => 3,
           'orderby'        => 'date',
           'order'          => 'DESC'
           ));
            ?>
            <?php
          if($mypostquery->have_posts()) : ?>
          <?php while($mypostquery->have_posts()) : $mypostquery->the_post(); ?>
          <div class="col-lg-4">
          <div class="blog-box margin-t-30">
    <?php 
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); 
        if ($image) : ?>
        <img src="<?php echo $image[0];?>" class="img-fluid rounded" alt="<?php the_title();?>">
         <?php endif; ?>
        
        <div>
            <?php $category = get_the_category($post->ID);?>
            <h5 class="mt-4 text-muted"><?php echo $category[0]->cat_name;?></h5>
            <h4 class="mt-3"><a href="<?php the_permalink();?>" class="blog-title"> <?php the_title();?> </a></h4>
            <p class="text-muted"><?php the_excerpt();?></p>
            <div class="mt-3">
                <a href="<?php the_permalink();?>" class="read-btn">Read More <i class="mdi mdi-arrow-right"></i></a>
            </div>
        </div>
    </div>
    </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    

