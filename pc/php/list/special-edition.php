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
    <section class="contents se_page se_home">
      <div class="set_inner">
        <h1 class="page_ttl">Special Edition</h1>
        <div class="page_head">
	        <div class="tab_wrap tab_ui">
		        <div class="has_scroll_x type_hidden">
              <ul class="nav tab_nav tab_list" role="tablist">
              <li class="nav_item tab_node" role="presentation" >
	              <a href="#" id="seAll" class="nav_link tab_item" role="tab" aria-controls="seAll_cnt" aria-selected="true">전체</a>
              </li>
              <li class="nav_item tab_node" role="presentation" >
	              <a href="#" id="se_mnr" class="nav_link tab_item w_l" role="tab" aria-controls="se_mnr_cnt" tabindex="-1">Money &amp; Riches</a>
              </li>
              <li class="nav_item tab_node" role="presentation" >
	              <a href="#" id="se_realestate" class="nav_link tab_item" role="tab" aria-controls="se_realestate_cnt" tabindex="-1">부동산 특집</a>
              </li>
              <li class="nav_item tab_node" role="presentation" >
	              <a href="#" id="se_tourplus" class="nav_link tab_item" role="tab" aria-controls="se_tourplus_cnt" tabindex="-1">여행+</a>
              </li>
              <li class="nav_item tab_node" role="presentation" >
	              <a href="#" id="se_bizStory" class="nav_link tab_item w_l" role="tab" aria-controls="se_bizStory_cnt" tabindex="-1">MK BUSINESS STORY</a>
              </li>
              <li class="nav_item tab_node" role="presentation">
	              <a href="#" id="se_car" class="nav_link tab_item" role="tab" aria-controls="se_car_cnt" tabindex="-1">THE CAR</a>
              </li>
              <li class="nav_item tab_node" role="presentation">
	              <a href="#" id="se_health" class="nav_link tab_item" role="tab" aria-controls="se_health_cnt" tabindex="-1">헬스저널</a>
              </li>
              <li class="nav_item tab_node" role="presentation">
	              <a href="#" id="se_tech" class="nav_link tab_item w_l" role="tab" aria-controls="se_tech_cnt" tabindex="-1">MK TECH REVIEW</a>
              </li>
              <li class="nav_item tab_node" role="presentation">
	              <a href="#" id="se_liveSmall" class="nav_link tab_item" role="tab" aria-controls="se_liveSmall_cnt" tabindex="-1">LIVE 중소기업</a>
              </li>
              <li class="nav_item tab_node" role="presentation">
	              <a href="#" id="se_teen" class="nav_link tab_item" role="tab" aria-controls="se_teen_cnt" tabindex="-1">틴매일경제</a>
              </li>
              <li class="nav_item tab_node" role="presentation">
	              <a href="#" id="se_consumer" class="nav_link tab_item w_l" role="tab" aria-controls="se_consumer_cnt" tabindex="-1">CONSUMER JOURNAL</a>
              </li>
              <li class="nav_item tab_node" role="presentation">
	              <a href="#" id="se_citylife" class="nav_link tab_item" role="tab" aria-controls="se_citylife_cnt" tabindex="-1">시티라이프</a>
              </li>
              <li class="nav_item tab_node" role="presentation">
	              <a href="#" id="se_jobis" class="nav_link tab_item" role="tab" aria-controls="se_jobis_cnt" tabindex="-1">잡만경</a>
              </li>
            </ul>
		        </div>
		        <nav class="tab_btn_group">
			        <button class="btn btn_ic prev" data-dir="prev"><i class="arw arw_s left"></i><span class="is_blind">이전 탭 그룹</span></button>
			        <button class="btn btn_ic next" data-dir="next"><i class="arw arw_s right"></i><span class="is_blind">다음 탭 그룹<</span></button>
		        </nav>
          </div>
        </div>
      </div>
      <div class="page_body tab_content">
	      <div id="seAll_cnt" class="tab_pane active" role="tabpanel" aria-labelledby="seAll">
          <div class="mk_head_news_group">
            <div class="set_inner">
              <section class="news_sec overview_sec">
                <div class="overview_news_wrap type_list">
                  <ul class="news_list grid grid_custom type_3">
                    <li class="news_node col main_col type_bg">
                      <a href="#" class="news_item">
                        <div class="thumb_area">
                          <img src="../../assets/images/img_special_edt01.png" alt="">
                        </div>
                        <div class="txt_area">
                          <p class="cate">Money & Riches</p>
                          <h3 class="news_ttl">대선前 2만가구 분양…
                            청약시장 ‘꽃샘추위’ 녹일까</h3>
                        </div>
                      </a>
                    </li>
                    <li class="news_node col sub_col right">
                      <a href="#" class="news_item">
                        <!--                        <div class="thumb_area">-->
                        <!--                          <img src="../../assets/images/img_special_list01.png" alt="">-->
                        <!--                        </div>-->
                        <div class="txt_area">
                          <p class="cate">MK BUSINESS STORY</p>
                          <h3 class="news_ttl">“2025년 세계 첫 탄소중립 수도” 코펜하겐의 순환경제
                            3色전략</h3>
                        </div>
                      </a>
                    </li>
                    <li class="news_node col sub_col">
                      <a href="#" class="news_item">
                        <div class="thumb_area">
                          <img src="../../assets/images/img_head_travel_01.png" alt="">
                        </div>
                        <div class="txt_area">
                          <p class="cate">여행+</p>
                          <h3 class="news_ttl">제주서 만나는 이탈리아…
                            해외여행 안가도 되겠네</h3>
                        </div>
                      </a>
                    </li>
                    <li class="news_node col sub_col">
                      <a href="#" class="news_item">
                        <!--                        <div class="thumb_area">-->
                        <!--                          <img src="../../assets/images/img_special_list04.png" alt="">-->
                        <!--                        </div>-->
                        <div class="txt_area">
                          <p class="cate">THE CAR</p>
                          <h3 class="news_ttl">야첵 올자크 필립모리스 글로벌 CEO, “한국도 일반 담배 판매를 중단할 수 있다”</h3>
                        </div>
                      </a>
                    </li>
                    <li class="news_node col sub_col">
                      <a href="#" class="news_item">
                        <div class="thumb_area">
                          <img src="../../assets/images/img_health_01.png" alt="">
                        </div>
                        <div class="txt_area">
                          <p class="cate">헬스저널</p>
                          <h3 class="news_ttl">CJ웰케어 리턴업 관절케어 스페셜 MSM, 관절·뼈건강에 좋은…</h3>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
          <div class="mk_body_news_group">
            <div class="set_inner">
              <div class="news_sec_group grid">
                <section class="news_sec money_sec col col_12">
                  <header class="sec_head type_underline has_more_btn">
                    <h2 class="sec_ttl">Money & Riches</h2>
                    <a href="#" class="btn btn_ic btn_more open_more"><i class="arw arw_line_l">더보기</i></a>
                  </header>
                  <div class="sec_body">
                    <ul class="news_list grid">
                      <li class="news_node col col_3">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_money_01.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">
                              株머니 매니저의 HOT종목
                            </h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node col col_3">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_money_02.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">
                              ‘AI로 질병 진단’ 노을 15~16일 IPO 수요예측
                            </h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node col col_3">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_money_03.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">
                              엘페이서 결제하고 엘포인트 차곡차곡
                            </h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node col col_3">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_money_01.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">
                              분산 투자도 부족하다…초분산으로 내돈 사수
                            </h3>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </section>
                <section class="news_sec mk_business_sec col col_12">
                  <header class="sec_head type_underline has_more_btn">
                    <h2 class="sec_ttl">MK BUSINESS STORY</h2>
                    <a href="#" class="btn btn_ic btn_more open_more"><i class="arw arw_line_l">더보기</i></a>
                  </header>
                  <div class="sec_body">
                    <ul class="news_list grid">
                      <li class="news_node col col_3">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_mk_business_01.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">
                              株머니 매니저의 HOT종목
                            </h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node col col_3">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_mk_business_02.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">
                              ‘AI로 질병 진단’ 노을 15~16일 IPO 수요예측
                            </h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node col col_3">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_mk_business_03.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">
                              엘페이서 결제하고 엘포인트 차곡차곡
                            </h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node col col_3">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_mk_business_04.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">
                              분산 투자도 부족하다…초분산으로 내돈 사수
                            </h3>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </section>
                <section class="news_sec travel_sec col col_12">
                  <header class="sec_head type_underline has_more_btn">
                    <h2 class="sec_ttl">여행+</h2>
                    <a href="#" class="btn btn_ic btn_more open_more"><i class="arw arw_line_l">더보기</i></a>
                  </header>
                  <div class="sec_body">
                    <ul class="news_list grid">
                      <li class="news_node col col_3">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_travel_01.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">
                              株머니 매니저의 HOT종목
                            </h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node col col_3">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_travel_02.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">
                              ‘AI로 질병 진단’ 노을 15~16일 IPO 수요예측
                            </h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node col col_3">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_travel_03.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">
                              엘페이서 결제하고 엘포인트 차곡차곡
                            </h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node col col_3">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_travel_03.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">
                              분산 투자도 부족하다…초분산으로 내돈 사수
                            </h3>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </section>
                <section class="news_sec car_sec col col_3">
                  <header class="sec_head  type_underline type_underline1 has_more_btn">
                    <h2 class="sec_ttl">THE CAR</h2>
                    <a href="#" class="btn btn_ic btn_more open_more"><i class="arw arw_line_l">더보기</i></a>
                  </header>
                  <div class="sec_body">
                    <ul class="news_list">
                      <li class="news_node">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_car_01.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </section>
                <section class="news_sec health_sec col col_3">
                  <header class="sec_head type_underline type_underline1 has_more_btn">
                    <h2 class="sec_ttl">헬스저널</h2>
                    <a href="#" class="btn btn_ic btn_more open_more"><i class="arw arw_line_l">더보기</i></a>
                  </header>
                  <div class="sec_body">
                    <ul class="news_list">
                      <li class="news_node">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_health_02.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </section>
                <section class="news_sec tech_review_sec col col_3">
                  <header class="sec_head type_underline type_underline1 has_more_btn">
                    <h2 class="sec_ttl">MK TECH REVIEW</h2>
                    <a href="#" class="btn btn_ic btn_more open_more"><i class="arw arw_line_l">더보기</i></a>
                  </header>
                  <div class="sec_body">
                    <ul class="news_list">
                      <li class="news_node">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_travel_01.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </section>
                <section class="news_sec consumer_sec col col_3">
                  <header class="sec_head type_underline type_underline1 has_more_btn">
                    <h2 class="sec_ttl">CONSUMER JOURNAL</h2>
                    <a href="#" class="btn btn_ic btn_more open_more"><i class="arw arw_line_l">더보기</i></a>
                  </header>
                  <div class="sec_body">
                    <ul class="news_list">
                      <li class="news_node">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_travel_01.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </section>
                <section class="news_sec estate_sec col col_3">
                  <header class="sec_head type_underline type_underline1 has_more_btn">
                    <h2 class="sec_ttl">부동산 특집</h2>
                    <a href="#" class="btn btn_ic btn_more open_more"><i class="arw arw_line_l">더보기</i></a>
                  </header>
                  <div class="sec_body">
                    <ul class="news_list">
                      <li class="news_node">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_travel_01.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </section>
                <section class="news_sec company_sec col col_3">
                  <header class="sec_head type_underline type_underline1 has_more_btn">
                    <h2 class="sec_ttl">Live 중소기업</h2>
                    <a href="#" class="btn btn_ic btn_more open_more"><i class="arw arw_line_l">더보기</i></a>
                  </header>
                  <div class="sec_body">
                    <ul class="news_list">
                      <li class="news_node">
                        <a href="" class="news_item type_thumb">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_travel_01.png" alt="">
                          </div>
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">볼보 첫 전기SUV, 그 어려운 걸 해내네…민첩하면서 부드러워</h3>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- e: Container -->

  <!-- s: Footer -->
  <?php include_once '../_inc/_footer.php'; ?>
  <script src="../../assets/js/common.js"></script>
  <?php include_once '../_inc/_foot.php'; ?>
  <!-- e: Footer -->