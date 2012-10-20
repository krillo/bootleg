<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php
global $page, $paged;
wp_title('|', true, 'right');
bloginfo('name');
// Add the blog description for the home/front page.
$site_description = get_bloginfo('description', 'display');
if ($site_description && ( is_home() || is_front_page() )) {
  echo " | $site_description";
}
?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link rel="stylesheet" href="<?php echo bloginfo(stylesheet_directory); ?>/assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"  />
    <link rel="stylesheet" href="<?php echo bloginfo(stylesheet_directory); ?>/assets/css/bootstrap-responsive.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <style>
      body { padding-top: 80px;}
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <?php wp_head(); ?>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-28239506-1']);
      _gaq.push(['_setDomainName', 'reptilo.se']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>

  <body <?php body_class(); ?>>
  <?php do_action('before'); ?>   
    <div class="navbar navbar-fixed-top navbar-inverse rep-navbar" >
      <div class="navbar-inner rep-navbar">
        <div class="container">
          <div class="span4" id="rep-logo-container">
            <a  id="rep-logo" href="<?php echo home_url(); ?>" name="reptilo_webbyra">
              Reptilo
            </a>
            <a id="rep-slogan" href="<?php echo home_url(); ?>" name="webbyra">
              Wordpressbyrå
            </a>
          </div>

          <div class="span8 rep-menu right" >
            <nav >
            <?php wp_nav_menu(array('container_class' => 'main-menu', 'theme_location' => 'primary')); ?>
           </nav>
         </div>
          
          

        </div>
      </div>
    </div>

    
    

<script type="text/javascript">
  var j$ = jQuery.noConflict();  
  j$(document).ready(function(){      
    j$('.carousel').carousel({
      interval: 10000
    })
  });        
</script> 

<?php 
$promo_class = "rep-promo-small";
if(is_home()){
  $promo_class = "rep-promo-big";
}
?>

<div  id="rep-promo" class="<?php echo $promo_class; ?>">
  <div class="container">

    <div class="row-fluid">
      <ul class="thumbnails">
        <li class="span6">
          <div class="thumbnail">
<a href="http://sv.wordpress.org/"><img alt="Wordpress" src="<?php echo bloginfo(stylesheet_directory); ?>/img/wordpress.png" title="Wordpress.org" style="float:right;margin:20px 20px 0 0;"></a>            
            <div class="caption">
              <h3><a href="<?php echo get_post_permalink( get_page_by_path('wordpress-konsult')->ID); ?>" name="wordpress-konsult">WORDPRESS-KONSULT.</a></h3>
              <ul>
                <li>
                  Vi erbjuder Wordpress-programmering åt Webbyråer
                </li>
                <li>
                  Vi är helhetsleverantör om ni behöver en ny sajt
                </li>
                <li>
                  Vi bygger WordPress-plugins
                </li>
                <li>
                  Vi hjälper till med er befintliga sajt
                </li>
                <li>
                  Vi håller i utbildningar
                </li>
              </ul>
              
            </div>
            
          </div>
        </li>
        <li class="span6">
          <div class="thumbnail">
            <div class="caption">
              <div class="span8">
                <h3><a href="<?php echo get_post_permalink( get_page_by_path('kontakt')->ID); ?>" name="kontakt"> KONTAKT.</a></h3>
                <ul >
                  <li>
                    Kristian Erendi
                  </li>
                  <li>
                    email: <a href="mailto:kristian@reptilo.se">kristian@reptilo.se</a>
                  </li>
                  <li>
                    twitter: <a href="http://twitter.com/#!/kaptenkrillo">@kaptenkrillo</a>
                  </li>
                  <li>
                    tel: <a href="tel:+46761393855">0761-393855</a>
                  </li>
                  <li>
                    <a href="http://se.linkedin.com/in/kristianerendi">
                      <img src="http://www.linkedin.com/img/webpromo/btn_liprofile_blue_80x15.png" width="80" height="15" border="0" alt="View Kristian Erendi's profile on LinkedIn">
                    </a>
                  </li>
                </ul>
              </div>

              <div id="myCarousel" class="carousel slide span4">
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="active item"><img src="<?php echo bloginfo(stylesheet_directory); ?>/img/kristian_erendi_1_150.png"   class="img-rounded right" /></div>
                  <div class="item"><img src="<?php echo bloginfo(stylesheet_directory); ?>/img/smogen_150.png"   class="img-rounded right" /></div>
                  <div class="item"><img src="<?php echo bloginfo(stylesheet_directory); ?>/img/kristian_erendi_2_150.png"   class="img-rounded right" /></div>
                  <div class="item"><img src="<?php echo bloginfo(stylesheet_directory); ?>/img/sniper_150.png"   class="img-rounded right" /></div>
                  <div class="item"><img src="<?php echo bloginfo(stylesheet_directory); ?>/img/kristian_erendi_3_150.png"   class="img-rounded right" /></div>
                </div>

              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <?php if(is_home()): ?>
    <div class="row-fluid">
      <ul class="thumbnails">
        <li class="span6">
          <div class="thumbnail">
            <div class="caption" id="samarbetspartners">
              <h3><a href="<?php echo get_post_permalink( get_page_by_path('samarbetspartners')->ID); ?>" name="samarbetspartners">SAMARBATSPARTNERS.</a></h3>
              <a href="http://24hr.se" target="_blank"><img src="<?php echo bloginfo(stylesheet_directory); ?>/img/24hr.png"   class="left" /></a>
              <a href="http://olsheden.se" target="_blank"><img src="<?php echo bloginfo(stylesheet_directory); ?>/img/olsheden_1.png"   class="" /></a>
              <a href="http://www.macneale.com/2011/" target="_blank"><img src="<?php echo bloginfo(stylesheet_directory); ?>/img/macneale.png"   class="" /></a>
              <a href="http://www.crealevant.co.uk/" target="_blank"><img src="<?php echo bloginfo(stylesheet_directory); ?>/img/crealevant.png"   class="" /></a>
            </div>
          </div>
        </li>
        <li class="span6">
          <div class="thumbnail">        
            <div class="caption">
              <?php
              $queryObject = new WP_Query('pagename=varfor-wordpress');
              if ($queryObject->have_posts()) {
                while ($queryObject->have_posts()) {
                  $queryObject->the_post(); ?>
                  <h3><a href="<?php the_permalink(); ?>" name="varfor-wordpress" style="text-transform: uppercase;"><?php the_title(); ?>.</a></h3>
                  <a href="<?php the_permalink(); ?>"><p><?php echo get_post_meta(get_the_ID(), "excerpt", true);  ?></p></a>          
              <?php  }
              }
              ?>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <?php endif; ?>
  </div>    
</div>    