

let textTienTours = document.querySelectorAll('.txt_giatientour');
textTienTours.forEach(element => {
    let txtTienTour = Number(element.innerHTML);
    element.innerHTML  =  txtTienTour.toLocaleString("en-US");
});

let textGiaNguoiLons = document.querySelectorAll('.text_gianguoilon');
textGiaNguoiLons.forEach(element => {
    let textGiaNguoiLon = Number(element.innerHTML);
    element.innerHTML  =  textGiaNguoiLon.toLocaleString("en-US");
});

let textGiaTreEms = document.querySelectorAll('.text_giatreem');
textGiaTreEms.forEach(element => {
    let textGiaTreEm = Number(element.innerHTML);
    element.innerHTML  =  textGiaTreEm.toLocaleString("en-US");
});



function tinhTienTour(){
    let giaTienTour = document.querySelector('.giatien_tour');
    let soNguoiLon = document.querySelector('#amount_adult').value;
    let soTreEm = document.querySelector('#amount_child').value;
    let giaTienNguoiLon = document.querySelector('.price_adult').innerHTML;
    let giaTienTreEm = document.querySelector('.price_child').innerHTML;
    
    let priceValue = (soNguoiLon * giaTienNguoiLon) + (soTreEm * giaTienTreEm);
    
    giaTienTour.setAttribute("value",String(priceValue));
}
function updateTienTour(){

    let giaTienTour = document.querySelector('.update_giatientour');
    let soNguoiLon = document.querySelector('#so_nguoi_lon').value;
    let soTreEm = document.querySelector('#so_tre_em').value;
    let giaTienNguoiLon = document.querySelector('.gia_nguoi_lon').value;
    let giaTienTreEm = document.querySelector('.gia_tre_em').value;
    
    let priceValue = (soNguoiLon * giaTienNguoiLon) + (soTreEm * giaTienTreEm);
    
    giaTienTour.setAttribute("value",String(priceValue));
}


function totalPrice() {
    let giaTienNguoiLon = document.querySelector('.price_adult').innerHTML;
    let soNguoiLon = document.querySelector('#amount_adult').value;
    let price_adult= soNguoiLon * giaTienNguoiLon;

    let giaTienTreEm = document.querySelector('.price_child').innerHTML;
    let soTreEm = document.querySelector('#amount_child').value;
    let price_child = soTreEm * giaTienTreEm;
    

    let totalPrice = document.querySelector(".total_price");
    totalPrice.innerHTML = (Number(price_adult + price_child)).toLocaleString("en-US");


}
function priceAdult(){
    let giaTienNguoiLon = document.querySelector('.price_adult').innerHTML;
    let soNguoiLon = document.querySelector('#amount_adult').value;
    let price = soNguoiLon * giaTienNguoiLon;
    let a = document.querySelector(".price_adult_h");
    a.innerHTML = price;   
}

function priceChild() {
    let giaTienTreEm = document.querySelector('.price_child').innerHTML;
    let soTreEm = document.querySelector('#amount_child').value;
    let price = soTreEm * giaTienTreEm;
    let a = document.querySelector(".price_child_h");
    a.innerHTML = price;   
}



let loadFile = (event) => {
    let output = document.querySelector('.avatar');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = () => {
      URL.revokeObjectURL(output.src)
    }
};

let load_anh_tour = (event) => {
    let output = document.querySelector('.img_tour_descr');
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
        autoplay: true,
        autoplaySpeed: 1500,
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




