window.addEventListener("DOMContentLoaded", event => {
    var navbarMobile=function(){
        /*main navbar idsini çektik */ 
        const nCollapsible=document.body.querySelector("#mainNavbar");
        if(!nCollapsible){
            return;
        }
        if(window.scrollY === 0){/* navbar y ekseninde çekilmemişse navbar mobile'ı kaldır*/ 
            nCollapsible.classList.remove("navbar-mobile");
        }else{/* y ekseninde aşşa kaydırılmışsa ekle*/ 
            nCollapsible.classList.add("navbar-mobile");
        }
    };
    navbarMobile();
    document.addEventListener("scroll",navbarMobile);/* sayfada scrool olursa navbar mobile'ı çağır*/ 


    /* bootstrap ile scroolspy olayını yapmak*/ 
    const myNavbar=document.body.querySelector("#mainNavbar");
    if(myNavbar){
        new bootstrap.ScrollSpy(document.body,{
            target:"#mainNavbar",
            offset:74,
        });
    }
});

const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".img-slide");
const contents = document.querySelectorAll(".content");

var sliderNav= function(manual){
    btns.forEach((btn) => {
        btn.classList.remove("active")
    })
    slides.forEach((slide) => {
        slide.classList.remove("active")
    })

    contents.forEach((content) => {
        content.classList.remove("active")
    })

    btns[manual].classList.add("active");
    slides[manual].classList.add("active");
    contents[manual].classList.add("active");
}
    btns.forEach((btn,i) =>{
        btn.addEventListener("click",() => {
            sliderNav(i)
        });

    });



    

