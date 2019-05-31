<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">NOC Studio</a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

	<?php 
		$args = array(
			'menu'=>'2',
			'menu_class' => 'navbar-nav mr-auto',
			'menu_id'=>'nocStudioNavbar',
			'container_class' => 'collapse navbar-collapse',
			'container_id' => 'navbarSupportedContent'
		);
		wp_nav_menu($args);
	?>



</nav>



<script>
		jQuery('#nocStudioNavbar li > a').addClass('nav-link');
</script>
