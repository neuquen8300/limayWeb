
const contact = $('#contact').offset();
const nosotrosContainer = $('.nosotros-container').offset();
const serviciosContainer = $('.servicios-container').offset();
$('#not-btn, #success-btn').click(function(){
    
    $('.contact-success').toggleClass('success-none');
    $('.success-col').toggleClass('success-none');
});



$('#title-btn, #cotizacion-btn').click(function(){
    document.getElementById('contact').scrollIntoView({
        behavior: 'smooth'
    })
});
    
window.addEventListener('scroll', ()=>{
    if(window.scrollY > serviciosContainer['top']){
        if(!$('.nosotros-title').hasClass('appear')){
            $('.nosotros-title').toggleClass('appear');
        }
    }
    if(window.scrollY > nosotrosContainer['top']){
        if(!$('#contact').hasClass('appear')){
            $('#contact').toggleClass('appear');
        }
        
    }
    
    
        
})
