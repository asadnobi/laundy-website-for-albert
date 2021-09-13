$(window).scroll(function() {
	const topNavelement =  document.querySelector('.topNav');
	const brandselement =  document.querySelectorAll('.brand');
	if ($(this).scrollTop() > 100) {
    topNavelement.classList.add('slideInDown', 'fixed-top');
  }else {
    topNavelement.classList.remove('slideInDown', 'fixed-top');
  }

  var b;
  for (b = 0; b < brandselement.length; b++) {
	  if ($(this).scrollTop() < 700) {
	    brandselement[b].classList.add('animated', 'fadeIn');
	  }else {
	    brandselement[b].classList.remove('animated', 'fadeIn');
	  }
	}
});