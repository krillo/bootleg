<?php
/*
  Template Name: Kontakt-sida
 */
get_header();
?>
<div class="container">
    <?php      
      if (have_posts()) : while (have_posts()) : the_post();
    ?>
    <div class="row-fluid">
      <div class="span12 rep-post rep-contact">  
        <h1>Kontakt</h1>
        <address class="span6 left">
          <ul>
            <li>
             Kristian Erendi 
            </li>
            <li>email: <a href="mailto:kristian@reptilo.se">kristian@reptilo.se</a></li>
            <li>tel: <a href="tel:+46761393855">0761-393855 </a></li>
            <li>twitter: <a href="http://twitter.com/#!/kaptenkrillo">@kaptenkrillo</a></li>
            <li>jabber: krillo@gmail.com </li>
            <li>skype: <a href="callto:kristian.erendi"> kristian.erendi</li>
            <li>Läs Kristians referenser och CV på: <a href="http://se.linkedin.com/in/kristianerendi"><img src="http://www.linkedin.com/img/webpromo/btn_liprofile_blue_80x15.png" alt="View Kristian Erendi's profile on LinkedIn" width="80" height="15" border="0" /></a></li>
          </ul>
        </address>
        <address class="span5 left">
        <ul>
          <li>Reptilo AB</li>
          <li>Finjagatan 6</li>
          <li>25251 Helsingborg</li>
          <li>orgnr: 556871-1443</li>
          <li>bankgiro: 809-5762</li>
        </ul>
      </address>  
    </div>  
   <?php endwhile; else: ?>
  <div class="span12">  
     <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  </div>
   <?php endif; ?>  
</div>
</div>  
<?php get_footer(); ?>