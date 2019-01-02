<?php get_header(); ?>
<!--portfolio-->
<div id="slide">
	<?php echo do_shortcode('[rev_slider alias="home"]');?>
</div>
<!--header-->
<header id="top_menu">
	<div class="container">
		<nav id="main_menu">
			<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>


		</nav>
	</div>
</header>
<section class="portfolio">
	<div class="container">
		<h2>Meus Projetos</h2>
		<div class="description">Confira alguns do projetos que realizei durante minha carreirta <br>
como Designer, Veja alguns dos projetos abaixo:</div>

		<ul id="menu_port">
			<li><a href="#" class="btnJs" data="todos">Todos</a></li>
<?php
	$menu_jobs = get_terms(array(  
	'taxonomy' =>'tipo_de_jobs',  
	'hide_empty' => false, 
) ); 

if ( ! empty( $menu_jobs  ) && ! is_wp_error( $menu_jobs  ) ){  
foreach ( $menu_jobs  as $menu_jobs ) { 
	echo "<li><a href='#' class='btnJs' data=".$menu_jobs ->slug.">". $menu_jobs ->name."</a></li>";
 } } ?>
		</ul>
	</div>

	<div class="gallery">
		<?php 
$args = array(
    'post_type'=> 'portfolio',
    'order'    => 'ASC'
    );              

$the_query = new WP_Query( $args );	
if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
	
	$terms = get_the_terms($post->ID, 'tipo_de_jobs');
	$term = "";
	foreach($terms as $t){
		$term .= $t->slug."";
	};
	?>
		<figure class="item_port item" data-category="<?php echo $term ?>">
			<a href="<?php echo get_permalink( ); ?>" class="">
			<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
			<figcaption>
				<?php echo the_title(); ?>
			</figcaption>
			</a>
		
		</figure>
		<?php endwhile; else: ?>
		<p>No momento não há nehum item no portfolio</p>
		<?php endif; wp_reset_postdata(); ?>
	</div>
</section>



<!--Sobre mim-->
<section class="aboutme">
	<div class="container">
		<div id="photo_profile"> 
		<img src="">	
		<br>
		Na area desde 2005 <br> Superior Deisng Gráfico<br> Tecnico em processamento de dados </div>
		<div id="about_profile">
			<?php
			$args = array( 'page_id' => '2' );
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo "<h2>" . get_the_title() . "</h2>";
					echo get_the_content();
				};

				wp_reset_postdata();
			} else {}
			?>
		</div>
	</div>
</section>

<!--Artigos-->
<section class="articles">
	<h2>Artigos</h2>
	<div class="container">
		<?php 
$args = array(
    'post_type'=> 'post',
    'order'    => 'ASC'
    );              

$the_query = new WP_Query( $args );	
if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 

	?>
		
		<article class="item_article">
			<img src="<?php echo get_the_post_thumbnail_url() ?>">
			<div class="content_marg">
				<h2>
					<?php the_title();?>
				</h2>
				<p>
					<?php the_excerpt(); ?> </p>
				<span class="calltoaction"><a href="<?php echo get_permalink( ); ?>">Leia Mais</a></span>
			</div>
		</article>
		<?php endwhile; else: ?>
		<p>No momento não há nehum item no portfolio</p>
		<?php endif; wp_reset_postdata(); ?>
	</div>

	<span class="calltoaction out">Veja mais artigos</span>
</section>


<!--contato-->
<section class="contact">
	<h2>Contato</h2>
	<div class="container">
		<div class="data_contact">
			
<p>Entre em contato e peça uma ajuda
para seu projeto. Escreva a sua mensagem pelo formulário ao lado
ou utilize os meios a segui:</p>

			<ul>
				<li>Telefone: 11 99795.6258</li>
				<li>Email: leonardo@leoweb.com.br</li>
				<li>Skype: leoweb</li>
			</ul>

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
		<div class="form_contact">
			<?php echo do_shortcode('[contact-form-7 id="51" title="Formulário de contato 1"]');?>
		</div>
	</div>
</section>

<?php get_footer();?>