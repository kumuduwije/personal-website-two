var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 25,
  loop: true,
  centerSlide: 'true',
  fade: 'true',
  grabCursor: 'true',
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints:{
      0: {
          slidesPerView: 1,
      },
      520: {
          slidesPerView: 2,
      },
      950: {
          slidesPerView: 3,
      },
  },
});


// Back to top JS

let topBtn = document.getElementById("toTop");
window.onscroll = function() {screenScroll()};

function screenScroll(){
          if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
                topBtn.style.display = "block";
                
            }else{
                topBtn.style.display = "none";
            }
        }
        

function topClick(){
        
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        // window.scrollTo({ top: 900, behavior: 'smooth' })
}



// Type writter

const typewriter = ()=>{
  const texts = ["Student.", "Designer.", "Programmer.","Photographer.", "Tech Lover."]

let count = 0;
let index = 0;
let currentText = "";
let letter = "";

  (function type(){
    if(count === texts.length){
      count =0;
    }
    currentText = texts[count];
    letter = currentText.slice(0,++index);

    document.querySelector(".typing").textContent = letter;
    if(letter.length === currentText.length){
      count++;
      index = 0;
    }
    setTimeout(type,300);
  }());
}

typewriter();

// navbar hide when scrolling
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-120px";
  }
  prevScrollpos = currentScrollPos;
}


//Auto Close Sidebar When click on Link

const menu_items = document.getElementById("menu-items").getElementsByTagName('ul')[0];

document.onclick = (e) => {
  if(e.target.id != 'hamburger' && e.target.id != 'checkbox_toggle' ){
    menu_items.style.display = 'none';
  }
  else{
    menu_items.style.display = 'block';
  }
}