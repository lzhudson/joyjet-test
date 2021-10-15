import Glider from 'glider-js';

export default class BlogSlider {
  constructor() {
    this.blogSliderEl = document.querySelector('.blog__slider');
    if (this.blogSliderEl) {
      this.init();
    }
  }
  init() {
    this.eventListeners();
  }
  eventListeners() {
    const self = this;
    window.addEventListener('load', function () {
      new Glider(document.querySelector('.blog__slider'), {
        slidesToShow: 3,
        slidesToScroll: 1,
        draggable: false,
        dots: '.dots',
        arrows: {
          prev: '.glider-prev',
          next: '.glider-next',
        },
        responsive: [
          {
            breakpoint: 300,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 900,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            },
          },
        ],
      });
    });
  }
}
