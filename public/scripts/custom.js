// $(document).ready(function(){
//     $('.beverage_container').slick({
//         slidesToShow: 3,
//         slidesToScroll: 1,
//         centerMode: true,
//     });
//   });

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slideShow");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 3500); // Change image every 2 seconds
}