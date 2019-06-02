describe('firstTry', ()=>{
    it('clicks the Blog button and we see a thing about September', ()=>{
        cy.visit('https://localhost/nocStudio');
        cy.contains('Blog').click()
        cy.url().should('include', '/blog');
        cy.contains('September');
    })
})