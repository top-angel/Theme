describe('the plugin that gives the custom post type for \'Events\'', ()=>{
    it('should allow us to see the "Events" tab in the admin panel', ()=>{
        cy.visit('https://localhost/nocStudio/wp-admin');
        if(cy.contains('Username or Email Address')){
            cy.get('#user_login').click()
            .type('testrunner', {delay:100 });
            cy.get('#user_pass')
            .type('testrunner');
            cy.get('#wp-submit').click();
        }
        cy.get('ul#adminmenu').find('li#menu-posts-event').find('div.wp-menu-name').should('contain', 'Events');
        cy.get('ul#adminmenu').find('li#menu-posts-event').find('div.wp-menu-image.dashicons-calendar-alt').should('have.length.of', '1');

    })
})
