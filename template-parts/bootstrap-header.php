<nav id="nocNavBar" class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href=<?php echo(get_site_url()) ?>>NOC Studio</a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

	<?php 
		$args = array(
			'menu'=>'2',
			'menu_class' => 'navbar-nav mr-auto',
			'menu_id'=>'nocStudioNavbarUL',
			'container_class' => 'collapse navbar-collapse',
			'container_id' => 'navbarSupportedContent',
		);
		wp_nav_menu($args);
	?>
	<script>
		jQuery('#nocStudioNavbar li > a').addClass('nav-link');
		jQuery('#navbarSupportedContent').append(`
		<form class="form-inline my-2 my-lg-0" 
			  role="search" method="get" 
			  action="<?php get_site_url(); ?>"
		>
		<div class="input-group">
				<input 
					class="form-control mr-sm-2 search-field" 
					type="search" 
					placeholder="Search" 
					aria-label="Search"
					value
					name="s"
				>
				<div class="input-group-btn">
					<button class="btn btn-default" type="submit">
						<i class="fas fa-search"></i>
					</button>
				</div>
	  	</div><!--input-group-->
		</form>`);
	</script>
	



</nav>




