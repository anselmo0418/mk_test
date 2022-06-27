function setRelatedWord () {
  const related_keywords = document.querySelector('.related_keyword_wrap')
  if(related_keywords) {
    if(related_keywords.scrollHeight > 38) {
      related_keywords.classList.add('type_2');
      const toggleBtn = related_keywords.querySelector('.toggle_view');
      function toggleEvt() {
        toggleBtn.classList.toggle('is_active')
        if(toggleBtn.classList.contains('is_active')) {
          related_keywords.classList.add('is_active')
        } else  {
          related_keywords.classList.remove('is_active')
        }
      }
      toggleBtn.removeEventListener('click', toggleEvt);
      toggleBtn.addEventListener('click', toggleEvt);
    } else  {
      related_keywords.classList.remove('type_2')
    }
  }
}
window.addEventListener('DOMContentLoaded', function () {
  // 필터 드랍메뉴 on/off
  const filterBtns = document.querySelectorAll('.dropdown .dropdown_toggle');
  const filterMenus = document.querySelectorAll('.dropdown .dropdown_menu');
  filterBtns.forEach((v, i) => {
    v.addEventListener('click', function () {
      this.classList.toggle('active');
      filterMenus[i].classList.toggle('active');
      filterMenus.forEach((v1, i1) => {
        if(i !== i1) {
          filterBtns[i1].classList.remove('active')
          v1.classList.remove('active')
        }
      })
    });
  })

  const openFilterBtn = document.querySelector('.search_page .open_filter');
  const filterWrap = document.querySelector('.search_page .filter_wrap');
  openFilterBtn.addEventListener('click', function () {
    filterWrap.classList.toggle('is_active');
  });
  setRelatedWord ()

  const filterOpts = document.querySelectorAll('.dropdown_item');
  let selectedOpts = []
  if(filterOpts) {
    filterOpts.forEach(v => {
      v.addEventListener('click', () => {
        const type = v.parentElement.className
        const name = v.dataset.filterType
        const value = v.dataset.filterValue
        const menu = v.closest('.dropdown_menu')
        if (type === 'radio') {
          filterOpts.forEach(v1 => {
            if (v1.dataset.filterType === name) {
              v1.classList.remove('active')
            }
          })
          v.classList.add('active')
          if (name === '기간' && value === '직접입력') {
            v.parentElement.nextElementSibling.classList.add('is_active');
            return;
          } else {
            menu.classList.remove('active');
            menu.previousElementSibling.classList.remove('active');
          }
          addFilterList(name, value);
          return
        } else if (type === 'checkbox') {
          v.classList.toggle('active');
          const chkList = document.querySelectorAll('[data-filter-type="' + name + '"]');
          if (v.classList.contains('chk_all')) {
            if (selectedOpts.indexOf(value) !== -1) {
              selectedOpts = [];
              filterOpts.forEach(v1 => {
                if (v1.dataset.filterType === name) {
                  v1.classList.remove('active')
                }
              })
            } else {
              selectedOpts = [];
              selectedOpts.push(value)
              filterOpts.forEach(v1 => {
                if (v1.dataset.filterType === name) {
                  v1.classList.add('active')
                }
              })
            }
          } else {
            if (selectedOpts.indexOf(value) !== -1) {
              selectedOpts.splice(selectedOpts.indexOf(value), 1)
            } else {
              if (selectedOpts.indexOf('전체') !== -1) {
                selectedOpts = [];
                filterOpts.forEach(v1 => {
                  if (v1.dataset.filterType === name) {
                    if (v1.classList.contains('chk_all')) {
                      v1.classList.remove('active')
                    } else if(v1.dataset.filterValue !== value) {
                      selectedOpts.push(v1.dataset.filterValue)
                    }
                  }
                })
              } else {
                selectedOpts.push(value);
                if (selectedOpts.length > chkList.length - 2) {
                  selectedOpts = [];
                  selectedOpts.push('전체');
                  filterOpts.forEach(v1 => {
                    if (v1.dataset.filterType === name && v1.classList.contains('chk_all')) {
                      v1.classList.add('active')
                    }
                  })
                }
              }
            }
          }
        }
      })
    })
  }
  const filterSubmits = document.querySelectorAll('.dropdown .dropdown_menu .btn_area .btn');
  if(filterSubmits) {
    filterSubmits.forEach(v => {
      v.addEventListener('click', ()=>{
        const menu = v.closest('.dropdown_menu')
        menu.classList.remove('active')
        menu.previousElementSibling.classList.remove('active');
        addFilterList('카테고리', selectedOpts);
      })
    })
  }
})

function addFilterList(group, item) {
  if(!item || item.length < 1) return
  const filterArea = document.querySelector('.selected_filter_wrap');
  const dl = document.createElement('dl');
  dl.className = 'label_list';
  const dt = document.createElement('dt');
  const label = document.createElement('b');
  const dd = document.createElement('dd');
  label.innerText = group;
  makeDd(group, item, dd);
  dl.append(dt);
  dt.append(label);
  dl.append(dd);
  if (filterArea) { // filter 한 개 이상 설정되어 있을 경우
    let nameArr = [];
    const name = filterArea.querySelectorAll('dt b');
    let isExist = false;
    let idxToChange;
    for (let i = 0; i < name.length; i++) {
      nameArr[i] = name[i].innerText;
    }
    for (let i = 0; i < nameArr.length; i++) {
      if (nameArr[i] === group) {
        isExist = true;
        idxToChange = i;
      }
    }
    if (isExist) { // 이미 설정되어 있는 filter일 경우
      const div = document.querySelectorAll('.selected_filter_wrap dl')[idxToChange];
      const dd = div.querySelector('dd');
      dd.innerHTML = '';
      makeDd(group, item, dd);
    } else { // 새로 설정한 filter일 경우
      filterArea.append(dl);
    }
  } else { // 설정된 filter 하나도 없을 경우
    const filterInfoWrap = document.createElement('div');
    filterInfoWrap.setAttribute('class', 'selected_filter_wrap');
    document.querySelector('.sec_head').append(filterInfoWrap);
    filterInfoWrap.append(dl);
  }
}
function makeDd(group, item, dd) {
  const list = document.createElement('ui')
  list.className = 'filter_list';
  console.log(Array.isArray(item), item)
  if(Array.isArray(item)) {
    for (let i = 0; i < item.length; i++) {
      const node = document.createElement('li')
      node.className = 'filter_node';
      const btn = document.createElement('button')
      btn.className = 'filter_item remove_filter';
      const span = document.createElement('span')
      span.className = 'name';
      const icon = document.createElement('i')
      icon.className = 'ic ic_remove';
      span.innerText = item[i];
      btn.append(span);
      btn.append(icon);
      node.append(btn);
      list.append(node);
    }
  } else {
    const node = document.createElement('li')
    node.className = 'filter_node';
    const btn = document.createElement('button')
    btn.className = 'filter_item remove_filter';
    const span = document.createElement('span')
    span.className = 'name';
    const icon = document.createElement('i')
    icon.className = 'ic ic_remove';
    span.innerText = item;
    btn.append(span);
    btn.append(icon);
    node.append(btn);
    list.append(node);
  }
  dd.append(list)
}
function deleteThisFilter(e) {
  if (e.closest('.filter_info_wrap').querySelectorAll('dl').length <= 1) {
    if (e.closest('dd').querySelectorAll('p').length <= 1) {
      e.closest('.sec_head').querySelector('.filter_info_wrap').remove();
    } else {
      e.closest('dl').remove();
    }
  }
}
// filter - datepicker
let dateFrom, dateTo
$('.datepicker_filter').datepicker({
  dateFormat: 'yy.mm.dd',
  prevText: '이전 달',
  nextText: '다음 달',
  monthNames: ['01월', '02월', '03월', '04월', '05월', '06월', '07월', '08월', '09월', '10월', '11월', '12월'],
  monthNamesShort: ['01월', '02월', '03월', '04월', '05월', '06월', '07월', '08월', '09월', '10월', '11월', '12월'],
  dayNames: ['일', '월', '화', '수', '목', '금', '토'],
  dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
  dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
  showMonthAfterYear: true,
  yearSuffix: '년',
  onSelect: function (val, inst) {
    if (!dateFrom) {
      dateFrom = val;
    } else {
      dateTo = val;
    }
    if (dateTo) {
      drawRange(dateFrom, dateTo)
      inst.dpDiv.closest('.dropdown_menu').removeClass('active');
      inst.dpDiv.closest('.dropdown_menu').prev().removeClass('active');
      addFilterList('기간', `${dateFrom} ~ ${dateTo}`)
      dateFrom = dateTo = null
    }
  },
  onChangeMonthYear: function (){
    if($('#start_date').val() && $('#end_date').val())
      drawRange($('#start_date').val(), $('#end_date').val())
  }
});
function drawRange(start, end){
  let sDay;
  let eDay;
  if (new Date(start) - new Date(end) < 0) {
    $('#start_date').val(start)
    $('#end_date').val(end);
    sDay = start.split('.');
    eDay = end.split('.');
  } else {
    $('#start_date').val(end);
    $('#end_date').val(start);
    sDay = end.split('.');
    eDay = start.split('.');
  }
  setTimeout(()=>{
    const chkEl = $('.ui-datepicker').find('[data-handler="selectDay"]')
    let drawEls = [];
    if(sDay[0] <= chkEl.eq(0).data('year') && chkEl.eq(0).data('year') <= eDay[0]) {
      if(sDay[1] === eDay[1]){
        chkEl.each(function (idx, v) {
          if(Number(chkEl.eq(0).data('month')) + 1 === Number(sDay[1])) {
            const _v = $(v)
            if(_v.find('a').data('date') >= Number(sDay[2]) && _v.find('a').data('date') <= Number(eDay[2])) {
              drawEls.push(v)
            }
          }
        })
      } else {
        if(eDay[0] > chkEl.eq(0).data('year') && Number(sDay[1]) <= Number(chkEl.eq(0).data('month')) + 1
          || sDay[0] < chkEl.eq(0).data('year') && Number(chkEl.eq(0).data('month')) + 1 <= Number(eDay[1])) {
          if(Number(sDay[1]) == Number(chkEl.eq(0).data('month'))+1) {
            chkEl.each(function (idx, v) {
              const _v = $(v)
              if(_v.find('a').data('date') >= Number(sDay[2])) {
                drawEls.push(v)
              }
            })
          } else if(Number(eDay[1]) == Number(chkEl.eq(0).data('month'))+1){
            chkEl.each(function (idx, v) {
              const _v = $(v)
              if(_v.find('a').data('date') <= Number(eDay[2])) {
                drawEls.push(v)
              }
            })
          } else {
            chkEl.each(function (idx, v) {
              drawEls.push(v)
            })
          }
        }
      }
    }
    drawEls.forEach(value => {
      if(value.dataset.year === sDay[0]
        && Number(value.dataset.month)+1 == Number(sDay[1])
        && value.querySelector('a').dataset.date == Number(sDay[2]))  value.classList.add('start_date')
      if(value.dataset.year === eDay[0]
        && Number(value.dataset.month)+1 == Number(eDay[1])
        && value.querySelector('a').dataset.date == Number(eDay[2]))  value.classList.add('end_date')
      value.classList.add('sel_date')
    })
  }, 10)
}
document.addEventListener('click', function (e) {
  const el = e.target.closest('.remove_filter')
  if(el) {
    const target = el.parentElement.parentElement.parentElement.parentElement; // 최상위 부모를 찾음
    el.parentElement.remove(); //버튼의 부모를 삭제
    const items = target.querySelectorAll('.filter_node'); // 최상의 부모의 자식(li)를 찾음
    if (items.length <= 0) {
      target.remove();
    }
  }
});