<!doctype html>
<?php get_header(); ?>
<article id="portfolio">
  <div class="container">
    <div id="img_port"><img src="<?php echo get_template_directory_uri()?>/jpg/cooklovers.jpg" alt="site descrição"/> </div>
    <div id="content-port">
      <h1><span class="category-port">Website</span><br>
        <?php the_title()?></h1>
      <span id="descri-port">
     <?php the_content() ?>
      </span> <a href="#" target="_blank" id="call-site">nomedosite.com.br</a>
      <hr>
      <span id="credit-port">
		  <h2>Créditos</h2>
		  	<ul>
				<li><b>Design:</b> Alessandro F. Reche</li>
				<li><b>Desenvolvimento  Front-end:</b> Vanessa Mayumi </li>
				<li><b>Desenvolvimento Back-End:</b> Leonardo Andrade </li>
			</ul>
		 </span> 
		  
	<span class="tools">  
      <h2>Ferramentas</h2>
      </span> 
	</div>
  </div>
</article>
<span class="title-other">Confira outros projetos</span>
<div id="other-itens">
  <figure></figure>
  <figure></figure>
  <figure></figure>
  <figure></figure>
</div>
</body>
</html>