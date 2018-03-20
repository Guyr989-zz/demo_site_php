//Responsive slider  
$('.responsive').slick({
  //dots = with/without dots
  dots: false,
  // previos rotation
  prevArrow: $('.prev'),
  //next rotation
  nextArrow: $('.next'),
  // infinite true = rotate forever!
  infinite: true,
  speed: 300,
  //slideToShow = amount of slides per rotation
  slidesToShow: 4,
  //slidesToScroll = amount of pictuers changed in rotation
  slidesToScroll: 4,
  responsive: [{
      // break-point 1024px
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


//TOGGLE FORM
$(".more").click(function (e) {
  e.preventDefault();
  
  $(".more").css("display", "none");
  $(".form-horizontal").slideToggle("slow", function () {});
});

// RESET FORM & HIDE
$(".reset").click(function (e) {
  e.preventDefault();
  $(".form-horizontal")[0].reset();
  $(".more").css("display", "block");
  $(".form-horizontal").slideToggle("slow", function () {});
});


// EXTRACTS FORM DATA
$(".form-horizontal").on('submit', function () {
  var my_form = $(this),
    url = my_form.attr('action'),
    type = my_form.attr('method'),
    data = {};
    my_form.find('[name]').each(function (index, value) {
    var my_form = $(this),
      name = my_form.attr('name'),
      value = my_form.val();
    data[name] = value;
  
  });


  // SENDS FORM TO contractform.php
  // RETURNS RESPONSE IF SUCCESS
  $.ajax({
    url: url,
    type: type,
    data: data,
    success: function (response) {
      $(".more").css("display", "block");
      $(".form-horizontal").slideToggle("slow", function () {});
      $(".form-horizontal")[0].reset();
      console.log("Email sent to demo@demo.com");   
      console.log(JSON.stringify(data)); 
    }
  });
  console.error("Error happend");
  return false;
});