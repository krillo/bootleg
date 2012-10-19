<?php
/**
 * The template for displaying Category projekt.
 */
get_header();
?>
<div class="container">
    <?php
      query_posts(array('category_name' => 'projekt', 'orderby' => 'date', 'order' => 'DESC', ));
      if (have_posts()) : while (have_posts()) : the_post();
    ?>
    <div class="row-fluid">
      <div class="span12 rep-category-list">  
        <?php the_content(); ?>
        <?php edit_post_link(); ?>
      </div>  
    </div>  
   <?php endwhile; else: ?>
  <div class="span12">  
     <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  </div>
   <?php endif; ?>  
</div>
<?php get_footer(); ?>