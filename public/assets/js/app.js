document.addEventListener('DOMContentLoaded', () => {

   const btnMobileMenu = document.querySelector('.btn-burger');
   const mobileMenu = document.querySelector('.mobile-menu');
   const logo = document.querySelector('.logo .logo__img');
   const bodyFix = document.querySelector('body');


   btnMobileMenu.onclick = function () {
      this.classList.toggle('btn-burger-active');
      mobileMenu.classList.toggle('mobile-menu-active');
      bodyFix.classList.toggle('body-fix');

      let logoAttr = logo.getAttribute('src');

      if (logoAttr === 'img/white-logo.png') {
         logo.setAttribute('src', 'img/black-logo.svg');
      } else {
         logo.setAttribute('src', 'img/white-logo.png');
      }
   }

   gsap.registerPlugin(ScrollTrigger, ScrollSmoother)
   ScrollSmoother.create({
      wrapper: '.wrapper',
      content: '.content'
   })

   window.addEventListener('scroll', e => {
      document.documentElement.style.setProperty('--scrollTop', `${this.scrollY}px`) // Update method
   })

   if (window.innerWidth > 992) {

      gsap.to(".main-section-3__p", {
         x: 0,
         duration: 50,
         transition: "linear",
         scrollTrigger: {
            trigger: "main-section-3__p",
            start: "top 50%",
            end: "bottom 100%",
            scrub: 2,
         }
      })

      gsap.to(".main-section-2__left, .main-section-2__right", {
         x: 0,
         duration: 50,
         transition: "linear",
         scrollTrigger: {
            trigger: "main-section-2",
            start: "top 50%",
            end: "bottom 100%",
            scrub: 2,
         }
      })

      gsap.to(".main-section-2__item", {
         y: 0,
         duration: 50,
         transition: "linear",
         scrollTrigger: {
            trigger: "main-section-2",
            start: "top 50%",
            end: "bottom 100%",
            scrub: 2,
         }
      })

      gsap.to(".spec-2__img", {
         x: 0,
         duration: 50,
         transition: "linear",
         scrollTrigger: {
            trigger: "spec-2",
            start: "top 50%",
            end: "bottom 100%",
            scrub: 2,
         }
      })

      gsap.to(".spec-1__img", {
         x: 0,
         duration: 50,
         transition: "linear",
         scrollTrigger: {
            trigger: "spec-1__pic",
            start: "top 50%",
            end: "bottom 100%",
            scrub: 2,
         }
      })
   }

   // Фильтр на странице модель

   const inputSearch = document.querySelector('.search__input');
   const itemCarStrings = document.querySelectorAll('tr td:nth-child(2)');

   if (inputSearch) {
      inputSearch.oninput = function () {
         for (let itemCarString of itemCarStrings) {
            let carName = itemCarString.textContent;
            let carNameRegister = carName.toLowerCase();

            if (carNameRegister.startsWith(this.value.toLowerCase())) {
               itemCarString.closest('tr').style.display = 'table-row';
            } else {
               itemCarString.closest('tr').style.display = 'none';
            }
         }
      }
   }

   let yearFooter = document.querySelector('.date');
   var date = new Date();

   yearFooter.textContent = date.getFullYear();

})

