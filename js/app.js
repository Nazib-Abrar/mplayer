
$(document).ready(function () 
{
  $(".elements").slick
  ({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 7,
    slidesToScroll: 3,
    responsive: 
    [
      {
        breakpoint: 1024,
        settings: 
        {
          slidesToShow: 5,
          slidesToScroll: 2,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: 
        {
          slidesToShow: 3,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480,
        settings: 
        {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
    ],
  });
});





//alert("linked");




