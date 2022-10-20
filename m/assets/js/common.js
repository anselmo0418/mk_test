if (window.NodeList && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = Array.prototype.forEach;
}
if (!Element.prototype.matches) {
  Element.prototype.matches = Element.prototype.msMatchesSelector ||
      Element.prototype.webkitMatchesSelector;
}
if (!Element.prototype.closest) {
  Element.prototype.closest = function(s) {
    var el = this;
    do {
      if (el.matches(s)) return el;
      el = el.parentElement || el.parentNode;
    } while (el !== null && el.nodeType === 1);
    return null;
  };
}

let todayColumnSwiper, modalSwiper;

function setCommonSwiper() {
  modalSwiper = new Swiper('.summary_news_list_wrap', {
    slidesPerView: 1,
    observer: true,
    observeParents: true,
    loop: true,
    pagination: {
      el: '.progress_ber',
      clickable: true,
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
}

function setFlowTxt(el) {
  if (!el) el = '.flow_ui';
  const flowWrap = document.querySelector(el);
  if(!flowWrap) return
  const flowEl = flowWrap.querySelector('.move_el');
  const flowSize = {
    wrap: flowWrap?.clientWidth,
    el: flowEl?.scrollWidth
  }
  flowEl.setAttribute('style', '--repeat: ' + flowSize.el);
  const copyCnt = flowEl.innerHTML
  let copyNum = 3
  function sizeChk(num = 3) {
    return flowSize.wrap * 2 - flowSize.el * num < 0 ? true : false
  }
  while (!sizeChk(copyNum)) {
    copyNum++
  }
  let html = '';
  for (let i = 0; i < copyNum; i++) {
    html += copyCnt
  }
  flowEl.innerHTML = html
  flowEl.classList.add('is_move')
}

if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
  document.documentElement.dataset.dark = true;
  const themeCss = document.createElement('link')
  themeCss.setAttribute('rel', 'stylesheet')
  themeCss.setAttribute('href', '../../assets/css/theme.css')
  document.head.append(themeCss)
}
let stockBar, wrapper, subHeader;
window.addEventListener('DOMContentLoaded', function () {
  const openMenuBtn = document.querySelector('.open_full_menu_btn');
  const anb = document.querySelector('.anb');
  let isMenuActive = false;
  const topNewsFrame = document.querySelector('.top_news_frame');
  const gnb = document.querySelector('.gnb');
  const snb = document.querySelector('.snb');
  if (topNewsFrame) {
    const topNewsSwiperSec = topNewsFrame.closest('.top_news_sec');
    if (topNewsSwiperSec.offsetWidth > 0 && topNewsSwiperSec.offsetHeight > 0) {
      topNewsSwiper = new Swiper('.top_news_frame', topNewsSettings);
    }
  }
  stockBar = document.querySelector('.stock_flow_sec');
  wrapper = document.querySelector('.wrapper');
  subHeader = document.querySelector('.sub_header');
  wrapper.setAttribute('style', '--minH: ' + window.innerHeight + '; --winW: ' + (window.innerWidth >= 700 ? 700 : window.innerWidth))
  if (snb) wrapper.classList.add('has_snb')
  if (subHeader) header.classList.add('sub_header')
  setFlowTxt()
  setCommonSwiper()
  if(openMenuBtn) {
    openMenuBtn.addEventListener('click', function () {
      isMenuActive = !isMenuActive;
      if (isMenuActive) {
        anb.classList.add('is_active');
        document.body.style.height = '100%';
        document.body.style.overflow = 'hidden';
        if (gnb.classList.contains('is_searching')) gnb.classList.remove('is_searching');
      } else {
        anb.classList.remove('is_active');
        document.body.style.height = '';
        document.body.style.overflow = '';
      }
    });
  }
  const closeMenuBtn = document.querySelector('.anb_close');
  if(closeMenuBtn) {
    closeMenuBtn.addEventListener('click', function () {
      isMenuActive = false;
      anb.classList.remove('is_active');
      document.body.style.height = '';
      document.body.style.overflow = '';
    });
  }

  const footerSiteOpen = document.querySelector('footer .drop_menu_btn');
  const footerSite = document.querySelector('footer .drop_menu_wrap');
  const footerSiteClose = document.querySelectorAll('footer .drop_menu_item button');
  if(footerSiteOpen) {
    footerSiteOpen.addEventListener('click', function () {
      footerSite.classList.add('is_active');
    });
  }

  for (let i = 0; i < footerSiteClose.length; i++) {
    footerSiteClose[i].addEventListener('click', function () {
      footerSite.classList.remove('is_active');
    })
  }
  const newsSummaryBtn = document.querySelector('.news_ttl_wrap .summary');
  if (newsSummaryBtn) {
    newsSummaryBtn.addEventListener('click', function () {
      if (this.previousElementSibling.classList.contains('is_active')) {
        this.previousElementSibling.classList.remove('is_active');
        this.classList.remove('is_active')
      } else {
        this.previousElementSibling.classList.add('is_active');
        this.classList.add('is_active')
      }

    })
  }

  // Tab active효과
  const tabs = document.querySelectorAll('.tab_nav .nav_link');
  if (tabs) {
    let active = false
    tabs.forEach(function (tab, idx) {
      if(tab.classList.contains('active')) {
        active = true
      }
      if (idx === tabs.length-1 && !active) tabs[0].classList.add('active')
      tab.addEventListener('click', function () {
        if (!this.classList.contains('active')) {
          console.log(this.parentNode, this.childNodes[0])
          const activeTab = this.parentNode.parentNode.querySelector('.active');
          if(activeTab) activeTab.classList.remove('active');
          this.classList.add('active');
        }
      })
    })
  }

  // gnb 검색 버튼 클릭 이벤트
  const searchBtn = document.querySelector('.search_btn');
  if(searchBtn) {
    searchBtn.addEventListener('click', function () {
      if (gnb.classList.contains('is_searching')) {
        gnb.classList.remove('is_searching');
        document.body.style.height = '';
        document.body.style.overflow = '';
      } else {
        gnb.classList.add('is_searching');
        document.body.style.height = '100%';
        document.body.style.overflow = 'hidden';
      }
    })
  }

  window.addEventListener('scroll', commonScrollEvent);
  window.addEventListener('resize', ()=>{
    wrapper.setAttribute('style', '--minH: ' + window.innerHeight + '; --winW: ' + (window.innerWidth >= 700 ? 700 : window.innerWidth))
  });

});

// 스크롤 이벤트
let scr = window.scrollY || window.pageYOffset;
function commonScrollEvent() {
  const newScr = window.scrollY || window.pageYOffset;
  if (container.classList.contains('detail_page')) return;
  else {
    // view 페이지 아닐 경우
    if (newScr > stockBar.offsetHeight) {
      header.classList.add('gnb_fixed');
    } else {
      header.classList.remove('gnb_fixed');
    }
    if (wrapper.scrollHeight - window.innerHeight - 300 < newScr) return
    if (scr > newScr + 10) {
      // scroll up
      wrapper.classList.add('page_up');
      wrapper.classList.remove('page_down');
      if (newScr < 1) {
        wrapper.classList.remove('page_up');
      }
    } else if (scr < newScr - 10) {
      // scroll down
      wrapper.classList.add('page_down');
      wrapper.classList.remove('page_up');
    }
  }
  scr = newScr;
}

// toast 팝업
function showToast(text) {
  const toastElement = document.querySelector('.toast_wrap');
  const toastWrap = document.createElement('div');
  toastWrap.setAttribute('class', 'toast_wrap');
  if (toastElement) {
    toastElement.parentNode.removeChild(toastElement);
  }
  wrapper.appendChild(toastWrap);
  toastWrap.innerHTML = '<div class="toast"><p>' + text + '</p></div>';
  setTimeout(function () {
    toastWrap.parentNode.removeChild(toastWrap);
  }, 3000);
}

function getCheckedLength(input) {
  let length = 0;
  for (let i = 0; i < input.length; i++) {
    if (!input[i].classList.contains('check_all') && input[i].checked) {
      length += 1;
    }
  }
  return length;
}

function makeDd(group, item, dd) {
  const removeBtn = document.createElement('button');
  removeBtn.setAttribute('type', 'button');
  removeBtn.setAttribute('class', 'delete_filter_btn');
  removeBtn.setAttribute('onclick', 'deleteThisFilter(this)')

  for (let i = 0; i < item.length; i++) {
    if (group === '기간') {
      const el = document.createElement('span');
    } else {
      const el = document.createElement('p');
    }
    el.innerText = item[i];

    if (group !== '기간') {
      el.append(removeBtn);
    }
    dd.append(el);
  }
  if (group === '기간') {
    dd.append(removeBtn);
  }
}

function hideDatepicker() {
  $('.datepicker_filter').datepicker('hide');
}


$(function () {
  $.datepicker.setDefaults({
    dateFormat: 'yymmdd',
    prevText: '이전 달',
    nextText: '다음 달',
    monthNames: ['01월', '02월', '03월', '04월', '05월', '06월', '07월', '08월', '09월', '10월', '11월', '12월'],
    monthNamesShort: ['01월', '02월', '03월', '04월', '05월', '06월', '07월', '08월', '09월', '10월', '11월', '12월'],
    dayNames: ['일', '월', '화', '수', '목', '금', '토'],
    dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
    dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
    showMonthAfterYear: true,
    yearSuffix: '년'
  })
  // 인기뉴스 페이지 datepicker
  $('.popular_news_sec .datepicker').datepicker({
    dateFormat: 'yy.mm.dd',
    onSelect: function (val) {
      const today = new Date();
      const year = today.getFullYear();
      const month = today.getMonth() + 1;
      const day = today.getDate();
      const date = year + '.' + (('0' + month.toString()).slice(-2)) + '.' + (('0' + day.toString()).slice(-2));
      const txtArea = $(this).siblings('label').find('.date');
      if (val === date) {
        txtArea.text('오늘' + '');
      } else {
        txtArea.text(val);
      }
    },
    beforeShow: function (input, inst) {
      const label = $(input).siblings('label');
      setTimeout(function () {
        inst.dpDiv.css({
          top: (label.offset().top + label.innerHeight) + 'px',
          left: label.offset().left + 'px',
          marginTop: -10 + 'px',
        });
      }, 10)
    }
  });
  $('label[for="popularNewsDate"] .date').on('click', function () {
    $('.popular_news_sec .datepicker').datepicker('show');
  })

});


$(document).on('click', '#openTerms', function (e) {
  e.preventDefault();
  $('.terms_modal_wrap.terms_use').addClass('is_active');
});

$(document).on('click', '#openPrivacy', function (e) {
  e.preventDefault();
  $('.terms_modal_wrap.privacy').addClass('is_active');
});

$('.terms_modal_wrap .close_btn').off('click').on('click', function () {
  const btn = this.parentElement.parentElement;
  $(btn).removeClass('is_active');
});

$('.email_change').off('click').on('click', function () {
  $('.label_list.certify').addClass('is_active');
  $('.label_list.email').addClass('is_hide')
});
$('.go_summary').off('click').on('click', function (e) {
  e.preventDefault()
  $('.summary_news_sec').addClass('is_active');
  modalSwiper.autoplay.start();
});

$('.close_summary').off('click').on('click', function () {
  $('.summary_news_sec').removeClass('is_active');
  modalSwiper.autoplay.stop();
})


const saveBtn = document.querySelectorAll('.save_news');


saveBtn.forEach(function (item) {

  item.addEventListener('click', function () {

    if (this.classList.contains('is_active')) {
      this.classList.remove('is_active');

    } else {
      this.classList.add('is_active');
    }
  })
});
$('.delete_word_btn').on('click', function () {
  $(this).closest('li').remove();
});

$('.delete_words_btn').on('click', function () {
  const searchWord = $(this).closest('.ttl_area').siblings();
  $(searchWord).remove()
})
$('.tooltip_btn').on('click', function () {
  $(this).next().attr('tabindex', 0).show().focus();
})
$('.tooltip_panel > .close_btn').on('click', function () {
  $(this).parent().hide().prev().focus();
})