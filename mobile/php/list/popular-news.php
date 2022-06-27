<?php include_once '../_inc/_head.php'; ?>

<!-- s: Header -->
<header id="header">
  <?php include_once '../_inc/header/Stock.php'; ?>
  <?php include_once '../_inc/header/_GNB.php'; ?>
  <?php include_once '../_inc/header/_ANB.php'; ?>
</header>
<!-- e: Header -->
<?php include_once '../_inc/header/_SummaryNewsUi.php'; ?>

  <!-- s: Container -->
  <main id="container">
    <h1 class="page_ttl is_blind">인기뉴스홈</h1>
    <section class="contents list_page popular_home">
      <div class="mk_body_news_group">
        <section class="popular_news_sec">
          <div class="set_inner">
            <header class="sec_head has_datepicker">
              <label for="popularNewsDate" class="sec_ttl"><span class="date">오늘</span> <i class="arw arw_l bottom"><span class="is_blind">더보기</span></i></label>
              <input type="text" id="popularNewsDate" class="datepicker" disabled>
	            <div class="tab_wrap">
		            <ul class="nav tab_nav tab_list" role="tablist">
			            <li class="nav_item tab_node" role="presentation">
				            <a href="#" id="seAll" class="nav_link tab_item" role="tab" aria-controls="all_cnt"
				               aria-selected="true">뉴스종합</a>
			            </li>
			            <li class="nav_item tab_node" role="presentation">
				            <a href="#" id="economy" class="nav_link tab_item w_l" role="tab"
				               aria-controls="economy_cnt" tabindex="-1">경제</a>
			            </li>
			            <li class="nav_item tab_node" role="presentation">
				            <a href="#" id="politics" class="nav_link tab_item" role="tab"
				               aria-controls="politics_cnt" tabindex="-1">기업</a>
			            </li>
			            <li class="nav_item tab_node" role="presentation">
				            <a href="#" id="society" class="nav_link tab_item w_l" role="tab"
				               aria-controls="society_cnt" tabindex="-1">사회</a>
			            </li>
			            <li class="nav_item tab_node" role="presentation">
				            <a href="#" id="world" class="nav_link tab_item" role="tab" aria-controls="world_cnt"
				               tabindex="-1">국제</a>
			            </li>
			            <li class="nav_item tab_node" role="presentation">
				            <a href="#" id="realestate" class="nav_link tab_item" role="tab"
				               aria-controls="realestate_cnt" tabindex="-1">부동산</a>
			            </li>
			            <li class="nav_item tab_node" role="presentation">
				            <a href="#" id="stock" class="nav_link tab_item w_l" role="tab"
				               aria-controls="stock_cnt" tabindex="-1">증권</a>
			            </li>
			            <li class="nav_item tab_node" role="presentation">
				            <a href="#" id="business" class="nav_link tab_item" role="tab"
				               aria-controls="business_cnt" tabindex="-1">정치</a>
			            </li>
			            <li class="nav_item tab_node" role="presentation">
				            <a href="#" id="culture" class="nav_link tab_item" role="tab" aria-controls="culture_cnt"
				               tabindex="-1">IT과학</a>
			            </li>
			            <li class="nav_item tab_node" role="presentation">
				            <a href="#" id="culture" class="nav_link tab_item" role="tab" aria-controls="culture_cnt"
				               tabindex="-1">문화</a>
			            </li>
			            <li class="nav_item tab_node" role="presentation">
				            <a href="#" id="culture" class="nav_link tab_item" role="tab" aria-controls="culture_cnt"
				               tabindex="-1">연예</a>
			            </li>
			            <li class="nav_item tab_node" role="presentation">
				            <a href="#" id="culture" class="nav_link tab_item" role="tab" aria-controls="culture_cnt"
				               tabindex="-1">스포츠</a>
			            </li>
		            </ul>
	            </div>
              <em>최근 2시간 기준 <b>조회수가 많은 기사</b>입니다.</em>
            </header>
            <div class="sec_body tab_content">
              <div id="all_cnt" role="tabpanel" class="tab_pane active popular_news_wrap">
                <ul class="grid grid_4 news_list popular_news_list">
                  <li class="news_node col col_6">
                    <a href="" class="news_item type_thumb">
                      <em class="news_num">1</em>
                      
	                    <div class="thumb_area">
		                    <img src="../../assets/images/img_ent_01.png" alt="">
	                    </div>
                      <div class="txt_area">
                        <h3 class="news_ttl">
                          고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
                      </div>
                    </a>
                  </li>
                  <li class="news_node col col_6">
                    <a href="" class="news_item type_thumb">
                      <em class="news_num">2</em>
                      
	                    <div class="thumb_area">
		                    <img src="../../assets/images/img_ent_02.png" alt="">
	                    </div>
                      <div class="txt_area">
                        <h3 class="news_ttl">
                          고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
                      </div>
                    </a>
                  </li>
                  <li class="news_node col col_6">
                    <a href="" class="news_item type_thumb">
                      <em class="news_num">3</em>
                      
	                    <div class="thumb_area">
		                    <img src="../../assets/images/img_ent_03.png" alt="">
	                    </div>
                      <div class="txt_area">
                        <h3 class="news_ttl">
                          고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
                      </div>
                    </a>
                  </li>
                  <li class="news_node col col_6">
                    <a href="" class="news_item type_thumb">
                      <em class="news_num">4</em>
                      
	                    <div class="thumb_area">
		                    <img src="../../assets/images/img_ent_04.png" alt="">
	                    </div>
                      <div class="txt_area">
                        <h3 class="news_ttl">
                          고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
                      </div>
                    </a>
                  </li>
                  <li class="news_node col col_6">
                    <a href="" class="news_item type_thumb">
                      <em class="news_num">5</em>
                      
	                    <div class="thumb_area">
		                    <img src="../../assets/images/img_ent_05.png" alt="">
	                    </div>
                      <div class="txt_area">
                        <h3 class="news_ttl">
                          고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
                      </div>
                    </a>
                  </li>
                  <li class="news_node col col_6">
                    <a href="" class="news_item type_thumb">
                      <em class="news_num">6</em>
                      
	                    <div class="thumb_area">
		                    <img src="../../assets/images/img_ent_06.png" alt="">
	                    </div>
                      <div class="txt_area">
                        <h3 class="news_ttl">
                          고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
                      </div>
                    </a>
                  </li>
                  <li class="news_node col col_6">
                    <a href="" class="news_item type_thumb">
                      <em class="news_num">7</em>
                      
	                    <div class="thumb_area">
		                    <img src="../../assets/images/img_ent_01.png" alt="">
	                    </div>
                      <div class="txt_area">
                        <h3 class="news_ttl">
                          고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
                      </div>
                    </a>
                  </li>
                  <li class="news_node col col_6">
                    <a href="" class="news_item type_thumb">
                      <em class="news_num">8</em>
                      
	                    <div class="thumb_area">
		                    <img src="../../assets/images/img_ent_02.png" alt="">
	                    </div>
                      <div class="txt_area">
                        <h3 class="news_ttl">
                          고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
                      </div>
                    </a>
                  </li>
                  <li class="news_node col col_6">
                    <a href="" class="news_item type_thumb">
                      <em class="news_num">9</em>
                      
	                    <div class="thumb_area">
		                    <img src="../../assets/images/img_ent_03.png" alt="">
	                    </div>
                      <div class="txt_area">
                        <h3 class="news_ttl">
                          고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
                      </div>
                    </a>
                  </li>
                  <li class="news_node col col_6">
                    <a href="" class="news_item type_thumb">
                      <em class="news_num">10</em>
                      
	                    <div class="thumb_area">
		                    <img src="../../assets/images/img_ent_04.png" alt="">
	                    </div>
                      <div class="txt_area">
                        <h3 class="news_ttl">
                          고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
                      </div>
                    </a>
                  </li>
                </ul>
                <ul class="news_list popular_news_list">
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">11</em>
                        <h3 class="news_ttl">골프연습장, 사우나는 기본 이제는 영화관까지…아파트 커뮤니티 시설 진화 한다</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">12</em>
                        <h3 class="news_ttl">골프연습장, 사우나는 기본 이제는 영화관까지…아파트 커뮤니티 시설 진화 한다</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">13</em>
                        <h3 class="news_ttl">러시아·우크라이나 갈등 심해지자 조정받은 美 반도체주…특수가스가 이유</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">14</em>
                        <h3 class="news_ttl">6인 이상 모일 수 있을까…거리두기 조정안 금요일에 나온다</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">15</em>
                        <h3 class="news_ttl">고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">16</em>
                        <h3 class="news_ttl">도처에 좀비 같은 인간…세계 감염시킨 `K공포`</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">17</em>
                        <h3 class="news_ttl">당국 “의료기관서 자비로 PCR 받고 `양성`이면 검사비 환급”</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">18</em>
                        <h3 class="news_ttl">코스피서 무섭게 던진 기관들, 그래도 이 종목만큼은 샀다</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">19</em>
                        <h3 class="news_ttl">“첫날부터 심상찮다”…갤S22 전작보다 4배 더 팔렸다, 역대 최다 전망</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">20</em>
                        <h3 class="news_ttl">김재원 “안철수 단일화 제안?…동메달이 금메달 뺏을 생각”</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">21</em>
                        <h3 class="news_ttl">“車반도체 더 못기다려”…자구책 나선 완성차업체</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">22</em>
                        <h3 class="news_ttl">“가해자가 곧 감옥서 나온대…” 성폭행 피해 여고생 극단선택</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">23</em>
                        <h3 class="news_ttl">“독일보다 2200만원 저렴”…볼보, 전기 SUV ‘C40 리차지’ 韓 출시</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">24</em>
                        <h3 class="news_ttl">대화가 가능할까…푸틴의 `엄청난 거리두기`에 패러디 봇물</h3>
                      </div>
                    </a>
                  </li>
                  <li class="popular_news_node">
                    <a href="" class="news_item type_num">
                      <div class="txt_area">
                        <em class="news_num">25</em>
                        <h3 class="news_ttl">고개 숙인 심석희, 공정위 출석 “사실대로 성실히 임하겠다”</h3>
                      </div>
                    </a>
                  </li>
                </ul>
                <div class="btn_area">
                  <button type="button" class="btn basic w_f h_m drop_sub_news_btn">
                    <span>더보기</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

    </section>
  </main>
  <!-- e: Container -->

<?php include_once '../_inc/_footer_fix.php'; ?>
<?php include_once '../_inc/_footer.php'; ?>
<script src="../../assets/js/common.js"></script>
<?php include_once '../_inc/_foot.php'; ?>