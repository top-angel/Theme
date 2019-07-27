
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
		if(jQuery('#nocStudioSearchForm').length == 0){
		jQuery('#navbarSupportedContent').append(`
		<form id="nocStudioSearchForm" class="form-inline my-2 my-lg-0" 
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
		</form>`)
		};
	</script>
	<script>
(function($) {
 
 /*
 *  render_map
 *
 *  This function will render a Google Map onto the selected jQuery element
 *
 *  @type	function
 *  @date	8/11/2013
 *  @since	4.3.0
 *
 *  @param	$el (jQuery element)
 *  @return	n/a
 */
  
 function render_map( $el ) {
  
     // var
     var $markers = $el.find('.marker');
  
     // vars
     var args = {
         zoom		: 16,
         center		: new google.maps.LatLng(0, 0),
         mapTypeId	: google.maps.MapTypeId.ROADMAP
     };
  
     // create map	        	
     var map = new google.maps.Map( $el[0], args);
  
     // add a markers reference
     map.markers = [];
  
     // add markers
     $markers.each(function(){
  
         add_marker( $(this), map );
  
     });
  
     // center map
     center_map( map );
  
 }
  
 /*
 *  add_marker
 *
 *  This function will add a marker to the selected Google Map
 *
 *  @type	function
 *  @date	8/11/2013
 *  @since	4.3.0
 *
 *  @param	$marker (jQuery element)
 *  @param	map (Google Map object)
 *  @return	n/a
 */
  
 function add_marker( $marker, map ) {
  
     // var
     var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
  
     // create marker
     var marker = new google.maps.Marker({
         position	: latlng,
         map			: map
     });
  
     // add to array
     map.markers.push( marker );
  
     // if marker contains HTML, add it to an infoWindow
     if( $marker.html() )
     {
         // create info window
         var infowindow = new google.maps.InfoWindow({
             content		: $marker.html()
         });
  
         // show info window when marker is clicked
         google.maps.event.addListener(marker, 'click', function() {
  
             infowindow.open( map, marker );
  
         });
     }
  
 }
  
 /*
 *  center_map
 *
 *  This function will center the map, showing all markers attached to this map
 *
 *  @type	function
 *  @date	8/11/2013
 *  @since	4.3.0
 *
 *  @param	map (Google Map object)
 *  @return	n/a
 */
  
 function center_map( map ) {
  
     // vars
     var bounds = new google.maps.LatLngBounds();
  
     // loop through all markers and create bounds
     $.each( map.markers, function( i, marker ){
  
         var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
  
         bounds.extend( latlng );
  
     });
  
     // only 1 marker?
     if( map.markers.length == 1 )
     {
         // set center of map
         map.setCenter( bounds.getCenter() );
         map.setZoom( 16 );
     }
     else
     {
         // fit to bounds
         map.fitBounds( bounds );
     }
  
 }
  
 /*
 *  document ready
 *
 *  This function will render each map when the document is ready (page has loaded)
 *
 *  @type	function
 *  @date	8/11/2013
 *  @since	5.0.0
 *
 *  @param	n/a
 *  @return	n/a
 */
  
 $(document).ready(function(){
     console.log('gaba');
     $('.acf-map').each(function(){
  
         // render_map( $(this) );
         // create map
 map = render_map( $(this) );
             // popup is shown and map is not visible
             google.maps.event.trigger(map, 'resize');
  
     });
  
 });
  
 })(jQuery);
</script>
	



</nav>




