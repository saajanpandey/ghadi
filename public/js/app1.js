//HEADER
const header = document.querySelector(".header");
const menuToggler = header.querySelector(".header__menu--toggler");
const megamenu = header.querySelector(".megamenu");
const closeMegaMenuBtn = header.querySelector(".close-megamenu");

menuToggler.addEventListener("click",function(){
    megamenu.classList.toggle("active");
    this.classList.toggle("active")
})

closeMegaMenuBtn.addEventListener("click",function(){
    megamenu.classList.remove("active");
})


//For header  nav
let hero = document.querySelector(".hero")

let scrolledAmount = hero.clientHeight - header.clientHeight;

window.addEventListener("scroll", function(e){
    let scrolled = window.scrollY;
   
    if(scrolled > scrolledAmount){
        header.classList.add("is-scrolled")
    }
    else{
        header.classList.remove("is-scrolled")
    }
})

// console.log(hero.clientHeight)548
// console.log(header.clientHeight)89

//Owl Carousel
const heroCarousel = $("#hero-carousel");

$(heroCarousel).owlCarousel({
    items: 1,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplaySpeed:450,
    slideTransition: "ease-in-out",//transition-timing-function (linear,ease-in, ease-in-out etc.)
    loop:true,//true or false -whether the slideshow repeat or not
    mouseDrag: true, //true or false -laptop & desktop (any non-touch device)
    toughDrag: true, //true or false - mobile(or any touch-friendly device)
    dots: false, //true or false - show 'next' or 'prev' buttons
    autoplayHoverPause: false, //true or false - stop autoplay on hover
    responsiveClass: true //true or false

});

//Featured products
const featuredProductCarousel = $("#featured-products-carousel");

$(featuredProductCarousel).owlCarousel({
    margin:25,
    items: 1,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplaySpeed:450,
    slideTransition: "ease-in-out",//transition-timing-function (linear,ease-in, ease-in-out etc.)
    loop:true,//true or false -whether the slideshow repeat or not
    mouseDrag: true, //true or false -laptop & desktop (any non-touch device)
    toughDrag: true, //true or false - mobile(or any touch-friendly device)
    dots: true, //true or false - show 'next' or 'prev' buttons
    autoplayHoverPause: true, //true or false - stop autoplay on hover
    responsiveClass: true, //true or false
    responsive: {
        //breakpoint from 0 up
        0:{
            items:1, //how many slide to how on screen
        },
        //breakpoint from 553 up
        553:{
            items:2, //how many slide to show on screen
        },
        901: {
            items:3, //how many slide to show on screen
        }
    } 
})

//User Drowndown
//When the user clicks on the button, toggle between hiding a
//showing the dropdown content

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


