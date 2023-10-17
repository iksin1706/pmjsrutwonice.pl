function sliderPluggin(activeslide = 0) {
    const slides = document.querySelectorAll('.slide');
  
    slides[activeslide].classList.add('active');
  
    function clearActiveClasses() {
      slides.forEach((slide) => {
        slide.classList.remove('active');
      });
    }
  
    for (const slide of slides) {
      slide.addEventListener('click', () => {
        clearActiveClasses();
        slide.classList.add('active');
      });
    }
  }
  
  const animation = "animate-up 0.7s cubic-bezier(0.87, 0, 0.13, 1) forwards";
  
  const targets = document.querySelectorAll('.trigger');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (entry.target.classList.contains('text-to-animate')) {
          animate();
        }
        if (entry.target.classList.contains('stats')&& !entry.target.classList.contains('done')) {
          entry.target.classList.add('done');
          animateCountUp(document.getElementById("number1"), 10, 1000); // 15 is the end value, 2000 is the duration in milliseconds
          animateCountUp(document.getElementById("number2"), 15, 1500); // 10 is the end value, 2000 is the duration in milliseconds
          animateCountUp(document.getElementById("number3"), 1000, 2000); // 1000 is the end value, 2000 is the duration in milliseconds
        }
        if (entry.target.classList.contains('slider')) {
          if (!entry.target.classList.contains('animated')
            && !entry.target.classList.contains('animation-finished')) {
            entry.target.classList.add('animated');
            sliderPluggin(0);
            setTimeout(() => {
              entry.target.classList.add('animation-finished');
              entry.target.classList.remove('animated')
            }, 1500)
          }
          return
        }
  
        entry.target.classList.add('animated');
      }
    });
  }, {
    rootMargin: '50%',
    threshold: [0.5]
  });
  
  targets.forEach((target) => {
    observer.observe(target);
  
  });
  
  document.addEventListener('DOMContentLoaded', function () {
    let banner = document.getElementById('banner-wrapper');
    let devLayer = banner.querySelector('.dev');
    let delta = 0;
  
    function handleMoveEvent(xPosition) {
      delta = xPosition - banner.offsetLeft;
      devLayer.style.width = delta + 'px';
      if (banner.offsetWidth / 2 > delta) {
        devLayer.style.borderRight = "solid 5px #ffffff99";
      } else {
        devLayer.style.borderRight = "solid 5px #ffffff99";
      }
    }
  
    banner.addEventListener('mousemove', function (e) {
      handleMoveEvent(e.clientX);
    });
  
    banner.addEventListener('touchmove', function (e) {
      e.preventDefault();

      if (e.touches && e.touches.length > 0) {
        handleMoveEvent(e.touches[0].clientX);
      }
    });
  });
  
  function animateCountUp(targetElement, endValue, duration) {
    let currentValue = 0;
    const increment = endValue / (duration / 16); // 16ms per frame for smooth animation
  
    const updateValue = () => {
      currentValue += increment;
      if (currentValue >= endValue) {
        currentValue = endValue;
        clearInterval(animationInterval);
      }
  
      targetElement.textContent = Math.round(currentValue) + "+";
    };
  
    const animationInterval = setInterval(updateValue, 16);
  }
  
  var scrollContainer = document.querySelector("body");
  
  var prevScrollpos = window.scrollY;
  window.onscroll = function () {
    var currentScrollPos = window.scrollY;
    if (prevScrollpos > currentScrollPos) {
      document.querySelector(".nav").style.top = "0";
    } else {
      document.querySelector(".nav").style.top = "-9rem";
    }
    console.log(currentScrollPos);
    if(currentScrollPos > 10) document.querySelector(".nav").classList.add("nav--background");
    else document.querySelector(".nav").classList.remove("nav--background");
    prevScrollpos = currentScrollPos;
  }

  sliderPluggin(0);
  