<?php get_header(); ?>
<section class="container">
  <h2> ETT URVAL AV PROJEKT. </h2>
  <div class="row-fluid">
      <?php
      $i = 0;
      query_posts(array('category_name' => 'splash', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 6));
      if (have_posts()) : while (have_posts()) : the_post();?>
          <?php if($i % 3 == 0): ?>
            <ul class="thumbnails">
          <?php endif; ?>
          <li class="span4">            
            <a class="thumbnail" href="/kategori/projekt/"><?php the_title(); ?><?php the_post_thumbnail(); ?></a> 
          </li>
          <?php if($i % 3 == 2): ?>
            </ul>
          <?php endif; ?>          
        <?php $i++; endwhile;
      endif; ?>  
  </div>

  <div class="row-fluid">
    <ul class="thumbnails">
      <li class="span9"></li>
      <li class="span3">
        <a href="/kategori/projekt/" ><button class="btn btn-large btn-primary right">SE FLER PROJEKT <i class="icon-arrow-right icon-white"></i> </button></a>
      </li>
    </ul>
  </div>
</section>
<?php get_footer(); ?>    