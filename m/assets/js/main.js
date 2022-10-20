let swiper1, topNewsSwiper, opinionNewsSwiper, seriesNewsSwiper, newsletterSwiper;
function setMainSwiper() {
  swiper1 = new Swiper('.photo_news_wrap', {
    slidesPerView: 'auto',
    spaceBetween: 15,
    loop: true,
    pagination: {
      el: '.news_photo_pagination',
    },
  });
  opinionNewsSwiper = new Swiper('.opinion_news_frame', {
    slidesPerView: 'auto',
  });
  seriesNewsSwiper = new Swiper('.series_news_frame', {
    slidesPerView: 'auto',
  });
  newsletterSwiper = new Swiper('.newsletter_frame', {
    slidesPerView: 1,
    spaceBetween: 15,
    pagination: {
      el: '.newsletter_pagination',
      clickable: true,
    },
  });
}
const topNewsSettings = {
  slidesPerView: 'auto',
  spaceBetween: 15,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
}

// 메인 Top news 섹션 토글
function toggleTopNewsSection(e, idx) {
  e.closest('.top_news_sec').classList.remove('is_active');
  document.querySelector('[data-news-idx="' + idx + '"]').classList.add('is_active');
  if (idx === 0) {
    topNewsSwiper = new Swiper('.top_news_frame', topNewsSettings);
  } else {
    topNewsSwiper.destroy();
  }
}
window.addEventListener('DOMContentLoaded', function () {
  setMainSwiper()
})
