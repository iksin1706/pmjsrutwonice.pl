document.addEventListener("DOMContentLoaded", () => {
  const emailForm = document.getElementById("email-form");
  const emailPopup = document.querySelector('.email-popup');
  const emailPopupSuccess = emailPopup.querySelector('.email-popup__success');
  const emailPopupLoader = emailPopup.querySelector('.email-popup__loader');
  const emailPopupStatus = emailPopup.querySelector('.email-popup__status');
  const mobileNavButton = document.querySelector(".nav--mobile__button");
  const mobileNav = document.querySelector(".nav--mobile__nav");
  const mobileProductsItem = document.querySelector(".nav--mobile__item--products");
  const mobileNavToggle = document.querySelector("#navi-toggle");
  const nav = document.querySelector(".nav");
  const targets = document.querySelectorAll('.trigger');
  const banner = document.getElementById('banner-wrapper');
  let prevScrollPos = window.scrollY;

  const toggleMobileNav = () => {
    document.body.classList.toggle("no-scroll", !mobileNavToggle.checked);
    nav.classList.toggle("nav--background", mobileNavToggle.checked);
  };

  const toggleMobileProducts = () => {
    document.querySelector(".nav__dropdown--mobile").classList.toggle("show-products");
  };

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
    const devLayer = banner.querySelector('.dev');
    const delta = xPosition - banner.offsetLeft;
    devLayer.style.width = `${delta}px`;
    devLayer.style.borderRight = banner.offsetWidth / 2 > delta ? "solid 5px #ffffff99" : "solid 5px #ffffff99";
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

  const scrollHandler = () => {
    const currentScrollPos = window.scrollY;
    if (prevScrollPos > currentScrollPos) {
      nav.style.top = "0";
    } else {
      nav.style.top = "-9rem";
    }
    nav.classList.toggle("nav--background", currentScrollPos > 10);
    prevScrollPos = currentScrollPos;
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

  mobileNavButton.addEventListener('click', toggleMobileNav);
  mobileProductsItem.addEventListener('click', toggleMobileProducts);

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (entry.target.classList.contains('text-to-animate')) {
          animate();
        }
        if (entry.target.classList.contains('stats') && !entry.target.classList.contains('done')) {
          entry.target.classList.add('done');
          animateCountUp(document.getElementById("number1"), 10, 1000);
          animateCountUp(document.getElementById("number2"), 15, 1500);
          animateCountUp(document.getElementById("number3"), 1000, 2000);
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

  banner.addEventListener('mousemove', (e) => handleMoveEvent(e.clientX));
  banner.addEventListener('touchmove', (e) => {
    e.preventDefault();
    if (e.touches && e.touches.length > 0) {
      handleMoveEvent(e.touches[0].clientX);
    }
  });

  sliderPlugin(0);
  window.onscroll = scrollHandler;
});
