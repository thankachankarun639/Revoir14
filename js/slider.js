sliderNext=2;

$(document).ready(function(){
 $("#slider>img#1").fadeIn(2000);
 startslider();
})

function startslider()
{
 loop = setInterval(function(){
  if(sliderNext>6)
  {
   sliderNext=1;
  }
   $("#slider>img").fadeOut(2000);
   $("#slider>img#"+sliderNext).fadeIn(2000);
   sliderNext=sliderNext+1;
 },4000);
}



