
var menuBtn = document.querySelector(".contenedor-btn-menu");
function slideMenu() {
  var menu = document.querySelector(".slide-menu");
  if (menu.style.transform == "scaleX(0)") {
    menu.style.transform = "scaleX(1)";
  } else {
    menu.style.transform = "scaleX(0)";
  }
}
var closeBtn = document.getElementById("closeMenu");
function closeSlideMenu() {
  if (menu.style.transform == "scaleX(1)") {
    menu.style.transform = "scaleX(0)";
  }
}
menuBtn.addEventListener("click", slideMenu);
closeBtn.addEventListener("click", slideMenu);

let slider = document.querySelector(".slider");
let sliderItems = document.querySelectorAll('.item-slider');
let sliderLast = sliderItems[sliderItems.length - 1];
let nextbtn = document.querySelector('.nextbtn');
let prevbtn = document.querySelector('.prevbtn');


slider.insertAdjacentElement("afterbegin", sliderLast);

nextbtn.addEventListener("click",next);
prevbtn.addEventListener("click",prev);

function next(){
    
  // sliderNext = document.querySelectorAll('.item-slider')[2];
    sliderFirst = document.querySelectorAll('.item-slider')[0];
    sliderCurrent = document.querySelectorAll('.item-slider')[1];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all .8s ease";

    setTimeout(() => {
        // sliderNext.style.transform = "scale(.8)";
        // sliderNext.style.transition = "all 0.3s ease";

        sliderCurrent.style.transition = "all .8s ease";
        sliderCurrent.style.transform = "scale(.5)";
            }, 0);

    setTimeout(() => {
        sliderCurrent.style.transform = "scale(1)";
        // sliderNext.style.transform = "scale(1)";
    slider.style.marginLeft = "-100%";
    slider.style.transition = "none";
    slider.insertAdjacentElement("beforeend", sliderFirst);
}, 800);

}

function prev(){
    // sliderPrev = document.querySelectorAll('.item-slider')[0];
    let sliderItems = document.querySelectorAll('.item-slider');
    let sliderItemsLast = sliderItems[sliderItems.length - 1]; 
    let sliderCurrent = sliderItems[1];
    slider.style.marginLeft = "0";
    slider.style.transition = "all .8s ease";

    setTimeout(() => {
        // sliderPrev.style.transform = "scale(.9)";
        // sliderPrev.style.transition = "all 0.3s ease";

        sliderCurrent.style.transition = "all .8s ease";
        sliderCurrent.style.transform = "scale(.5)";
            }, 0);

    setTimeout(() => {
    slider.style.marginLeft = "-100%";
        slider.style.transition = "none";
    slider.insertAdjacentElement("afterbegin",sliderItemsLast);
    sliderCurrent.style.transform = "scale(1)";
    // sliderPrev.style.transform = "scale(1)";
    

    }, 800);


}

