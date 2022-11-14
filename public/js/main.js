
/* let tabs = document.querySelectorAll(".menu_info-item")

tabs.forEach(tab => {
    tab.addEventListener("click", () => {
        (document.querySelector(".active")).classList.remove("active");
        tab.classList.add("active");
    })
});
 */
let loadFile = (event) => {
    let output = document.querySelector('.avatar');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = () => {
      URL.revokeObjectURL(output.src)
    }
  };

$(document).ready(function () {
    $(".slider_discount").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        draggable: false,
        arrows:true,
        prevArrow: `<button type='button' class="slick-prev slick-arrow"><i class="fa-solid fa-circle-chevron-left"></i></button>`,
        nextArrow: `<button type='button' class="slick-next slick-arrow"><i class="fa-solid fa-circle-chevron-right"></i></button>`,
        dots: true,
        /* autoplay: true,
        autoplaySpeed: 2000, */
    });
});



const input = document.querySelector(".input__password");
const pass_sign = document.querySelector(".input__password-signup");
const pass_again = document.querySelector(".input__password-again");
const eyeOpen = document.querySelector(".eye-open");
const eyeClose = document.querySelector(".eye-close");
const eyeOpenSignUp = document.querySelector(".signup__eye-open");
const eyeCloseSignUp = document.querySelector(".signup__eye-close");
const eyeOpenSignUp1 = document.querySelector(".signup__eye-open1");
const eyeCloseSignUp1 = document.querySelector(".signup__eye-close1");


eyeOpen.addEventListener("click", function() {
    eyeOpen.classList.add("hidden");
    eyeClose.classList.remove("hidden");
    input.setAttribute("type", "password");
});
eyeClose.addEventListener("click", function() {
    eyeOpen.classList.remove("hidden");
    eyeClose.classList.add("hidden");
    input.setAttribute("type", "text");
});

eyeOpenSignUp.addEventListener("click", function(){
    eyeCloseSignUp.classList.remove("hidden");
    eyeOpenSignUp.classList.add("hidden");
    pass_sign.setAttribute("type", "password");
});
eyeCloseSignUp.addEventListener("click", function(){
    eyeCloseSignUp.classList.add("hidden");
    eyeOpenSignUp.classList.remove("hidden");
    pass_sign.setAttribute("type", "text");
});
eyeOpenSignUp1.addEventListener("click", function(){
    eyeCloseSignUp1.classList.remove("hidden");
    eyeOpenSignUp1.classList.add("hidden");
    pass_again.setAttribute("type", "password");
});
eyeCloseSignUp1.addEventListener("click", function(){
    eyeCloseSignUp1.classList.add("hidden");
    eyeOpenSignUp1.classList.remove("hidden");
    pass_again.setAttribute("type", "text");
});

