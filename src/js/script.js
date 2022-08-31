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
  const texts = ["Undergraduate student.", "Designer.", "Programmer."]

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


//Form validation 

function validateForm(event) {
  // event.preventDefault();
  let namestatus = document.forms["contactForm"]["name"].value;
  let mailstatus = document.forms["contactForm"]["email"].value;
  let subjectstatus = document.forms["contactForm"]["subject"].value;
  if (namestatus == "") {
    
    // alert("Name must be filled out");
    document.getElementById("name-err").style.display = "block";
    document.getElementById("name").style.border = "0.5px solid rgb(183, 66, 66)";
  }

 

  if(mailstatus == "") {
    document.getElementById("email-err").style.display = "block";
    document.getElementById("email").style.border = "0.5px solid rgb(183, 66, 66)";
  }

  if(subjectstatus == "") {
    document.getElementById("subject-err").style.display = "block";
    document.getElementById("subject").style.border = "0.5px solid rgb(183, 66, 66)";
  }
  

  if(mailstatus == "" || namestatus == "") {
    return false;
  }
}

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