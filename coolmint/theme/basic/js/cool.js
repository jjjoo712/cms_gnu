$(document).ready(function(){

    
  const swiper = new Swiper('#package .swiper', {
    // Optional parameters
    autoplay: {
      delay: 2500,
    },
    
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '#package .swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '#package .swiper-button-next',
      prevEl: '#package .swiper-button-prev',
    },
    slidesPerView: 1,
    spaceBetween: 30,
    slidesPerGroup: 3,
    
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
   
    
    breakpoints: {

      640: {
        
        spaceBetween: 10,
      },
      768: {
       
        spaceBetween: 20,
      },
      1024: {
  
        spaceBetween: 50,
      },
    }
  });







  AOS.init();


  // $('.gnb_1da').click(function(e){
  //     e.preventDefault(); // a 원래기능 없애
  //     $("#gnb_all, #gnb_all_bg").hide();
  //     $('body, html').animate({
  //         scrollTop : $($(this).attr('href')).offset().top
  //     }, 400)
  // })


  
})






