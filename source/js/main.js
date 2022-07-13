//@import 'source/js/vendors/_vendor.js';

$(document).ready(function () {
    $('.client-slider').slick({
      arrows: false,
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
    });
    var pricingSlider     = document.querySelector('#pricing-slider');
    jQuery('.pricing-tabs').click(function(event)
        {
          var targetEle         = event.target,
              targetId          = targetEle.id,
              elements          = this.querySelectorAll('.ptabs'),
              pricingSliderEls  = pricingSlider.querySelectorAll('.pricing-plan-item');

              elements.forEach(function(ele, index){
                ele.classList.remove('active');
                pricingSliderEls[index].classList.remove('active');
              });

              pricingSlider.querySelector('#' + targetId).classList.add('active');
              targetEle.classList.add('active');
        });


    $('.animated-row').each(function(){
    var $this = $(this);
    $this.find('.animate').each(function(i){
      var $item = $(this);
      var animation = $item.data("animate");
      $item.waypoint(function(){
        $item.addClass('animated '+animation).removeClass('animate');
      },
      {
        offset: '85%',
        triggerOnce: true
      });
    });
  }); 
  
});

// Mobile view Industry menu
jQuery(document).on('click', '.darrow', function(event)
{
    var targetEle = document.querySelector('.dropdown');
    jQuery(this).next().slideDown();
    targetEle.classList.add('active');
    event.target.classList.add('sub-close');
});
jQuery(document).on('click', '.sub-close', function(event)
{
    var targetEle = document.querySelector('.dropdown');
    jQuery(this).next().slideUp();
    targetEle.classList.remove('active');
    event.target.classList.remove('sub-close');
});