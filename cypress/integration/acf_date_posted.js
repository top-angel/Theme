//This file is to test that our use of the ACF Plugin
//to establish a date picker that gets used with a filter
//made in nocstudiox/functions.php allows the user to
//publish a post that has a date of whatever the user picks,
//and if they pick nothing, then the date of publishing will
//be the present date.

describe('acf_date_posted', ()=>{
    it('should present the ACF Field for picking your post date', ()=>{
        cy.visit('https://localhost/nocStudio/wp-admin');
        if(cy.contains('Username or Email Address')){
            cy.get('#user_login').click()
            .type('testrunner', {delay:100 });
            cy.get('#user_pass')
            .type('testrunner');
            cy.get('#wp-submit').click();
        }
        //Once we log in (if we had to) we should be at the Dashboard
        cy.contains('Dashboard');
        cy.get('li#menu-posts').click();
        //Then we'll click Posts
        cy.contains("Posts");
        cy.get('a.page-title-action').click();
        //We should see that are at the place where we can add a new Post
        cy.contains('Add New Post');
        //We see that our ACF Group is present
        cy.get('#acf-group_5cf2e7687784b').find('h2').find('span').should('contain', 'Blog Post Group');
        cy.get('.acf-label').find('label').should('contain', 'Date Posted');
    });

    it('should allow you to select a month', ()=>{
        //We click the input that gives us access to the date-picker
        cy.get('input.hasDatepicker').click();
        //We assert that there are atleast 3 rows representing weeks in the month
        cy.get('#ui-datepicker-div').find('tbody').children().should('have.length.of.at.least', 3);
        //Click the Month Select and pick the month
        cy.get('select.ui-datepicker-month').select('Jan');
        cy.get('#ui-datepicker-div').should('contain', 'Jan');
    });

    it('should allow you to select a year', ()=>{
        
    })
})