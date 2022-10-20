<?php include_once '../_inc/_head.php'; ?>
  <!-- s: Header -->
  <header id="header">
    <?php include_once '../_inc/header/Stock.php'; ?>
    <?php include_once '../_inc/header/_GNB.php'; ?>
    <?php include_once '../_inc/header/_LNB.php'; ?>
    <?php include_once '../_inc/header/_ANB.php'; ?>
    <?php include_once '../_inc/header/_SearchUi.php'; ?>
    <?php include_once '../_inc/header/SummaryNewsUi.php'; ?>
    <?php include_once '../_inc/header/ViewHeader.php'; ?>
  </header>
  <div class="dim"></div>
  <!-- e: Header -->
  <!-- s: Container -->
  <main id="container">
    <h1 class="page_ttl is_blind">검색 결과</h1>
    <section class="contents search_page">
      <div class="set_inner">
        <div class="page_head">
          <div class="grid grid_custom type_2">
            <div class="col main_col">
              <section class="page_search_sec">
                <form action="" class="search_input_wrap search_form">
                  <div class="input_area">
                    <div class="input_box">
                      <input type="search" title="통합검색" placeholder="검색어를 입력해주세요." value="방역패스">
                      <button type="button" class="btn btn_ic remove_val">
                        <i class="ic ic_input_remove"></i>
                        <span class="is_blind">검색어 지우기</span>
                      </button>
                      <button class="btn btn_ic search_btn">
                        <i class="ic ic_search_l"></i>
                        <span class="is_blind">검색</span>
                      </button>
                    </div>
                  </div>
                </form>
                <div class="label_list_wrap related_keyword_wrap">
                  <div class="list_label"><b>연관 검색어</b></div>
                  <ul class="keyword_list">
                    <li class="keyword_node">
                      <button class="keyword_item">
                        <span>코로나</span>
                      </button>
                    </li>
                    <li class="keyword_node">
                      <button class="keyword_item">
                        <span>매일경제</span>
                      </button>
                    </li>
                    <li class="keyword_node">
                      <button class="keyword_item">
                        <span>쇼트트랙</span>
                      </button>
                    </li>
                    <li class="keyword_node">
                      <button class="keyword_item">
                        <span>베이징올림픽</span>
                      </button>
                    </li>
                  </ul>
                  <button class="btn btn_ic toggle_view">
                    <i class="arw arw_m bottom"></i>
                  </button>
                </div>
              </section>
              <div class="tab_wrap tab_ui">
                <div class="has_scroll_x type_hidden">
                  <ul class="nav tab_nav tab_list" role="tablist">
                    <li class="nav_item tab_node" role="presentation">
                      <a href="#" id="all" class="nav_link tab_item" role="tab" aria-controls="all_cnt"
                         aria-selected="true">전체</a>
                    </li>
                    <li class="nav_item tab_node" role="presentation">
                      <a href="#" id="news" class="nav_link tab_item w_l" role="tab" aria-controls="news_cnt"
                         tabindex="-1">뉴스</a>
                    </li>
                    <li class="nav_item tab_node" role="presentation">
                      <a href="#" id="terminology" class="nav_link tab_item" role="tab" aria-controls="terminology_cnt"
                         tabindex="-1">경제용어</a>
                    </li>
                  </ul>
                </div>
                <nav class="tab_btn_group">
                  <button class="btn btn_ic prev" data-dir="prev"><i class="arw arw_s left"></i><span class="is_blind">이전 탭 그룹</span>
                  </button>
                  <button class="btn btn_ic next" data-dir="next"><i class="arw arw_s right"></i><span class="is_blind">다음 탭 그룹<</span>
                  </button>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="page_body tab_content">
          <div id="all_cnt" class="tab_pane active" role="tabpanel" aria-labelledby="all">
            <div class="grid grid_custom type_2">
              <div class="col main_col">
                <section class="news_sec person_sec">
                  <header class="sec_head">
                    <div class="type_underline">
                      <h2 class="sec_ttl">인물정보 <span class="num">25</span></h2>
                      <button class="btn btn_ic open_filter">
                        <i class="ic ic_filter"></i>
                        <span class="is_blind">리스트 필터 열기</span>
                      </button>
                    </div>

                    <div class="filter_wrap">
                      <div class="dropdown type_down drop_menu_group">
                        <button type="button" aria-controls="search_field" aria-haspopup="listbox" aria-expanded="false" class="nav_link dropdown_toggle drop_menu_btn">
                          <span>검색범위</span>
                          <i class="arw arw_m bottom"></i>
                        </button>
                        <div id="search_field" class="dropdown_menu">
                          <ul role="listbox" class="radio">
                            <li class="dropdown_item" role="option" data-filter-type="검색범위"
                                data-filter-value="제목+본문">
                              <button type="button">제목+본문</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="검색범위"
                                data-filter-value="제목">
                              <button type="button">제목</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="검색범위"
                                data-filter-value="본문">
                              <button type="button">본문</button>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </header>
                  <div class="sec_body">
                    <div class="result_news_wrap person_wrap">
                      <ul class="person_list">
                        <li class="person_node">
                          <a href="" class="person_item">
                            <div class="thumb_area"
                                 style="background-image: url(../../assets/images/img_person_info01.png)">
                            </div>
                            <div class="txt_area">
                              <h3 class="name">정은경 <span class="desc">(金東星 / Kim Dong Sung) <span
                                      class="badge">유료</span></span></h3>
                              <div class="info_group">
                                <dl class="label_list">
                                  <dt>출생</dt>
                                  <dd>1965</dd>
                                </dl>
                                <dl class="label_list">
                                  <dt>소속</dt>
                                  <dd>질병관리청(청장)</dd>
                                </dl>
                                <dl class="label_list">
                                  <dt>학력</dt>
                                  <dd>서울대 예방의학 박사</dd>
                                </dl>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="person_node">
                          <a href="" class="person_item">
                            <div class="thumb_area"
                                 style="background-image: url(../../assets/images/img_person_info01.png)">
                            </div>
                            <div class="txt_area">
                              <h3 class="name">정은경</h3>
                              <div class="info_group">
                                <dl class="label_list">
                                  <dt>출생</dt>
                                  <dd>1965</dd>
                                </dl>
                                <dl class="label_list">
                                  <dt>소속</dt>
                                  <dd>질병관리청(청장)</dd>
                                </dl>
                                <dl class="label_list">
                                  <dt>학력</dt>
                                  <dd>독일슈파이어대학교 행정대학원 박사</dd>
                                </dl>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                      <div class="btn_area">
                        <button type="button" class="btn basic w_f drop_sub_news_btn h_s ic_before">
                          <span>더보기</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col sub_col">
                <div class="ad_wrap side_ad">
                  <img src="../../assets/images/img_side_ad_01.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- e: Container -->


<?php include_once '../_inc/_footer.php'; ?>
  <script src="../../assets/js/common.js"></script>
  <script src="../../assets/js/search.js"></script>
<?php include_once '../_inc/_foot.php'; ?>