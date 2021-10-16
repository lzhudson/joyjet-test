export default class StickyNav {
  constructor() {
    this.heroSectionEl = document.querySelector('.hero');
    this.headerEl = document.querySelector('.header');
    if(this.heroSectionEl && this.headerEl) {
      this.init();
    }
  }
  init() {
    this.eventListeners();
  }
  eventListeners() {
    const self = this;
    function stickyyNav(e) {
      console.log('funcionando')
      const heroHeight = getComputedStyle(self.heroSectionEl).height.split('px')[0];
      const scrollValue = window.scrollY;
      if (scrollValue > heroHeight){
        self.headerEl.classList.add('header--fixed');
      } else if (scrollValue < heroHeight){
        self.headerEl.classList.remove('header--fixed');
      }
    }

    window.addEventListener('scroll', stickyyNav);
  }
}
