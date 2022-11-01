// Nav Section ========================
const nav1 = document.querySelector("nav");
const mobileNav = document.querySelector("nav.mobile-nav");
const menuIcon = document.querySelector(".menu-icon");
const closeIcon = document.querySelector(".mobile-menu-container .close-icon");
const mobileMenuContainer = document.querySelector(".mobile-menu-container");




window.addEventListener("scroll", () =>{
    if(window.pageYOffset >60){
        nav1.classList.add("scrolled");
        mobileNav.classList.add("scrolled")
    }else{
        nav1.classList.remove("scrolled")
        mobileNav.classList.remove("scrolled")
    }
})

menuIcon.addEventListener("click", ()=> {
    mobileMenuContainer.classList.add("active")
})

closeIcon.addEventListener("click", ()=> {
    mobileMenuContainer.classList.remove("active");
})


// Contact Us Script below
//=====================================================

let data = []
function submitForm(){
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let number = document.getElementById("number").value;
    let message = document.getElementById("textarea").value;
    
    let userObj  = {
        name,
        email,
        number,
        message
    }

    data.push(userObj)
    // console.log(data)
    localStorage.setItem("userData",JSON.stringify(data))
}


