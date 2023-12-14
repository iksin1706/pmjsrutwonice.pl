let isComparisonAnimationDone = false;


document.addEventListener("DOMContentLoaded", () => {
  const emailForm = document.getElementById("email-form");
  const emailPopup = document.querySelector('.email-popup');
  const emailPopupSuccess = emailPopup.querySelector('.email-popup__success');
  const emailPopupLoader = emailPopup.querySelector('.email-popup__loader');
  const emailPopupStatus = emailPopup.querySelector('.email-popup__status');

  const targets = document.querySelectorAll('.trigger');
  const banner = document.getElementById('banner-wrapper');
  const devLayer = banner.querySelector('.dev');

  const sliderPlugin = (activeslide = 0) => {
    const slides = document.querySelectorAll('.slide');

    slides[activeslide].classList.add('active');

    const clearActiveClasses = () => {
      slides.forEach((slide) => {
        slide.classList.remove('active');
      });
    };

    slides.forEach((slide) => {
      slide.addEventListener('click', () => {
        clearActiveClasses();
        slide.classList.add('active');
      });
    });
  };

  const handleMoveEvent = (xPosition) => {
    // if (isComparisonAnimationDone) {
      const delta = xPosition - banner.getBoundingClientRect().left;
      devLayer.style.width = `${delta}px`;
      devLayer.style.borderRight = banner.offsetWidth / 2 > delta ? "solid 5px #ffffff99" : "solid 5px #ffffff99";
    // }
  };

  const animateCountUp = (targetElement, endValue, duration) => {
    let startTimestamp;
    const framesPerSecond = 60;
    const increment = endValue / (duration / 1000 * framesPerSecond);

    const easeInOut = (t) => {
      return t < 0.5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1;
    };

    const updateValue = (timestamp) => {
      if (!startTimestamp) {
        startTimestamp = timestamp;
      }

      const progress = (timestamp - startTimestamp) / duration;
      if (progress >= 1) {
        targetElement.textContent = `${Math.round(endValue)}+`;
        cancelAnimationFrame(animationFrame);
      } else {
        const easedProgress = easeInOut(progress);
        const animatedValue = easedProgress * endValue;
        targetElement.textContent = `${Math.round(animatedValue)}+`;
        animationFrame = requestAnimationFrame(updateValue);
      }
    };

    let animationFrame = requestAnimationFrame(updateValue);
  };



  emailForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(emailForm);

    emailPopup.style.display = "block";
    emailPopupLoader.classList.remove("hidd");
    emailPopupSuccess.classList.remove("shown");
    emailPopupStatus.innerHTML = "Wysyłanie...";

    try {
      const response = await fetch("/send-email", {
        method: "POST",
        body: formData,
      });
      const data = await response.json();

      emailPopupLoader.classList.add("hidd");
      emailPopupSuccess.classList.add("shown");
      emailPopupStatus.innerHTML = "";

      setTimeout(() => {
        emailPopup.style.display = "none";
      }, 5000);
    } catch (error) {
      emailPopupLoader.classList.add("hidd");
      emailPopupSuccess.classList.add("shown");
      emailPopupStatus.innerHTML = "Nie udało się wysłać wiadomości";

      setTimeout(() => {
        emailPopup.style.display = "none";
      }, 2000);
    }
  });



  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (entry.target.classList.contains('stats') && !entry.target.classList.contains('done')) {
          animateOdometers();
        }
        if (entry.target.classList.contains('slider')) {
          if (!entry.target.classList.contains('animated') && !entry.target.classList.contains('animation-finished')) {
            entry.target.classList.add('animated');
            sliderPlugin(0);
            setTimeout(() => {
              entry.target.classList.add('animation-finished');
              entry.target.classList.remove('animated');
            }, 1500);
          }
          return;
        }
        if (entry.target.classList.contains('flagship__text')) {
          blob.animate({
            left: `80%`,
            top: `25%`,
          // aspectRatio: '1.5'
          }, { duration: 2000, fill: "forwards", easing: "ease-out" });
        }
        if (entry.target.classList.contains("banner")) {
          blob.animate({
            left: `50%`,
            top: `80%`,
            //aspectRatio: '3'
          }, { duration: 2000, fill: "forwards", easing: "ease-out" });
          if (!isComparisonAnimationDone) {
            // devLayer.style.width = "25%";
            // console.log('anim');
            // setTimeout(function () {
            //   devLayer.style.width = "50%";
            //   setTimeout(function () {
            //     isComparisonAnimationDone = true;
            //     devLayer.style.transition = "0s";
            //   }, 1000);
            // }, 1000);
          }
        }
        entry.target.classList.add('animated');
      }
    });
  }, {
    threshold: [0.5]
  });

  targets.forEach((target) => {
    observer.observe(target);
  });


  const linesObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animated');
        console.log("text")
      }
    });
  }, {
    rootMargin: '0px 0px -30% 0px',
    threshold: [0.5]
  });
  const lines = document.querySelectorAll('.about__line');
  lines.forEach((target) => {
    linesObserver.observe(target);
  });


  banner.addEventListener('mousemove', (e) => handleMoveEvent(e.clientX));
  banner.addEventListener('touchmove', (e) => {
    e.preventDefault();
    if (e.touches && e.touches.length > 0) {
      handleMoveEvent(e.touches[0].clientX);
    }
  });

  sliderPlugin(0);

});
import AOS from 'aos';
import 'aos/dist/aos.css';

const animateOdometers = () => {

  let elements = document.querySelectorAll('.odometer');

  elements.forEach((el, index) => {
    const od = new Odometer({
      el: el,
      value: 0,
      format: '',
      theme: 'minimal'
    });

    od.update(el.getAttribute('value'));
  })
}

document.querySelector(".slider").onmousemove = e => {
  for (const card of document.getElementsByClassName("slide")) {
    const rect = card.getBoundingClientRect(),
      x = e.clientX - rect.left,
      y = e.clientY - rect.top;

    card.style.setProperty("--mouse-x", `${x - 50}px`);
    card.style.setProperty("--mouse-y", `${y}px`);
  };
}

document.querySelector("#cards").onmousemove = e => {
  for (const card of document.getElementsByClassName("card")) {
    const rect = card.getBoundingClientRect(),
      x = e.clientX - rect.left,
      y = e.clientY - rect.top;

    card.style.setProperty("--mouse-x", `${x - 50}px`);
    card.style.setProperty("--mouse-y", `${y}px`);
  };
}

AOS.init();


document.querySelector('.flagship').onpointermove = event => {
  // const { clientX, clientY } = event;

  // blob.animate({
  //   left: `${clientX}px`,
  //   top: `${clientY}px`
  // }, { duration: 3000, fill: "forwards" });
}

