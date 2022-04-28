const expander = document.querySelectorAll(".btn-menu, .menu-closer")
const collapse = document.querySelector(".navbar-collapse")


expander.forEach(button => {
    button.addEventListener("click", () => {
        collapse.classList.toggle("active")
    })
})