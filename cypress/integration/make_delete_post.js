describe('make_delete_post', ()=> {
    it('should create a post', ()=> {
        cy.visit('https://localhost/nocStudio/wp-admin');
        //If we need to login, we will
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
        //We type in a title
        cy.get('input#title').type('test');
        cy.get('#content-html').click();
        //And we type in some word
        cy.get('textarea#content').click().type('test');
        cy.wait(500);
        //Then we publish it
        cy.get('input#publish').click();
        cy.wait(500);
        //We should see that there is a message saying 'Post published.'
        cy.contains('Post published.');
        cy.get('#message').find('p').should('contain', 'Post published.');
        
        //Then we go to the "All Posts" area /wp-admin/edit.php and see that our post is there too
        cy.visit('https://localhost/nocStudio/wp-admin/edit.php');
        cy.get('table').find('strong').should('contain', 'test');
        //Now we click name of the Post we just made
        cy.get('#the-list').find('a').first().click();
        //We are back at the Edit Post page, and now we will delete it
        cy.get('#delete-action').find('a.submitdelete').click();
        //We will be sent back to the All Posts screen and we will assert that
        //a message saying "1 post moved to the Trash." will be present
        cy.get('#message').find('p').should('contain', '1 post moved to the Trash.');

    });
});