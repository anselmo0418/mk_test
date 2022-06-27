<?php include_once '../_inc/_head.php'; ?>

<!-- s: Header -->
<header id="header">
  <?php include_once '../_inc/header/Stock.php'; ?>
  <?php include_once '../_inc/header/_GNB.php'; ?>
  <?php include_once '../_inc/header/_LNB.php'; ?>
  <?php include_once '../_inc/header/_ANB.php'; ?>
  <?php include_once '../_inc/header/_SearchUi.php'; ?>
  <?php include_once '../_inc/header/SummaryNewsUi.php'; ?>
</header>
<div class="dim"></div>
<!-- e: Header -->

  <!-- s: Container -->
  <main id="container">
    <h1 class="page_ttl is_blind">인기뉴스홈</h1>
    <section class="contents popular_news_page list_page">
      <div class="set_inner">
	      <section class="popular_news_sec">
		      <header class="sec_head open_calender">
			      <div class="input_area open_calender">
				      <label for="popularNewsDate" class="sec_ttl"><span class="date">오늘</span><i class="ic"><span
								      class="is_blind">더보기</span></i></label>
				      <input type="text" id="popularNewsDate" class="datepicker" disabled>
			      </div>
			       <p class="guide_txt">
				       <em>최근 2시간</em> 기준 <b>조회수가 많은 기사</b>입니다.
			       </p>
		      </header>
          <div class="page_head">
            <div class="tab_wrap tab_ui">
              <div class="has_scroll_x type_hidden">
                <ul class="nav tab_nav tab_list" role="tablist">
                <li class="nav_item tab_node" role="presentation">
                  <a href="#" id="all" class="nav_link tab_item" role="tab" aria-controls="all_cnt" aria-selected="false">뉴스 종합</a>
                </li>
                <li class="nav_item tab_node" role="presentation">
                  <a href="#" id="economy" class="nav_link tab_item w_l" role="tab" aria-controls="economy_cnt" tabindex="-1">경제</a>
                </li>
                <li class="nav_item tab_node" role="presentation">
                  <a href="#" id="business" class="nav_link tab_item" role="tab" aria-controls="business_cnt" tabindex="-1">기업</a>
                </li>
                <li class="nav_item tab_node" role="presentation">
                  <a href="#" id="society" class="nav_link tab_item" role="tab" aria-controls="society_cnt" tabindex="-1">사회</a>
                </li>
                <li class="nav_item tab_node" role="presentation">
                  <a href="#" id="world" class="nav_link tab_item" role="tab" aria-controls="world_cnt" tabindex="-1">국제</a>
                </li>
                <li class="nav_item tab_node" role="presentation">
                  <a href="#" id="real_estate" class="nav_link tab_item" role="tab" aria-controls="realestate_cnt" tabindex="-1">부동산</a>
                </li>
                <li class="nav_item tab_node" role="presentation">
                  <a href="#" id="stock" class="nav_link tab_item" role="tab" aria-controls="stock_cnt" tabindex="-1">증권</a>
                </li>
                <li class="nav_item tab_node" role="presentation">
                  <a href="#" id="politics" class="nav_link tab_item" role="tab" aria-controls="politics_cnt" tabindex="-1">정치</a>
                </li>
                <li class="nav_item tab_node" role="presentation">
                  <a href="#" id="it" class="nav_link tab_item" role="tab" aria-controls="it_cnt" tabindex="-1">IT과학</a>
                </li>
	              <li class="nav_item tab_node" role="presentation">
		              <a href="#" id="culture" class="nav_link tab_item" role="tab" aria-controls="culture_cnt" tabindex="-1">문화</a>
	              </li>
	              <li class="nav_item tab_node" role="presentation">
		              <a href="#" id="star" class="nav_link tab_item" role="tab" aria-controls="star_cnt" tabindex="-1">연예</a>
	              </li>
	              <li class="nav_item tab_node" role="presentation">
		              <a href="#" id="sport" class="nav_link tab_item" role="tab" aria-controls="sport_cnt" tabindex="-1">스포츠</a>
	              </li>
              </ul>
              </div>
              <nav class="tab_btn_group">
                <button class="btn btn_ic prev" data-dir="prev"><i class="arw arw_s left"></i><span class="is_blind">이전 탭 그룹</span></button>
                <button class="btn btn_ic next" data-dir="next"><i class="arw arw_s right"></i><span class="is_blind">다음 탭 그룹<</span></button>
              </nav>
            </div>
          </div>
		      <div class="sec_body">
			      <div class="popular_top_wrap">
				      <ul class="popular_top_list news_list grid">
					      <li class="popular_top_node news_node col col_x5">
						      <a href="" class="news_item type_thumb">
							      <em class="news_num">1</em>
							      <div class="thumb_area">
								      <img src="../../assets/images/img_popular_01.png" alt="">
							      </div>
							      <div class="txt_area">
								      <h3 class="news_ttl">
									      고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
							      </div>
						      </a>
					      </li>
					      <li class="popular_top_node news_node col col_x5">
						      <a href="" class="news_item type_thumb">
							      <em class="news_num">2</em>
							      <div class="thumb_area">
								      <img src="../../assets/images/img_popular_01.png" alt="">
							      </div>
							      <div class="txt_area">
								      <h3 class="news_ttl">
									      고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
							      </div>
						      </a>
					      </li>
					      <li class="popular_top_node news_node col col_x5">
						      <a href="" class="news_item type_thumb">
							      <em class="news_num">3</em>
							      <div class="thumb_area">
								      <img src="../../assets/images/img_popular_01.png" alt="">
							      </div>
							      <div class="txt_area">
								      <h3 class="news_ttl">
									      고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
							      </div>
						      </a>
					      </li>
					      <li class="popular_top_node news_node col col_x5">
						      <a href="" class="news_item type_thumb">
							      <em class="news_num">4</em>
							      <div class="thumb_area">
								      <img src="../../assets/images/img_popular_01.png" alt="">
							      </div>
							      <div class="txt_area">
								      <h3 class="news_ttl">
									      고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
							      </div>
						      </a>
					      </li>
					      <li class="popular_top_node news_node col col_x5">
						      <a href="" class="news_item type_thumb">
							      <em class="news_num">5</em>
							      <div class="thumb_area">
								      <img src="../../assets/images/img_popular_01.png" alt="">
							      </div>
							      <div class="txt_area">
								      <h3 class="news_ttl">
									      고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
							      </div>
						      </a>
					      </li>
					      <li class="popular_top_node news_node col col_x5">
						      <a href="" class="news_item type_thumb">
							      <em class="news_num">6</em>
							      <div class="thumb_area">
								      <img src="../../assets/images/img_popular_01.png" alt="">
							      </div>
							      <div class="txt_area">
								      <h3 class="news_ttl">
									      고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
							      </div>
						      </a>
					      </li>
					      <li class="popular_top_node news_node col col_x5">
						      <a href="" class="news_item type_thumb">
							      <em class="news_num">7</em>
							      <div class="thumb_area">
								      <img src="../../assets/images/img_popular_01.png" alt="">
							      </div>
							      <div class="txt_area">
								      <h3 class="news_ttl">
									      고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
							      </div>
						      </a>
					      </li>
					      <li class="popular_top_node news_node col col_x5">
						      <a href="" class="news_item type_thumb">
							      <em class="news_num">8</em>
							      <div class="thumb_area">
								      <img src="../../assets/images/img_popular_01.png" alt="">
							      </div>
							      <div class="txt_area">
								      <h3 class="news_ttl">
									      고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
							      </div>
						      </a>
					      </li>
					      <li class="popular_top_node news_node col col_x5">
						      <a href="" class="news_item type_thumb">
							      <em class="news_num">9</em>
							      <div class="thumb_area">
								      <img src="../../assets/images/img_popular_01.png" alt="">
							      </div>
							      <div class="txt_area">
								      <h3 class="news_ttl">
									      고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
							      </div>
						      </a>
					      </li>
					      <li class="popular_top_node news_node col col_x5">
						      <a href="" class="news_item type_thumb">
							      <em class="news_num">10</em>
							      <div class="thumb_area">
								      <img src="../../assets/images/img_popular_01.png" alt="">
							      </div>
							      <div class="txt_area">
								      <h3 class="news_ttl">
									      고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
							      </div>
						      </a>
					      </li>
				      </ul>
			      </div>
		      </div>
	      </section>
        <div class="grid grid_custom type_6">
          <div class="col main_col">
	          <section class="news_sec popular_news_sec">
		          <div class="popular_news_wrap">
			          <ul class="popular_news_list type_txt">
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">11.</em>
							          <h3 class="news_ttl">골프연습장, 사우나는 기본 이제는 영화관까지…아파트 커뮤니티 시설 진화 한다</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">12.</em>
							          <h3 class="news_ttl">골프연습장, 사우나는 기본 이제는 영화관까지…아파트 커뮤니티 시설 진화 한다</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">13.</em>
							          <h3 class="news_ttl">러시아·우크라이나 갈등 심해지자 조정받은 美 반도체주…특수가스가 이유</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">14.</em>
							          <h3 class="news_ttl">6인 이상 모일 수 있을까…거리두기 조정안 금요일에 나온다</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">15.</em>
							          <h3 class="news_ttl">고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">16.</em>
							          <h3 class="news_ttl">도처에 좀비 같은 인간…세계 감염시킨 `K공포`</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">17.</em>
							          <h3 class="news_ttl">당국 “의료기관서 자비로 PCR 받고 `양성`이면 검사비 환급”</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">18.</em>
							          <h3 class="news_ttl">코스피서 무섭게 던진 기관들, 그래도 이 종목만큼은 샀다</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">19.</em>
							          <h3 class="news_ttl">“첫날부터 심상찮다”…갤S22 전작보다 4배 더 팔렸다, 역대 최다 전망</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">20.</em>
							          <h3 class="news_ttl">김재원 “안철수 단일화 제안?…동메달이 금메달 뺏을 생각”</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">21.</em>
							          <h3 class="news_ttl">“車반도체 더 못기다려”…자구책 나선 완성차업체</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">22.</em>
							          <h3 class="news_ttl">“가해자가 곧 감옥서 나온대…” 성폭행 피해 여고생 극단선택</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">23.</em>
							          <h3 class="news_ttl">“독일보다 2200만원 저렴”…볼보, 전기 SUV ‘C40 리차지’ 韓 출시</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">24.</em>
							          <h3 class="news_ttl">대화가 가능할까…푸틴의 `엄청난 거리두기`에 패러디 봇물</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">25.</em>
							          <h3 class="news_ttl">고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">26.</em>
							          <h3 class="news_ttl">1년새 몸값 10배↑…세무회계 플랫폼 삼쩜삼, 300억 투자 유치</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">27.</em>
							          <h3 class="news_ttl">고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">28.</em>
							          <h3 class="news_ttl">대화가 가능할까…푸틴의 `엄청난 거리두기`에 패러디 봇물 </h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">29.</em>
							          <h3 class="news_ttl">[1보] 총선 관여 혐의 남양주시장 징역 1년6월 선고…법정 구속</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">30.</em>
							          <h3 class="news_ttl">우크라 전운 속 폴란드에 미군 F-15 전투기 추가 파견</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">31.</em>
							          <h3 class="news_ttl">테슬라 주식 6조9000억 어치 기부한 머스크…왜?</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">32.</em>
							          <h3 class="news_ttl">골프연습장, 사우나는 기본 이제는 영화관까지…아파트 커뮤니티 시설 진화 한다</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">33.</em>
							          <h3 class="news_ttl">새해 첫 달 전기차 한국서 얼마나 팔렸나보니…작년의 9배↑</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">34.</em>
							          <h3 class="news_ttl">옵션 빠진 벤츠의 굴욕…수입차 판 뒤집은 재고대란</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">35.</em>
							          <h3 class="news_ttl">테슬라 주식 6조9000억 어치 기부한 머스크…왜?</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">36.</em>
							          <h3 class="news_ttl">새해 첫 달 전기차 한국서 얼마나 팔렸나보니…작년의 9배↑</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">37.</em>
							          <h3 class="news_ttl">골프연습장, 사우나는 기본 이제는 영화관까지…아파트 커뮤니티 시설 진화 한다</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">38.</em>
							          <h3 class="news_ttl">우크라 전운 속 폴란드에 미군 F-15 전투기 추가 파견</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">39.</em>
							          <h3 class="news_ttl">기아 EV6, 콘티넨탈타이어 주관 `아일랜드 올해의 차` 수상</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">40.</em>
							          <h3 class="news_ttl">[1보] 총선 관여 혐의 남양주시장 징역 1년6월 선고…법정 구속</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">41.</em>
							          <h3 class="news_ttl">대화가 가능할까…푸틴의 `엄청난 거리두기`에 패러디 봇물 </h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">42.</em>
							          <h3 class="news_ttl">1년새 몸값 10배↑…세무회계 플랫폼 삼쩜삼, 300억 투자 유치</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">43.</em>
							          <h3 class="news_ttl">“30분만에 다 팔렸다”…편의점 자가검사키트 입고 직후 `품절`</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">44.</em>
							          <h3 class="news_ttl">러시아·우크라이나 갈등 심해지자 조정받은 美 반도체주…특수가스가 이유</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">45.</em>
							          <h3 class="news_ttl">우크라 전운 속 폴란드에 미군 F-15 전투기 추가 파견</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">46.</em>
							          <h3 class="news_ttl">테슬라 주식 6조9000억 어치 기부한 머스크…왜?</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">47.</em>
							          <h3 class="news_ttl">[1보] 총선 관여 혐의 남양주시장 징역 1년6월 선고…법정 구속</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">48.</em>
							          <h3 class="news_ttl">새해 첫 달 전기차 한국서 얼마나 팔렸나보니…작년의 9배↑</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">49.</em>
							          <h3 class="news_ttl">러시아·우크라이나 갈등 심해지자 조정받은 美 반도체주…특수가스가 이유</h3>
						          </div>
					          </a>
				          </li>
				          <li class="popular_news_node">
					          <a href="" class="news_item">
						          <div class="txt_area">
							          <em class="news_num">50.</em>
							          <h3 class="news_ttl">고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
						          </div>
					          </a>
				          </li>
			          </ul>
		          </div>
	          </section>
          </div>
          <div class="col sub_col right">
            <div class="ad_wrap type_slide swiper-container">
              <ul class="ad_list swiper-wrapper">
                <li class="ad_node swiper-slide">
                  <a href="" class="ad_item">
                    <img src="../../assets/images/img_ad_swiper_01.png" alt="">
                  </a>
                </li>
                <li class="ad_node swiper-slide">
                  <a href="" class="ad_item">
                    <img src="../../assets/images/img_ad_swiper_01.png" alt="">
                  </a>
                </li>
                <li class="ad_node swiper-slide">
                  <a href="" class="ad_item">
                    <img src="../../assets/images/img_ad_swiper_01.png" alt="">
                  </a>
                </li>
              </ul>
              <div class="ad_pagination swiper-pagination"></div>
            </div>
            <div class="ad_wrap">
              <img src="../../assets/images/img_banner_L.png" alt="">
            </div>
          </div>
        </div>
      </div>


    </section>
  </main>
  <!-- e: Container -->

  <!-- s: Footer -->
  <?php include_once '../_inc/_footer.php'; ?>
  <?php include_once '../_inc/_foot.php'; ?>
  <!-- e: Footer -->