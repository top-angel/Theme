describe('make_post', ()=> {
    it('should create a post', ()=> {
        cy.visit('https://localhost/nocStudio/wp-admin');
        if(cy.contains('Username or Email Address')){
            cy.get('#user_login')
            .type('testrunner');
            cy.get('#user_pass')
            .type('testrunner');
            cy.get('#wp-submit').click();
        }
    });
});