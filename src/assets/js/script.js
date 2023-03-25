// var sliderContainer = document.querySelector(".item-type");
//     var sliderWrapper = document.querySelector(".items-book");
//     var sliderItems = document.querySelectorAll(".items");
//     var sliderPrev = document.querySelector(".previous-btn");
//     var sliderNext = document.querySelector(".next-btn");
//     var numItemsShown = 6;

//     function updateSlider() {
//     var viewportWidth = window.innerWidth;

//     if (viewportWidth > 1200) {
//     numItemsShown = 6;
//     } else if (viewportWidth > 960) {
//     numItemsShown = 4;
//     } else if (viewportWidth > 760) {
//     numItemsShown = 3;
//     } else {
//     numItemsShown = 1;
//     }

//     var itemWidth = 100 / numItemsShown;
//     var wrapperWidth = itemWidth * sliderItems.length;
//     sliderWrapper.style.width = wrapperWidth + "%";

//     for (var i = 0; i < sliderItems.length; i++) {
//     sliderItems[i].style.width = itemWidth + "%";
//     }
//     }

//     function slidePrev() {
//     var firstItem = document.querySelector(".slider-item:first-child");
//     sliderWrapper.appendChild(firstItem);
//     }

//     function slideNext() {
//     var lastItem = document.querySelector(".slider-item:last-child");
//     sliderWrapper.insertBefore(lastItem, sliderWrapper.firstChild);
//     }

//     updateSlider();
//     window.addEventListener("resize", updateSlider);
//     sliderPrev.addEventListener("click", slidePrev);
//     sliderNext.addEventListener("click", slideNext);

    var item   = document.querySelectorAll(".items-book");
    var nextBtn = document.querySelectorAll(".next-btn");
    for(i=0; i<item.length; i++){
        nextBtn[i].addEventListener("click", function(){
            alert("testing local");
            
        })
    }
    