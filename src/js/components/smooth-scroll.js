import { checkMobile }from "../utils/check-screen";

export default class SmoothScroll {
  constructor() {
    this.linksEl = document.querySelectorAll('.header__menu-item');
    this.headerMenuMobile = document.querySelector('.header');
    this.navEl = document.querySelector('.header__nav');
    this.buttonMobileEl = document.querySelector('.header__button-line');
    if(this.linksEl) {
      this.init();
    }
  }
  init() {
    this.eventListeners();
  }
  eventListeners() {
    const self = this;
    this.linksEl.forEach(linkEl => linkEl.addEventListener('click', handleScroll));
    function handleScroll(e) {
      e.preventDefault();
      const href = e.target.getAttribute("href");
      const heightMenuInMobile = '100';
      const offsetTop = document.querySelector(href).offsetTop - heightMenuInMobile;
      const isMobile = checkMobile();
      if(isMobile) {
        self.headerMenuMobile.classList.remove('header--menu-mobile');
        self.navEl.classList.remove('header__nav--active');
        self.buttonMobileEl.classList.remove('header__button-line--active')
      }
      scroll({
        top: offsetTop,
        behavior: "smooth"
      });
    }
  }

}
