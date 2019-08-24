// Prevents right click
window.onload = ()=>{
    document.addEventListener('contextmenu', event => {
        event.preventDefault();
    }, false);
}

/* ScrollReveal */
$('document').ready(()=>{
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
});

/* baguetteBox */
baguetteBox.run('.gallery', {
    // custom
    captions: false,
});

// Form Validation
const form = document.querySelector('.contactform');

form.addEventListener('submit', event => {
    event.preventDefault();

    // feild values
    const name = form.name.value;
    const email = form.email.value;
    const message = form.message.value;

    if(name == ""){
        // Check name field
        alert("Name field is empty");
        form.name.style.borderColor = "red";
        return false;
    }else if(email == ""){
        // Check email field
        alert("Email field is empty");
        form.email.style.borderColor = "red";
        return false;
    }else if(message == ""){
        // Check message field
        alert("Message field is empty");
        form.message.style.borderColor = "red";
        return false;
    }else{
        form.submit(); // if conditions false submit
    }
});