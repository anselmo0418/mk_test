let dateFrom, dateTo;

function addFilterList(group, item) {
  const filterArea = document.querySelector('.filter_info_wrap');
  const filterWrap = document.createElement('div');
  const dl = document.createElement('dl');
  const dt = document.createElement('dt');
  const dd = document.createElement('dd');
  const span = document.createElement('span');
  let ddGroup = [];
  dt.innerText = group;
  makeDd(group, item, dd);
  filterWrap.append(dt);
  filterWrap.append(dd);
  if (filterArea) { // filter 한 개 이상 설정되어 있을 경우
    let nameArr = [];
    const name = filterArea.querySelectorAll('dt');
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
      const div = document.querySelectorAll('.filter_info dl div')[idxToChange];
      const dd = div.querySelector('dd');
      dd.innerHTML = '';
      makeDd(group, item, dd);
    } else { // 새로 설정한 filter일 경우
      filterArea.querySelector('.filter_info dl').append(filterWrap);
    }
  } else { // 설정된 filter 하나도 없을 경우
    const filterInfoWrap = document.createElement('div');
    const filterInfo = document.createElement('div');
    filterInfoWrap.setAttribute('class', 'filter_info_wrap');
    filterInfo.setAttribute('class', 'filter_info');
    filterInfoWrap.append(filterInfo);
    document.querySelector('.sec_head').append(filterInfoWrap);
    document.querySelector('.sec_head .filter_info').append(dl);
    document.querySelector('.sec_head .filter_info dl').append(filterWrap);
  }
  if (group === '기간') {
    dateFrom = false;
    dateTo = false;
  }
}

function deleteThisFilter(e) {
  e.parentNode.classList.add('to_remove');
  e.closest('div').classList.add('to_remove_group');
  if (e.closest('dl').querySelectorAll('div').length <= 1) {
    if (e.closest('dd').querySelectorAll('p').length <= 1) {
      e.closest('.sec_head').querySelector('.filter_info_wrap').remove();
    } else {
      e.closest('dl').querySelector('.to_remove').remove();
    }
  } else if (e.closest('dd').querySelectorAll('p').length <= 1) {
    e.closest('dl').querySelector('.to_remove_group').remove();
  } else {
    e.closest('dl').querySelector('.to_remove').remove();
  }
}

function makeDd(group, item, dd) {
  for (let i = 0; i < item.length; i++) {
    const removeBtn = document.createElement('button');
    removeBtn.setAttribute('type', 'button');
    removeBtn.setAttribute('class', 'delete_filter_btn');
    removeBtn.setAttribute('onclick', 'deleteThisFilter(this)')
    let el
    if (group === '기간') {
      el = document.createElement('span');
    } else {
      el = document.createElement('p');
    }
    el.innerText = item[i];
    if (group !== '기간') {
      el.append(removeBtn);
    }
    dd.append(el);
  }
  if (group === '기간') {
    const removeBtn = document.createElement('button');
    removeBtn.setAttribute('type', 'button');
    removeBtn.setAttribute('class', 'delete_filter_btn');
    removeBtn.setAttribute('onclick', 'deleteThisFilter(this)')
    dd.append(removeBtn);
  }
}

function hideDatepicker() {
  $('.datepicker_filter').hide();
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
  // filter - datepicker
  $('.datepicker_filter').datepicker({
    dateFormat: 'yy.mm.dd',
    onSelect: function (val, inst) {
      if (!dateFrom) {
        dateFrom = val;
      } else {
        dateTo = val;
      }
      if (dateTo) {
        drawRange(dateFrom, dateTo)
        $('.datepicker_filter').hide();
        const tabIdx = inst.dpDiv.closest('.drop_down_wrap').data('filter');
        inst.dpDiv.closest('.drop_down_wrap').removeClass('is_active');
        $('.filter_item[data-filter="' + tabIdx + '"]').parent().removeClass('is_active');
        setDateFilter(dateFrom, dateTo);
        dateFrom = dateTo = null
      }
    },
    onChangeMonthYear: function (){
      if($('#start_date').val() && $('#end_date').val())
        drawRange($('#start_date').val(), $('#end_date').val())
    }
  });
  $('.has_datepicker label').on('click', function (e) {
    $('.datepicker_filter').show();
  })

});

function setDateFilter(from, to) {
  const filterInfo = document.querySelector('.filter_info');
  const filterRow = document.querySelectorAll('.filter_info dl > div');
  if (filterInfo) {
    const dtArr = document.querySelectorAll('.filter_info dt');
    let periodIdx;
    for (let i = 0; i < dtArr.length; i++) {
      if (dtArr[i].innerText === '기간') {
        periodIdx = i;
        filterRow[i].querySelectorAll('span')[0].innerText = from;
        filterRow[i].querySelectorAll('span')[1].innerText = to;
        break;
      } else {
        const period = [from, to]
        addFilterList('기간', period);
      }
    }
  }
}

$('.search_list .filter_dropdown_wrap .dropdown_node .dropdown_item').off('click').on('click', function () {
  const inputs = $(this).parents('.dropdown_list').find('input')
  const t = $(this).find('input')
  if(t[0].name === 'filterTerm' && t.val() !== '직접입력') hideDatepicker()
  if(t[0].name === 'filterCate') {
    let allChk
    inputs.each(function (i, input) {
      if(input.value === '전체') allChk = input
    })
    if(t.val() === '전체') {
      if(t[0].checked) {
        inputs.each(function (i, input) {
          input.checked = true;
          input.closest('.dropdown_node').classList.add('is_active');
        })
      } else {
        inputs.each(function (i, input) {
          input.checked = false;
          input.closest('.dropdown_node').classList.remove('is_active');
        })
      }
      return;
    }
    else {
      if(t[0].checked) {
        let count = 0
        inputs.each(function (i, input) {
          if(input !== allChk && input.checked) count++;
        })
        if(count === inputs.length - 1) {
          allChk.checked = true;
          allChk.closest('.dropdown_node').classList.add('is_active');
        }
      } else {
        allChk.checked = false
      }
    }
  }
  inputs.each(function (i, input) {
    if (input.checked) {
      input.closest('.dropdown_node').classList.add('is_active');
    } else {
      input.closest('.dropdown_node').classList.remove('is_active');
    }
  })
});

const filterOpenBtn = document.querySelector('.sec_head .filter_btn');
const filterWrap = document.querySelector('.filter_wrap');
if (filterOpenBtn) {
  filterOpenBtn.addEventListener('click', function () {
    if (filterWrap.classList.contains('is_active')) {
      filterWrap.classList.remove('is_active');
    } else {
      filterWrap.classList.add('is_active');
    }
  })
}

const filterBtns = document.querySelectorAll('.filter_group .filter_item')
const filterDropWraps = document.querySelectorAll('.filter_dropdown_wrap .drop_down_wrap')
if(filterBtns && filterDropWraps){
  filterBtns.forEach(function (btn) {
    btn.addEventListener('click', function (){
      const filterIdx = btn.dataset.filter
      const groupName = btn.textContent.trim()
      filterDropWraps.forEach(function (DropWrap){
        if(DropWrap.dataset.filter === filterIdx) {
          DropWrap.classList.add('is_active')
          DropWrap.querySelector('.confirm_filter_btn').addEventListener('click', function submit(){
            DropWrap.classList.remove('is_active')
            const inputs = DropWrap.querySelectorAll('input')
            const selVal= [];
            inputs.forEach(function (input){
              if(input.checked) selVal.push(input.value)
            })
            if(selVal.indexOf('직접입력') == -1) addFilterList(groupName, selVal)
            this.removeEventListener('click', submit)
          })
        }
        else DropWrap.classList.remove('is_active')
      })
    })
  })
}
function setRelatedWord () {
  const related_keywords = document.querySelector('.related_search')
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
    const chkEl = $('.datepicker_filter .ui-datepicker').find('[data-handler="selectDay"]')
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

setRelatedWord()
window.addEventListener('resize', setRelatedWord)