<?php get_header(); ?>




<section class="container">
  <h2> ETT URVAL AV PROJEKT. </h2>
  <div class="row-fluid">
    <ul class="thumbnails">
      <?php
      query_posts(array('category_name' => 'projekt', 'orderby' => 'date', 'order' => 'ASC',));
      if (have_posts()) : while (have_posts()) : the_post();
          ?>
          <li class="span4">            
            <a class="thumbnail" href="#"><?php the_title(); ?><?php the_post_thumbnail(); ?></a> 
          </li>        
        <?php endwhile;
      endif; ?>  
    </ul>
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