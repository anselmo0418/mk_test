window.addEventListener('DOMContentLoaded', function () {
  header.classList.add('view_header');
  const likeBtn = document.querySelector('.like_btn_area button');
  let likeActive = false;
  likeBtn.addEventListener('click', function () {
    likeActive = !likeActive;
    const countEl = likeBtn.parentNode.querySelector('em')
    if (likeActive) {
      countEl.textContent = Number(countEl.textContent) + 1
      this.closest('.like_btn_area').classList.add('is_active');
    } else {
      countEl.textContent = Number(countEl.textContent) - 1
      this.closest('.like_btn_area').classList.remove('is_active');
    }
  })
});

(function ($){
  function viewScrollEvt(){
    const curr = $(window).scrollTop();
    const cntPosStart = $('.news_cnt_sec').offset().top;
    const topGap = $('.stock_flow_wrap').outerHeight();
    const headHeight = $('.gnb').outerHeight() + $('.lnb').outerHeight();
    const viewGap = $('.news_detail_head_group').outerHeight(true);
    const $header = $('#header')
    const $contents = $('.contents')
    const $viewheader = $('.view_fix_header');
    const viewHeight = headHeight + viewGap;

    // 헤더 fixed 상태
    if (curr > viewHeight) {
      $header.addClass('is_out');
      $viewheader.addClass('is_show');
      $contents.addClass('is_fix');
    } else if (curr > topGap) {
      $header.addClass('is_fix');
      $contents.addClass('is_fix');
    } else  {
      $contents.removeClass('is_fix');
      $header.removeClass('is_fix');
      $header.removeClass('is_out');
      $viewheader.removeClass('is_show')
    }

    const docH = $('html').outerHeight;
    const cntPosEnd2 = $('.news_detail_foot_group > .ad_wrap').offset().top;
    const cntPosEnd = $('.news_cnt_sec .ad_wrap').offset().top;
    const fixNav = $('.news_cnt_nav_sec');
    const fixNavH = $('.news_cnt_nav_sec').outerHeight();
    const navGap = fixNavH + 228;
    const fixAd = $('.news_cnt_ad_sec').outerHeight();
    const adGap = fixAd + 290;


    // floating Elem fixed 상태
    if (curr > cntPosEnd2 - navGap) {
      $('.news_cnt_nav_sec').addClass('is_fix');
      $('.news_cnt_nav_sec').css('transform', 'translate3d(0, -' + (curr - cntPosEnd2 + navGap) +'px, 0');
    } else {
      $('.news_cnt_nav_sec').css('transform', 'translate3d(0, 0, 0');
      $('.news_cnt_nav_sec').addClass('is_fix');
      if (curr > cntPosEnd - adGap) {
        $('.news_cnt_ad_sec').removeClass('is_fix');
        $('.news_cnt_ad_sec').addClass('is_end');
      } else if (curr > cntPosStart - headHeight) {
        $('.news_cnt_nav_sec').addClass('is_fix')
        $('.news_cnt_ad_sec').addClass('is_fix');
        $('.news_cnt_ad_sec').removeClass('is_end');
      } else if (curr > cntPosStart - headHeight) {
        $('.news_cnt_nav_sec').addClass('is_fix')
        $('.news_cnt_ad_sec').addClass('is_fix');
        $('.news_cnt_ad_sec').removeClass('is_end');
        $('.news_cnt_nav_sec').removeClass('is_end');
      } else {
        $('.news_cnt_nav_sec').removeClass('is_fix')
        $('.news_cnt_nav_sec').css('transform', 'translate3d(0,' + (cntPosStart - curr) +'px, 0');
        $('.news_cnt_ad_sec').removeClass('is_fix');
      }
    }

    const $commentWrap = $('.news_cmt_wrap')
    const $recomWrap = $('.news_detail_foot_group')
    if(curr + 110 > $recomWrap.offset().top) {
      fixNav.find('.go_recomm').addClass('is_active').siblings().removeClass('is_active')
    } else if(curr + 110 > $commentWrap.offset().top) {
      fixNav.find('.go_comment').addClass('is_active').siblings().removeClass('is_active')
    }  else  {
      fixNav.find('.go_top').addClass('is_active').siblings().removeClass('is_active')
    }
  }
  const fixNavBtn = $('.news_cnt_nav_sec button');
  fixNavBtn.on('click', function (){
    const target = $(this).data('sec')
    console.log($('.'+target).offset().top )
    const top = target === 'top' ? 0 : $('.'+target).offset().top - 100
    $('html, body').stop().animate({
      scrollTop: top
    }, 500)
  })

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
  viewScrollEvt()
  $(window).off('scroll').on('scroll', viewScrollEvt);

  var $newsSummaryBtn = $('.news_ttl_wrap .summary'); // 상세 본문보기 버튼
  var $openSummary = $('.summary_box');
  $newsSummaryBtn.on('click', function (){
    $(this).toggleClass('is_active')
    $openSummary.slideToggle();
  })
})(jQuery)

