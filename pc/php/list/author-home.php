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
    <section class="contents author_page author_home">
      <div class="set_inner">
        <h1 class="page_ttl">매일경제의 기자들</h1>
        <div class="page_head">
	        <div class="tab_wrap tab_ui">
		        <div class="has_scroll_x type_hidden">
	            <ul class="nav tab_nav tab_list" role="tablist">
	              <li class="nav_item tab_node" role="presentation" ><a href="#" id="authorAll" class="nav_link active tab_item w_l" role="tab" aria-controls="authorAll_cnt" aria-selected="true">전체</a></li>
	              <li class="nav_item tab_node" role="presentation" ><a href="#" id="author_mk" class="nav_link tab_item w_l" role="tab" aria-controls="author_mk_cnt" tabindex="-1">매일경제 신문</a></li>
	              <li class="nav_item tab_node" role="presentation" ><a href="#" id="author_com" class="nav_link tab_item w_l" role="tab" aria-controls="author_md_cnt" tabindex="-1">매경닷컴</a></li>
	              <li class="nav_item tab_node" role="presentation" ><a href="#" id="author_economy" class="nav_link tab_item w_l" role="tab" aria-controls="author_etc_cnt" tabindex="-1">매경이코노미</a></li>
	              <li class="nav_item tab_node" role="presentation" ><a href="#" id="city_life" class="nav_link tab_item w_l" role="tab" aria-controls="author_etc_cnt" tabindex="-1">시티라이프</a></li>
	              <li class="nav_item tab_node" role="presentation" ><a href="#" id="luxmen" class="nav_link tab_item w_l" role="tab" aria-controls="author_etc_cnt" tabindex="-1">럭스멘</a></li>
	              <li class="nav_item tab_node" role="presentation" ><a href="#" id="gwf" class="nav_link tab_item w_l" role="tab" aria-controls="author_etc_cnt" tabindex="-1">골프포위민</a></li>
	            </ul>
		        </div>
		        <nav class="tab_btn_group">
			        <button class="btn btn_ic prev" data-dir="prev"><i class="arw arw_s left"></i><span class="is_blind">이전 탭 그룹</span></button>
			        <button class="btn btn_ic next" data-dir="next"><i class="arw arw_s right"></i><span class="is_blind">다음 탭 그룹<</span></button>
		        </nav>
          </div>
        </div>
        <div class="page_body tab_content">
         <div id="authorAll_cnt" class="tab_pane active" role="tabpanel" aria-labelledby="authorAll">
          <div class="set_inner">
            <section class="news_sec author_rank_sec">
              <div class="author_rank_wrap">
                <em>최근 2시간 기준 <b>조회수가 많은 기사</b>입니다.</em>
                <ul class="author_list grid">
                  <li class="author_node col col_4 type_bg">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="author_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                      </div>
                      <ul class="related_news_list">
                        <li>
                          <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반 ‘고도의 스트레스 상태’</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="author_node col col_4 type_bg">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="author_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">김정우 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">jw.kim@gmail.com</a>
                        </div>
                      </div>
                      <ul class="related_news_list">
                        <li>
                          
                          <a href="#" class="related_news_item">“우리만 믿어” 4년후 더 기대되는 태극전사들…</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="author_node col col_4 type_bg">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="author_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">민혜진 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">minmanmum@gmail.com</a>
                        </div>
                      </div>
                      <ul class="related_news_list">
                        <li>
                          <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반 ‘고도의 스트레스 상태’</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </section>
            <section class="news_sec author_sec">
              <div class="option_area">
                <button class="order is_active">업데이트순</button>
                <button class="order">가나다순</button>
              </div>
              <div class="author_wrap">
                <ul class="author_list grid">
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="author_node col col_3">
                    <div class="author_item">
                      <a href="#" class="link"></a>
                      <div class="basic_info_group">
                        <div class="thumb_area profile type_circle">
                        </div>
                        <div class="author_info">
                          <h3 class="name">정민주 기자</h3>
                          <p class="belong">매경닷컴</p>
                          <a href="mailto:" class="mail c_point">everyday1@gmail.com</a>
                        </div>
                        <ul class="related_news_list">
                          <li>
                            
                            <a href="#" class="related_news_item">코로나 장기화에 보건소 대응인력 절반
                              ‘고도의 스트레스 상태’</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="btn_area">
                  <button type="button" class="btn basic w_f drop_sub_news_btn h_s ic_before">
                    <span>더보기</span>
                  </button>
                </div>
              </div>
            </section>
          </div>
        </div>
        </div>
      </div>
    </section>
  </main>
  <!-- e: Container -->

<?php include_once '../_inc/_footer.php'; ?>
<?php include_once '../_inc/_foot.php'; ?>