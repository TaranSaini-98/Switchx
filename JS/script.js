// SCROLL TO TOP START   
var lastScrollTop = 0;

navbar = document.getElementById("navbar");

window.addEventListener("scroll", function(){
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if(scrollTop > lastScrollTop){
        navbar.style.top = "-120px";
    }else{
        navbar.style.top="50px";
    }
    lastScrollTop = scrollTop;
})

let calcScrollValue = () => {
    let scrollProgress = document.getElementById("progress");
    let progressValue = document.getElementById("progress-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight =
      document.documentElement.scrollHeight -
      document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);
    if (pos > 100) {
      scrollProgress.style.display = "grid";
    } else {
      scrollProgress.style.display = "none";
    }
    scrollProgress.addEventListener("click", () => {
      document.documentElement.scrollTop = 0;
    });
    scrollProgress.style.background = `conic-gradient(#797979 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
  };
  window.onscroll = calcScrollValue;
  window.onload = calcScrollValue;

// SCROLL TO TOP END   


// CARD SECTION TO TOP START   

var swiper = new Swiper(".mySwiper", {
    
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        autoplayTimeout: 1000, //2000ms = 2s
        autoplayHoverPause: true,
    },

    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows: false,
    },
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
    },

     // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    
});

// CARD SECTION TO TOP END   


// FORM VALIDATIONS START

// function checkInputs(){
//     const items = document.querySelector(".item");

//     for (const item of items){
//       if (item.value == ""){
//         item.classList.add("error");
//       }
//       item.addEventListener("keyup", () => {  })
//     }
// }

// FORM VALIDATIONS START

