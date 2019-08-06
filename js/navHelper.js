jQuery(document).ready(()=>{
    jQuery('li.drift').on('click', (e)=>{
        e.preventDefault();
        localStorage.setItem('clickedSection', e.target.text);
        if(window.location.pathname !== '/nocStudio/') {
            window.location.pathname = '/nocStudio/';
        } 
        scrollHelper();
    });

    const smoothJazz = (target) => {
        if(target === '#aboutDiv') {
        jQuery('html, body').animate({
            scrollTop: jQuery(target).offset().top
          }, 1500, () => {
              setTimeout(()=>{
              jQuery(`${target} button`).click();
              localStorage.removeItem('clickedSection');

              },500)
          })
        } else {
            jQuery(`${target} button`).click();
            setTimeout(()=>{
                jQuery('html, body').animate({
                    scrollTop: jQuery(target).offset().top
                  }, 1500)
                  localStorage.removeItem('clickedSection');

            }, 500);
        }
    }

    const scrollHelper = () => {
        switch(localStorage.getItem('clickedSection')) {
            case "About" :
                smoothJazz('#aboutDiv');
            break;

            case "Contact":
                smoothJazz('#contact-parallax-container');
            break;
            default:
                console.log('meh')
            break;
        }
    }
    if(window.location.pathname === '/nocStudio/') {
        scrollHelper();
    }
});