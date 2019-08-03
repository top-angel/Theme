// (function($) {
    jQuery(document).ready(()=>{
    console.log('tokyo drift, bitch');
    jQuery('#menu-item-298').on('click', (e)=>{
        console.log('you clicked on about');
        e.preventDefault();
    });

    jQuery('#menu-item-299').on('click', (e)=>{
        console.log('Contact, bitch');
        e.preventDefault();
    });

    });
// })(jQuery);
