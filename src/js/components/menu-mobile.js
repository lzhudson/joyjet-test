export default class MenuMobile {
  constructor() {
    this.headerEl = document.querySelector('.header');
    this.buttonMenuEl = document.querySelector('.header__button');
    this.headerNav = document.querySelector('.header__nav');
    if(this.headerEl && this.buttonMenuEl && this.headerNav) {
      this.init();
      console.log('instanciou');
    }
  }
  init() {
    this.eventListeners();
  }
  eventListeners() {
    const self = this;
    this.buttonMenuEl.addEventListener('click', function() {
      console.log('apertou');
      self.headerEl.classList.toggle('header--menu-mobile');
      const childrenButtonEl = self.buttonMenuEl.children[0];
      console.log(childrenButtonEl);
      childrenButtonEl.classList.toggle('header__button-line--active');
      self.headerNav.classList.toggle('header__nav--active');
    });
  }
}
