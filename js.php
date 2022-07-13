<!-- Scripts -->
<!-- Scripts - Page Loader -->
<script>
$(window).on("load", function() {
	// Animate loader off screen
	$(".page-loader").fadeOut("slow");
});

$(function(){
  /* var tabChange = function () {
      var tabs = $('.nav-tabs > li');
      var active = tabs.filter('.active');
      var next = active.next('li').length ? active.next('li').find('a') : tabs.filter(':first-child').find('a');
      // Use the Bootsrap tab show method
      next.tab('show');
  };
  // Tab Cycle function
  var tabCycle = setInterval(tabChange, 1000);

  // Tab click event handler
  $('a').on('click', function (e) {
      e.preventDefault();
      // Stop the cycle
      clearInterval(tabCycle);
      // Show the clicked tabs associated tab-pane
      $(this).tab('show');
      // Start the cycle again in a predefined amount of time
      setTimeout(function () {
          //tabCycle = setInterval(tabChange, 5000);
      }, 15000);
  }); */

  /* // Tab-Pane change function
  var tabChange = function(){
      var tabs = $('.nav-tabs > li');
      var active = tabs.filter('.active');
      var next = active.next('li').length? active.next('li').find('a') : tabs.filter(':first-child').find('a');
      // Bootsrap tab show, para ativar a tab
      next.tab('show')
  }
  // Tab Cycle function
  var tabCycle = setInterval(tabChange, 1000)
  // Tab click event handler
  $(function(){
      $('.nav-tabs a').click(function(e) {
          e.preventDefault();
          // Parar o loop
          clearInterval(tabCycle);
          // mosta o tab clicado, default bootstrap
          $(this).tab('show')
          // Inicia o ciclo outra vez
          setTimeout(function(){
              tabCycle = setInterval(tabChange, 1000)//quando recomeça assume este timing
          }, 1000);
      });
  }); */

});
</script>
<!-- Scripts - Page Loader -->

<!-- Scripts - Sticky Header -->
<script>
$(window).scroll(function(){
  var sticky = $('#header'),
      scroll = $(window).scrollTop();

  if (scroll >= 10) sticky.addClass('header-sticky');
  else sticky.removeClass('header-sticky');
});
</script>
<!-- Scripts - Sticky Header -->

<script>
var mw = document.body.clientWidth;
$(function (){
	adjustHeaderMenu();
	
	$('.accordion .accordion-title').on('click' ,function(){
		$(this).parent('.accordion-item').toggleClass('active');
	});

  $('.f-block .f-title').on('click' ,function(){
		$(this).parent('.f-block').toggleClass('active');
	});
});

$(window).bind('resize orientationchange', function () {
	mw = document.body.clientWidth;
	adjustHeaderMenu();
});

var $topheadermenu = $('#mobile-nav');
var adjustHeaderMenu = function (){
	if (mw >= 992) 
	{
		$($topheadermenu).empty();
	}
	else 
	{
		$($topheadermenu).empty();
		$topheadermenu.html($(".navigation").html());
		$(document).on('click', '.mobile-nav__toggle', function(){
			$('.mobile-nav').addClass('open');
			$('body').addClass('hidden');
		});
		$(document).on('click', '.mobile-nav__close', function(){
			$('.mobile-nav').removeClass('open');
			$('body').removeClass('hidden');
      $('.menu-item').removeClass('active');
		});
    $('.menu-item .menu-click').on('click', function(){
      $(this).parent().parent('.menu-item').toggleClass('active');
    });
	}
}
</script>

<!-- Blog Filter -->
<script>
filterSelection("all")

function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
/* var btnContainer = document.getElementById("blogBtn");
var btns = btnContainer.getElementsByClassName("click");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
} */

// Dark Mode Option
// Select the button
const btn = document.querySelector("#theme-toggle");

// Select the theme preference from localStorage
const currentTheme = localStorage.getItem("theme");

// If the current theme in localStorage is "dark"...
if (currentTheme == "dark") {
  // ...then use the .dark-theme class
  document.body.classList.add("dark-theme");
}

// Listen for a click on the button 
btn.addEventListener("click", function() {
  // Toggle the .dark-theme class on each click
  document.body.classList.toggle("dark-theme");
  
  // Let's say the theme is equal to light
  let theme = "light";
  // If the body contains the .dark-theme class...
  if (document.body.classList.contains("dark-theme")) {
    // ...then let's make the theme dark
    theme = "dark";
  }
  // Then save the choice in localStorage
  localStorage.setItem("theme", theme);
});
</script>
<!-- Blog Filter -->