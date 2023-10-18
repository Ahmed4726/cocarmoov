


const multipleItemCarousel = document.querySelector("#carouselExampleControls");

// Function to advance the carousel to the next slide
function nextSlide() {
  const carousel = new bootstrap.Carousel(multipleItemCarousel, {
    interval: false
  });
  carousel.next();
}

// Set an interval to advance the carousel every 4 seconds (4000 milliseconds)
let autoplayInterval;

window.addEventListener('load', function () {
  // Start autoplay once on page load
  autoplayInterval = setInterval(nextSlide, 4000);

  // Clear the autoplay interval when the user interacts with the carousel
  multipleItemCarousel.addEventListener('slide.bs.carousel', function () {
    clearInterval(autoplayInterval);
  });
});
if (window.matchMedia("(min-width:576px)").matches) {
  const carousel = new bootstrap.Carousel(multipleItemCarousel, {
    interval: false
  });

  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();

  var scrollPosition = 0;

  $(".carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 4) {
      scrollPosition = scrollPosition + cardWidth;
      $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 600);
    }
  });
  $(".carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition = scrollPosition - cardWidth;
      $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 600);
    }
  });
} else {
  $(multipleItemCarousel).addClass("slide");
}
// carousel-autoplay.js



window.onload = function(){
  var slides = document.getElementsByClassName('carousel-item'),
      addActive = function(slide) {slide.classList.add('active')},
      removeActive = function(slide) {slide.classList.remove('active')};
  addActive(slides[0]);
  
  setInterval(function (){
    for (var i = 0; i < slides.length; i++){
      if (i + 1 == slides.length) {
        addActive(slides[0]);
        slides[0].style.zIndex = 100;
        setTimeout(removeActive, 350, slides[i]); //Doesn't be worked in IE-9
        break;
      }
      if (slides[i].classList.contains('active')) { 
        slides[i].removeAttribute('style');
        setTimeout(removeActive, 350, slides[i]); //Doesn't be worked in IE-9
        addActive(slides[i + 1]);
        break;
      }
    } 
  }, 4000);
}

