document.addEventListener("DOMContentLoaded", function () {
  const emailForm = document.getElementById("email-form");

  emailForm.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(emailForm);
    document.querySelector('.email-popup').style.display = "block";
    let success = document.querySelector('.email-popup__success');
    let loader = document.querySelector('.email-popup__loader');

    loader.classList.remove("hidd")
    success.classList.remove("shown")
    document.querySelector('.email-popup__status').innerHTML = "Wysyłanie...";


    fetch("/send-email", {
      method: "POST",
      body: formData,

    })
      .then((response) => response.json())
      .then((data) => {
        loader.classList.add("hidd")
        success.classList.add("shown")
        document.querySelector('.email-popup__status').innerHTML = "";
        setTimeout(() => {
          document.querySelector('.email-popup').style.display = "none";
        }, 5000);
      })
      .catch((error) => {
        loader.classList.add("hidd")
        success.classList.add("shown")
        document.querySelector('.email-popup__status').innerHTML = "Nie udało sie wysłac wiadomosci";
        setTimeout(() => {
          document.querySelector('.email-popup').style.display = "none";
        }, 2000);
      });
  });
});

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
      if (entry.target.classList.contains('stats') && !entry.target.classList.contains('done')) {
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
  let startTimestamp;
  const framesPerSecond = 60;
  const increment = endValue / (duration / 1000 * framesPerSecond);

  // Easing function (ease-in-out)
  function easeInOut(t) {
    return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
  }

  function updateValue(timestamp) {
    if (!startTimestamp) {
      startTimestamp = timestamp;
    }

    const progress = (timestamp - startTimestamp) / (duration);
    if (progress >= 1) {
      targetElement.textContent = Math.round(endValue) + "+";
      cancelAnimationFrame(animationFrame);
    } else {
      const easedProgress = easeInOut(progress);
      const animatedValue = easedProgress * endValue;
      targetElement.textContent = Math.round(animatedValue) + "+";
      animationFrame = requestAnimationFrame(updateValue);
    }
  }

  let animationFrame = requestAnimationFrame(updateValue);
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
  if (currentScrollPos > 10) document.querySelector(".nav").classList.add("nav--background");
  else document.querySelector(".nav").classList.remove("nav--background");
  prevScrollpos = currentScrollPos;
}

sliderPluggin(0);


