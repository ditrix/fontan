<?php get_header(); ?>

<?php $template_root = get_template_directory_uri(); 
?>


<!--	<h1>is home</h1> -->
<div class="container text-center">
<?php if(is_front_page()): ?>
    <div class="header_section clearfix content-img">
<?php else: ?>
    <div class="header_section pages_header clearfix content-img" >
<?php endif;?>      

        <div class="container header_flow">
            <div class="col-sm-1 clearfix"></div>
            <div class="col-sm-4 navigation">
              <ul>
                <li><a href="/#fountains">фонтани</a></li>
                <li><a href="/#pools_id">басейни</a></li>
                <li><a href="/#waterpools">водоймища</a></li>
                <li><a href="/#saunas">сауни і бані</a></li>
              </ul>
            </div>
          <!-- eof navigation-->
          <div class="col-sm-2 text-center">
              <a class="logo_section" href="/"><img src="<?=$template_root?>/img/LogoHW.png" alt="logo"></a>
          </div>
            <!-- eof logo -->

          <div class="col-sm-4 header-contacts" style="float: left;">
                      <div class="contacts_flow text-right">
             <a class="facebook_ref" href="https://www.facebook.com/%D0%93%D0%B0%D1%80%D0%BC%D0%BE%D0%BD%D1%96%D1%8F-%D0%92%D0%BE%D0%B4%D0%B8-360736707663822/" target="_blank"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;НОВИНИ</h4></a>
             <br /><br /><br />
             <a href="#contacts" class="contacts_top"><h4>КОНТАКТИ</h4></a>

             <div class="clearfix phone_container">
                <a href="tel:0443377703">
                  <h4 style="color: #0066cc;">(044) 33 777 03</h4>
                </a>
            </div>

            <div class="callme clearfix text-right">
             <a href="#contacts">ЗАМОВИТИ ДЗВІНОК</a>
              </div>
            </div>  
  
          </div>  <!-- eof comtscts -->
          <div class="col-sm-1 clearfix" ></div>
       </div>    
    </div>
    <!-- eof header_section -->  
<?php if(is_front_page()): ?>



<?php
  
  include(TEMPLATEPATH.'/home_page.php');

?>






<?php else:?>	


<div id="content  text-center" >
<div class="gallery_page">
<h2><?php the_title(); ?></h2>
<div class="gallery_body">    
<?php if (have_posts()) :?>
<?php while (have_posts()) : the_post();?>
	<h2>
<?php  the_content(); ?>
	</h2>

    <?php endwhile;?>
	<?php else : ?>
	<?php endif; ?>
</div>

</div>
</div>


<div class="vspace-10">&nbsp;</div>
<div class="vspace-10">&nbsp;</div>
<div class="vspace-10">&nbsp;</div>
<?php endif; ?>

<?php include(TEMPLATEPATH.'/contacts.php'); ?>

<?php get_footer(); ?>