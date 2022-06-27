let viewThumb;
function viewScrollEvent() {
  const newScr = window.scrollY || window.pageYOffset;
// view 페이지일 경우
  if (scr < 1 || newScr < 1) {
    // scroll 0일 경우
    header.classList.remove('gnb_fixed');
    wrapper.classList.remove('page_down');
    wrapper.classList.remove('page_up');
  } else {
    header.classList.add('gnb_fixed');
    if (scr > newScr) {
      // scroll up
      wrapper.classList.add('page_up');
      wrapper.classList.remove('page_down');
    } else if (scr < newScr) {
      // scroll down
      wrapper.classList.add('page_down');
      wrapper.classList.remove('page_up');
      if (viewThumb && viewThumb.clientHeight < window.scrollY) {
        wrapper.classList.add('is_blk');
      } else {
        wrapper.classList.remove('is_blk');
      }
    }
  }
  scr = newScr;
}

window.addEventListener('DOMContentLoaded', function () {
  const deatilHead = document.querySelector('.news_ttl_sec');
  if (deatilHead.classList.contains('type_bg')) wrapper.classList.add('has_thumb')
  header.classList.add('detail_page')

  viewThumb = document.querySelector('.has_thumb .detail_page .news_ttl_wrap .thumb_area');
  const swiper1 = new Swiper('.photo_news_wrap2', {
    slidesPerView: 'auto',
    spaceBetween: 8,
    pagination: {
      el: '.news_photo_pagination',
    },
  });

// view page 좋아요 버튼
  const likeArticleBtn = document.querySelector('.detail_page .btn.like');
  if (likeArticleBtn) {
    likeArticleBtn.addEventListener('click', function () {
      const thisParent = this.parentNode;
      if (thisParent.classList.contains('is_active')) {
        thisParent.classList.remove('is_active');
        showToast('좋아요를 취소했습니다.');
      } else {
        thisParent.classList.add('is_active');
        showToast('이 기사를 좋아합니다.');
      }
    });
  }

  const $changeFontBtn = $('.control_item_frame>.btn');
  $changeFontBtn.on('click', function () {
    $(this).parent().siblings().find('.option_group ').removeClass('is_active');
    $(this).next().addClass('is_active')
  });
  $('.option_group .close_btn').on('click', function () {
    $(this).parents('.option_group').removeClass('is_active');
  })
  const fontBtn = $('.option_group.change_font_option .btn_area .btn')
  fontBtn.on('click', function (){
    const $this = $(this)
    fontBtn.not($this).removeClass('is_active');
    $this.toggleClass('is_active');
    if($this.hasClass('is_active')){
      const fz = $this.data('fz')
      $('.news_cnt_detail_wrap').attr('data-fz', fz)
    }
  })
  window.addEventListener('scroll', viewScrollEvent);

})

