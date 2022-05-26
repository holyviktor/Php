const expander = document.querySelectorAll(".btn-menu, .menu-closer")
const collapses = document.querySelector(".navbar-collapse")


expander.forEach(button => {
    button.addEventListener("click", () => {
        collapses.classList.toggle("active")
    })
})
