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
