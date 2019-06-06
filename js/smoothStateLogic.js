var $container = jQuery('body');

function addBlacklistClass() {
    jQuery( 'a' ).each( function() {
        if ( this.href.indexOf('/wp-admin/') !== -1 || 
             this.href.indexOf('/wp-login.php') !== -1 ) {
            jQuery( this ).addClass( 'wp-link' );
        }
    });
}

( function (jQuery) {
    jQuery( function() { //Ready})

        addBlacklistClass();

        var settings = {
            anchors: 'a',
            blacklist: '.wp-link',
            onAfter: function($container){
                addBlacklistClass();
                var $hash = jQuery( window.location.hash );

                if ( $hash.length !== 0 ) {
 
                    var offsetTop = $hash.offset().top;
 
                    jQuery( 'body, html' ).animate( {
                            scrollTop: ( offsetTop - 60 ),
                        }, {
                            duration: 280
                    } );
                }
                $container.removeClass('slide-out');
            },
            onStart: {
                duration: 280, //ms
                render: function($container) {
                    $container.addClass('slide-out');
                }
            },
        };
    
        jQuery('#page').smoothState( settings );
    })
})( jQuery );