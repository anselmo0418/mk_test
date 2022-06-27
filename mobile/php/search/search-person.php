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
    <h1>
      <div class="set_inner"><span class="is_blind">통합검색</span></div>
    </h1>
    <section class="contents list_page search_list search_page">
      <div class="page_head">
        <div class="set_inner">
          <div class="search_result_head">
            <div class="input_area search">
              <div class="input_box">
                <input type="text" value="방역패스">
              </div>
              <div class="btn_box">
                <button type="button" class="search_btn">
                  <i class="ic ic_search"></i>
                  <span class="is_blind">검색</span>
                </button>
              </div>
            </div>
            <div class="related_search">
              <ul>
                <li>연관 검색어</li>
                <li><a href="javascript:;">코로나</a></li>
                <li><a href="javascript:;">백신</a></li>
                <li><a href="javascript:;">Covid19</a></li>
                <li><a href="javascript:;">청소년방역패스</a></li>
              </ul>
              <button class="btn btn_ic toggle_view">
                <i class="arw arw_l bottom"></i>
              </button>
            </div>
          </div>
          <div class="tab_wrap col_x3">
            <ul class="nav tab_nav tab_list" role="tablist">
              <li class="nav_item tab_node" role="presentation">
                <a href="#" id="searchAll" class="nav_link tab_item" role="tab" aria-controls="search_result"
                   aria-selected="true">전체</a>
              </li>
              <li class="nav_item tab_node" role="presentation">
                <a href="#" id="searchNews" class="nav_link tab_item w_l" role="tab"
                   aria-controls="economy_cnt" tabindex="-1">뉴스</a>
              </li>
              <li class="nav_item tab_node" role="presentation">
                <a href="#" id="searchKeyword" class="nav_link tab_item" role="tab"
                   aria-controls="politics_cnt" tabindex="-1">경제용어</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="page_body tab_content">
        <div id="search_result" class="tab_pane active" role="tabpanel" aria-labelledby="searchAll" tabindex="0">
          <div class="mk_body_news_group">

            <section class="news_sec search_result_sec person_info_sec">
              <div class="set_inner">
                <header class="sec_head">
                  <div class="sec_ttl">
                    <p>인물정보 <em class="c_point">25</em></p>
                    <button type="button" class="filter_btn">
                      <i class="ic ic_filter"></i>
                      <span class="is_blind">필터</span>
                    </button>
                  </div>
                  <div class="filter_wrap">
                    <ul class="filter_group">
                      <li class="filter_node">
                        <button type="button" class="filter_item" data-filter="6">검색범위 <i
                              class="ic_check_filter"></i></button>
                      </li>
                    </ul>
                    <div class="filter_dropdown_wrap">
                      <div class="drop_down_wrap" data-filter="6">
                        <ul class="dropdown_list radio">
                          <li class="dropdown_node">
                            <label class="dropdown_item">
                              <input type="radio" name="filterRange" value="제목+본문">
                              <span>제목+본문</span>
                            </label>
                          </li>
                          <li class="dropdown_node">
                            <label class="dropdown_item">
                              <input type="radio" name="filterRange" value="제목만">
                              <span>제목만</span>
                            </label>
                          </li>
                          <li class="dropdown_node">
                            <label class="dropdown_item">
                              <input type="radio" name="filterRange" value="본문만">
                              <span>본문만</span>
                            </label>
                          </li>
                        </ul>
                        <div class="btn_area">
                          <button type="button" class="confirm_filter_btn">확인</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </header>
                <div class="sec_body">
                  <div class="news_wrap person_info_wrap">
                    <ul class="news_list">
                      <li class="news_node">
                        <a href="javascript:;" class="news_item">
                          <div class="thumb_area">
                            <img src="../../assets/images/img_person_info_01.png"
                                 alt="정은경 질병관리청 청장">
                          </div>
                          <div class="txt_area">
                            <h3 class="name">정은경</h3>
                            <dl class="dl_info">
                              <div>
                                <dt>출생</dt>
                                <dd>1965</dd>
                              </div>
                              <div>
                                <dt>소속</dt>
                                <dd>질병관리청(청장)</dd>
                              </div>
                              <div>
                                <dt>학력</dt>
                                <dd>서울대 예방의학 박사</dd>
                              </div>
                            </dl>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="javascript:;" class="news_item">
                          <div class="thumb_area" style="display: none;">
                            <img src="../../assets/images/img_person_info_02.png"
                                 alt="권덕철 보건복지부 장관">
                          </div>
                          <div class="txt_area">
                            <h3 class="name">권덕철</h3>
                            <dl class="dl_info">
                              <div>
                                <dt>출생</dt>
                                <dd>1961</dd>
                              </div>
                              <div>
                                <dt>소속</dt>
                                <dd>보건복지부(장관)</dd>
                              </div>
                              <div>
                                <dt>학력</dt>
                                <dd>독일슈파이어대학교 <br>행정대학원 박사</dd>
                              </div>
                            </dl>
                          </div>
                        </a>
                      </li>
                      <p class="txt_info">정보제공 연합뉴스</p>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- e: Container -->

<?php include_once '../_inc/_footer_fix.php'; ?>
<?php include_once '../_inc/_footer.php'; ?>
  <script src="../../assets/js/common.js"></script>
  <script src="../../assets/js/search.js"></script>
<?php include_once '../_inc/_foot.php'; ?>