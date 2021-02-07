<?php get_header(); ?>

<?php 
//  $template_root = get_template_directory_uri();

  $template_root =  home_url()."/wp-content/themes/fontan";

  $fontan_img = $template_root."/img"
?>

<!--	<h1>is home</h1> -->
<div class="container text-center main-content">
<?php if(is_front_page()): ?>
    <div class="header_section clearfix content-img">
<?php else: ?>
    <div class="header_section pages_header clearfix content-img" >
<?php endif;?>      

        <div class="container header_flow">
            <div class="col-sm-1 clearfix"></div>
            <div class="col-sm-4 navigation">
              <ul>
                <li><a href="/#fountains">Фонтани</a></li>
                <li><a href="/#pools_id">Бассейни</a></li>
                <li><a href="/#waterpools">Водойми</a></li>
                <li><a href="/#saunas">Сауни та Бані</a></li>
              </ul>
            </div>
          <!-- eof navigation-->
          <div class="col-sm-2 text-center">
              <a class="logo_section" href="/"><img src="<?=$fontan_img?>/LogoHW.png" alt="logo"></a>
          </div>
            <!-- eof logo -->

          <div class="col-sm-4 header-contacts">
            <div class="contacts_flow text-right">
              <a href="#contacts" class="contacts_top">КОНТАКТИ</a>
            </div>  
             
            <div class="clearfix phone_container">
                <a href="tel:0443377703">
                  <h4 style="color: #0066cc;">(044) 33 777 03</h4>
                </a>
            </div>

            <div class="callme clearfix text-right">
                <a href="#contacts">ЗАМОВИТИ ДЗВІНОК</a>
            </div>
              
  
          </div>  <!-- eof comtscts -->
          
          <div class="col-sm-1 clearfix" ></div>
       </div>    
    </div>
    <!-- eof header_section -->  
<?php if(is_front_page()): ?>


<!-- section-1 + slogan -->
<div class="content-img home-section_1">
    
    <img src="<?=$template_root?>/img/header_wave_bg.png" alt="fontann-header">
    <div class="header-bg" style="overflow: hidden;">
<!-- 
      <div class="wp-video-shortcode"  style="margin-top: -50px; margin-bottom: -60px;"> 
        <img src="/img/section_1.png" />
      </div>
 -->
    
 
    <video class="wp-video-shortcode" preload autoplay loop poster="/img/section_1.png" style="margin-top: -50px; margin-bottom: -60px;" >
      <source type="video/mp4" src="<?=$template_root?>/media/headervideo.mp4" />
    </video> 

    </div>
  


     <div class="section_content_1 row">
        <div class="slogan">
          <h1>ЧИСТА ВОДА </h1>
          <h1>ВІД КРАНА ДО ФОНТАНА.</h1>
        </div>
    </div>

</div>
<!-- eof home-section_1 -->

<div class="content-img home-section-service" style="height: 1300px">
   <img src="<?=$fontan_img?>/section_service.png" alt="perevagy"> 
    <div class="section_service_content" style="margin-top: -1050px;  z-index: 4;">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center service">
                <h2>повний цикл послуг</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2"></div>  
              <div class="col-md-8 text-center"> 
                <div class="debug section-service-logo">
                  <img src="<?=$fontan_img?>/service_section_logo.png" alt="service"> 
                </div>
              </div>
              <div class="col-md-2"></div>  
            </div>
            <div class="row">
              <div class="col-12 text-center">

                  <p>Ми є компанія «повного циклу» - від ідеї до обслуговування.</p>
                  <p>Працюємо на ринку  бассейнів з 2009 року.</p> 
                  <p>За цей час побудовано десятки бассейнів, змонтовано сотні фільтрів для води.</p>
                  <p>З 2019 року споруджуємо фонтани".</p>

              </div>
            </div>

          </div>
    </div><!-- eof section_content_2-->  

</div>  




<div class="content-img home-section_2">  
    <img src="<?=$fontan_img?>/section_2.png" alt="perevagy"> 
    <div class="section_content_2">
          <div class="container">
            <div class="row">
              <div class="col-md-2"></div>  
              <div class="profits col-md-8 text-left"> 
              <h2>Наші переваги</h2>
                <ol>
                  <li>Досвід.</li>
                  <li>Відкритість.</li> 
                  <li>Порядність.</li> 
                  <li>Якість європейського <br> обладнання.</li>
                  <li>Гарантія до 10 років.</li>                              
                </ol>
  
              </div>
            <div class="col-md-2"></div>  
          </div>
    </div><!-- eof section_content_2-->  
</div><!-- eof home-section_2 -->

<div class="content-img home-section_3">  
    <img src="<?=$fontan_img?>/section_3.png" alt="bufuyemo fontany" /> 
    
      <div class="section_content_3" id="fountain_id">
        <a name="fountains"></a>
         <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Будуємо фонтани </h2>
               <h2> міські та приватні</h2>
            </div>
          </div>
        </div>  

       <div class="container">
              
              <table class="present_img" width="70%" style="margin-top: 150px;">
                <tr>
                  <td><img src="<?=$fontan_img?>/fountain_1.png" width="100%" alt="fontan-1" /></td>
                  <td><img src="<?=$fontan_img?>/fountain_2.png" width="100%" alt="fontan-2" /></td>
                  <td><img src="<?=$fontan_img?>/fountain_3.png" width="100%" alt="fontan-3" /></td>
                </tr>
              </table>
        </div> 
        

        <div class="text-center">
           <a class="blue_btn" href="/?page_id=16">подивіться приклади фонтанів</a> 
        </div>
      
      </div>
      
</div><!-- eof section3 -->

<!-- section fonta -->
<div class="section-fonta clearfix" style="background: no-repeat url('<?=$fontan_img?>/section_fonta_bg.png');" >

  <div class="container" style="margin-top: 235px;">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>ми є офіційними представниками</h2>
        <h2>компанії FONTA (Литва) в Україні</h2>
      </div>
    </div>

    <div class="fonta-content" style="margin-top: 100px; background:  no-repeat url('<?=$fontan_img?>/fonta_equipment.png') center bottom; height: 700px; z-index: 5;  position: relative; ">
      
      <div class="row">
        <div class="col-sm-12 text-center fonta-logo">
          <img src="<?=$fontan_img?>/fonta_logo.png" alt="fonta logo" /> 
        </div>

      </div>  

      <div class="row">
        <div class="col-sm-12"  style="padding-top: 230px;">
            <a class="blue_btn" href="<?=$template_root?>/upload/diller_price_2020.pdf" target="_blank">завантажити прайс ліст</a>
        </div>
      </div>
    </div>


    <div class="row  ">
      <div class="col-sm-2"></div>
      <div class="col-sm-2 text-center">
        <img src="<?=$fontan_img?>/fonta_star.png" alt="вперше в Україні">                 
      </div>          
      <div class="col-sm-6  fonta-text-promo text-left">      
        
          Зверніть увагу на унікальні <span>інтерактивні фонтанні насадки 
          JET CUTTER</span> з безліччю водних ефектів: короткі стрибаючі струмення,
          вертикальні потоки, струмення що зіштовхуються і так далі.
        
      </div>      
       <div class="col-sm-2"></div>
    </div>

    
  </div>  
    <div class="row">
      <div class="col-sm-12 text-center youtube-section">
  
 <iframe width="979" height="538" src="https://www.youtube.com/embed/sj_X1TmQ_jM" frameborder="0">
      </iframe>
      </div>
    </div>
  </div>
<!-- EOF section fonta -->



<div class="content-img home-section_4">  
    <img src="<?=$fontan_img?>/section_4.png" alt="басейни"> 
    <div class="section_content_4"  id="pools_id">
        <a name="pools"></a>

         <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Будуємо басейни</h2>

            </div>
          </div>
        </div>  

      <div class="container">
          
              <table class="section4_present_img" width="70%">
                <tr>
                  <td><img src="<?=$fontan_img?>/bassein_1.png" width="100%" alt="басейн 1" /></td>
                  <td><img src="<?=$fontan_img?>/bassein_2.png" width="100%" alt="басейн 2" /></td>
                  <td><img src="<?=$fontan_img?>/bassein_3.png" width="100%" alt="басейн 3" /></td>
                </tr>
              </table>
        </div>         
        <div class="text-center">
           <a class="blue_btn" href="/?page_id=17">подивіться приклади басейнів</a> 
        </div>

    </div>  


</div>




<div class="content-img home-section_5">  
      <img src="<?=$fontan_img?>/section_5.png" alt="водойоми гармонія" /> 
    
      <div class="section_content_5" id="waterpools_id">
          <a name="waterpools"></a>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Будуємо плавальні Водойми.</h2><h2>Відчуйте Вашу гармонію з Природою.</h2>
            </div>
          </div>
        </div>  
        <div class="container">
          <table class="present_img" width="70%">
            <tr>
              <td><img src="<?=$fontan_img?>/reservoirs_1.png" width="100%" alt="гармонія-1" /></td>
              <td><img src="<?=$fontan_img?>/reservoirs_2.png" width="100%" alt="гармонія-2" /></td>
              <td><img src="<?=$fontan_img?>/reservoirs_3.png" width="100%" alt="гармонія-3" /></td>
              </tr>
          </table>
        </div> 
        <div class="text-center">
          <a class="blue_btn" href="/?page_id=18" style="z-index: 10;">подивіться приклади водоймів</a> 
        </div>
      </div><!--section_content_5 -->
</div>



<div class="content-img home-section_6">  
    <img src="<?=$fontan_img?>/section_6.png" alt="сауни та бані" /> 
    
      <div class="section_content_6" id="saunas_id">
          <a name="saunas"></a>
         <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Будуємо Сауни та Бані</h2>
     
            </div>
          </div>
        </div>  
 
      <div class="container">
        <br> <br>        
        <table class="present_img" width="70%">
          <tr>
            <td><img src="<?=$fontan_img?>/sauna_1.png" width="100%" alt="сауни 1" /></td>
            <td><img src="<?=$fontan_img?>/sauna_2.png" width="100%" alt="сауни 2" /></td>
            <td><img src="<?=$fontan_img?>/sauna_3.png" width="100%" alt="сауни 3" /></td>
          </tr>
        </table>
      </div> 
        
      <div class="text-center">
        <a class="blue_btn" href="/?page_id=19">подивіться приклади саун</a> 
      </div>

      </div>
      
</div>
    



</div>




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