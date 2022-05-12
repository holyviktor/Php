new Swiper(".swiper", {
    spaceBetween: 10,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    
    slidesPerView: 2,
    loop:true,


    breakpoints: {
        768:{
            slidesPerView: 3,
            spaceBetween: 25,
        }
    }
})

const buttons = document.querySelectorAll(".btn-menu, .menu-closer")
const collapse = document.querySelector(".navbar-collapse")


buttons.forEach(button => {
    button.addEventListener("click", () => {
        collapse.classList.toggle("active")
    })
})