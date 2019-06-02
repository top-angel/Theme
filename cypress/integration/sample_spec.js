describe('My First Test', function() {
    it('Does not do much!', function (){
        expect(true).to.equal(true);
    });
});

describe('My Second Test', ()=>{
    it('Will not fail', ()=>{
        expect(true).to.equal(false);
    });
});