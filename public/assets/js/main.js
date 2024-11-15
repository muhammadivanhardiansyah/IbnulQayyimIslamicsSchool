
(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

})();


// header scroll

 window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    const scrollPosition = window.scrollY;

    if (scrollPosition > 50) { // Ubah angka 50 sesuai kebutuhan untuk menentukan titik scroll
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
  const count = document.querySelector(".counter");
const increase = document.querySelector(".increase");
const decrease= document.querySelector(".decrease");
const reset = document.querySelector(".reset")
let number=0;


const changeValue = (num) => {
number += num;
   count.classList.toggle("negative", number < 0);
   count.classList.toggle("positive", number > 0);
   count.innerHTML=number;
  };
  
  // increase.addEventListener('click', () => {
  //   changeValue(1);
  // });
  
  // decrease.addEventListener('click', () => {
  //   changeValue(-1);
  // });

  if (increase) {
    increase.addEventListener('click', () => {
      changeValue(1);
    });
  } else {
    console.error('Elemen #increase tidak ditemukan!');
  }

  if (increase) {
    increase.addEventListener('click', () => {
      changeValue(-1);
    });
  } else {
    console.error('Elemen #increase tidak ditemukan!');
  }

    reset.addEventListener("click", () => {
        count.innerHTML=0;
       count.classList.remove("negative");
       count.classList.remove("positive");
    })
    window.addEventListener('load', () => {
      AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      })
    });
    (() => {
      const counter = document.querySelectorAll('.counter');
      // covert to array
      const array = Array.from(counter);
      // select array element
      array.map((item) => {
          // data layer
          let counterInnerText = item.textContent;
  
          let count = 1;
          let speed = item.dataset.speed / counterInnerText
          function counterUp() {
              item.textContent = count++
              if (counterInnerText < count) {
                  clearInterval(stop);
              }
          }
          const stop = setInterval(() => {
              counterUp();
          }, speed);
      })
  })()
  
  
  
  