<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
<script language="javascript">
 $(document).ready(function(){
	$('.btnJs').on('click', function(e){
		e.preventDefault();
		var data = $(this).attr('data');
		if(data != "todos"){
			$('.item').hide();
			$('.item[data-category="' + data + '"]').show(200);
		}else{
			$('.item').hide();
			$('.item').show();
		}
	});	
 });
</script>	
	<?php wp_head(); ?>
</head>

<body>
<?php if (!is_home()){ ?>	
	<header id="main-menu-content">
  <div class="container">
    <div class="logo"><img src="<?php echo get_template_directory_uri()?>/jpg/mini_logo_leoweb.png" alt="Leoweb"></div>	
	  
        <nav>
       			<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

        </nav>
	  
        <div class="social">
          <ul>
            <li class="instagram"></li>
            <li class="behance"></li>
            <li class="googleplus"></li>
            <li class="linkedin"></li>
			<li class="facebook"></li>  
          </ul>
        </div>
      
  </div>
</header>
<?php } else{ ?>
  <div class="social">
    <ul>
      <li class="facebook"></li>
      <li class="behance"></li>
      <li class="google_plus"></li>
      <li class="linkedin"></li>
      <li class="instagram"></li>
    </ul>
  </div>
<?php } ?>	
	
	
