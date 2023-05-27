//------------------------------------Trang chi tiết------------------------------
const bigImg = document.querySelector(".product-content-left-big-img img")
const smallImg = document.querySelectorAll(".product-content-left-small-img img")
smallImg.forEach(function(imgItem, X){
    imgItem.addEventListener("click", function(){
        bigImg.src = imgItem.src
    })
})

const camket = document.querySelector(".camket")
const chitiet = document.querySelector(".chitiet")
if(camket){
    camket.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-camket").style.display = "block"
    })
}
if(chitiet){
    chitiet.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block"
        document.querySelector(".product-content-right-bottom-content-camket").style.display = "none"
    })
}
const button = document.querySelector(".product-content-right-bottom-top")
if(button){
    button.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
    })
}
$(document).ready(function(){
    $('.product-content-left-big-img').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.product-content-left-small-img'
    });
    $('.product-content-left-small-img').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.product-content-left-big-img',
      dots: false,
      centerMode: true,
      focusOnSelect: true
    });
  });