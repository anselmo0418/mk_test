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
                   tabindex="-1">전체</a>
              </li>
              <li class="nav_item tab_node" role="presentation">
                <a href="#" id="searchNews" class="nav_link tab_item w_l" role="tab"
                   aria-controls="economy_cnt" tabindex="-1">뉴스</a>
              </li>
              <li class="nav_item tab_node" role="presentation">
                <a href="#" id="searchKeyword" class="nav_link tab_item" role="tab"
                   aria-controls="politics_cnt"
                   aria-selected="true">경제용어</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="page_body tab_content">
        <div id="search_result" class="tab_pane active" role="tabpanel" aria-labelledby="searchAll">
          <div class="mk_body_news_group">
            <section class="news_sec search_result_sec economic_term_sec">
              <div class="set_inner">
                <header class="sec_head">
                  <div class="sec_ttl">
                    <p>경제용어 <em class="c_point">25</em></p>
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
                  <div class="news_wrap economic_term_wrap">
                    <ul class="news_list">
                      <li class="news_node">
                        <a href="javascript:;" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">팬데믹(세계적유행)</h3>
                            <p class="news_desc">전 세계적으로 전염병이 확산된 상태를 의미하는 말로, 세계보건기구(WHO)의 전염병
                              경보 단계 중 최고 위험 등급에
                              해당한다.</p>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="javascript:;" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">코호트격리</h3>
                            <p class="news_desc">코호트격리는 특정 질병 발병 환자와 의료진 모두를
                              '동일 집단'(코호트)으로 묶어 통째로 전원 격리해
                              확산 위험을 줄이는 조치를 말한다..</p>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="javascript:;" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">국제금환본위제도</h3>
                            <p class="news_desc">감소와 같은 자동조절 작용이 약화될 소지를 안고 있는 것이다. 이와 같은 국제수지 자동조절기능의 약화와 통화팽창…</p>
                          </div>
                        </a>
                      </li>
                      <li class="news_node">
                        <a href="javascript:;" class="news_item">
                          <div class="txt_area">
                            <h3 class="news_ttl">SDDS</h3>
                            <p class="news_desc">환율과 대외금융자산·부채잔액표도 현재 통계 편재를 준비하고 있으며 추후 통계 편재가 완료되는 대로 SDDS를 준...</p>
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