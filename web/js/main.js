document.addEventListener("DOMContentLoaded", () => {

    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: false
    })

});

/* js for slider */
/* slider 2
let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}
let refreshInterval = setInterval(()=> {next.click()}, 5000);
function reloadSlider(){
    slider.style.left = -items[active].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.slider .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');

    clearInterval(refreshInterval);
    refreshInterval = setInterval(()=> {next.click()}, 5000);

    
}

dots.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active = key;
         reloadSlider();
    })
})
window.onresize = function(event) {
    reloadSlider();
};
*/


/* slider 1
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
*/