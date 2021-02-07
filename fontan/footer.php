
<?php 
	$template_root = get_template_directory_uri(); 
	$fontan_img = $template_root."/img"
?>


<div class="footer content-img main-content" style="background: url('<?=$fontan_img?>/footer_bg.png')  top no-repeat;">
    <div class="footer_content">
      <div class="row">
        <div class="com-md-2"></div>
        <div class="com-md-8 text-center">© ООО «Водний Світ», 2017 – 2020 г. Всі права захищені.</div>
        <div class="com-md-2"></div>
	</div>  
  </div>
  <?php wp_footer(); ?>
</div>  


</body>
</html>
