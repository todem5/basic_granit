document.addEventListener("DOMContentLoaded", () => {

    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: false
    })

});

const images = [
    ['/img/slider_0.jpg', ''],
    ['/img/slider_1.jpg', ''], 
    ['/img/slider_2.jpg', ''], 
    ['/img/slider_3.jpg', '']
  ];
  let imageCounter = 0;
  
  setContent();
  
  $('.left-arrow').on('click', function() {
    if(imageCounter === 0){
      imageCounter = images.length - 1;
    } else {
      imageCounter --;
    }
    setContent();
  });
  
  $('.right-arrow').on('click', function() {
    if(imageCounter === images.length - 1){
      imageCounter = 0;
    } else {
      imageCounter ++;
    }
    setContent();
  });
  
  function setContent() {
    $('.image').css('background-image', `url(${images[imageCounter][0]})`);
    //$('.description').html(images[imageCounter][1]);
  }
