let slide_show = ['images/background/slide1.jpg', 'images/background/slide2.jpg', 'images/background/slide3.jpg', 'images/background/slide4.jpg'];
let i = 0;
window.onload = function () {
  setInterval(function () {
    plusDivs(1);
    document.getElementById('slide_image').src = slide_show[i];
    i++;
    if (i > 3) i = 0;
  }, 3000)
}



var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("img_slide");
  if (n > x.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = x.length }
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex - 1].style.display = "block";
}


// dot dot dot
function show_product_line(){
  content = '<a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=candino">Candino</a><a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=claude_bernard">Claude Bernard</a><a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=fossil">Fossil</a><a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=orient">Orient</a><a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=movado">Movado</a><a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=police">Police</a><a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=teintop">Teintop</a><a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=rolex">Rolex</a><a id="watch_line" href="index.php?router=customer&control=watch_product&product_line=omega">Omega</a>';
  document.getElementById('contents').innerHTML = content;
  document.getElementById('watch_line_dot_dot_dot').innerHTML = '';
}