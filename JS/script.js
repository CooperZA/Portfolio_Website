/* Smooth Scroll */
$('document').ready(()=>{
    // SmoothScroll
    $('.scroll').click((e)=>{
        e.preventDefault();

        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
        }, 2000);
    });

    // ScrollReveal
    const sr = ScrollReveal({
        origin: 'bottom',
        distance: '50px',
        scale: '0.2',
        duration: 1000,
        // delay: 500,
        reset: true
    });

    sr.reveal('.showcase-text', {
        delay: 200
    });
    sr.reveal('.main_1', {
        delay: 200
    });
    sr.reveal('.contact-text', {
        delay: 200
    });

    // Display project information
    $('.displayProj').addEventListener("mouseover", ()=>{
        $('.displayProj').css({'display': 'contents'}, {'background-color': 'rgba(0,0,0,0.8)'});
    });

});