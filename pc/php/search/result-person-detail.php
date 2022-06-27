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
    <section class="contents search_page search_detail">
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
                      <h2 class="sec_ttl ttl_sub">인물상세정보</h2>
                      <div class="sec_info">
                        <p>최종 업데이트 : 2021.12.11</p>
                      </div>
                    </div>
                  </header>
                  <div class="sec_body">
                    <div class="person_wrap person_info_wrap">
                      <div class="person_info_group basic_info_group">
                        <div class="thumb_area">
                          <img src="../../assets/images/img_person_info01.png"
                               alt="정은경 질병관리청 청장">
                        </div>
                        <div class="txt_area">
                          <h3 class="name">정은경 <span class="desc">(金東星 / Kim Dong Sung) <span
                                  class="badge">유료</span></span></h3>
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
                      <div class="person_info_group">
                        <h4 class="ttl">학력사항</h4>
                        <dl class="label_list">
                          <dt>2003</dt>
                          <dd>연세대학교 석사과정 수료</dd>
                        </dl>
                      </div>
                      <div class="person_info_group">
                        <h4 class="ttl">경력사항</h4>
                        <ul>
                          <li>[現] 데일리서울 편집국장 겸 발행인</li>
                          <li>[前] 법률경제신문 편집국장</li>
                          <li>[前] 월요신문 편집국장</li>
                          <li>[前] 월요시사신문 편집국ㆍ전략기획마케팅부 총괄 부사장</li>
                          <li>[前] 뉴스엔뷰 대표이사</li>
                        </ul>
                      </div>
                      <div class="btn_area taC">
                        <button type="button" class="btn strong w_l h_l">
                          <span>프로필 더보기 (유료)</span>
                        </button>
                      </div>
                    </div>
                    <div class="info_box_wrap">
                      <ul class="dot_list">
                        <li>인물에 대한 상세정보를 원하시면 <b>프로필 더보기</b> 버튼을 클릭하신 후 연합뉴스 아이디로 로그인 하고 유료로 구입하셔야 합니다.</li>
                        <li>인물 1명당 정보이용료는 <b>1,000원(VAT 포함)</b>이며 동일인물에 대해서는 구매 후 하루동안 재과금 없이 조회가 가능합니다.</li>
                        <li>연합뉴스에서 제공한 인물정보입니다. <br>
                          인물정보의 수정이 필요한 경우에는 해당기관에 문의 부탁드립니다.
                          <button class="btn btn_txt">인물정보 수정요청</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col sub_col">
                <section class="news_sec person_sec">
                  <header class="sec_head type_underline">
                    <h2 class="sec_ttl">인물정보</h2>
                    <a href="#" class="btn btn_ic btn_more open_more">
                      <i class="arw arw_line_l">더보기</i>
                    </a>
                  </header>
                  <div class="sec_body">
                    <div class="person_wrap">
                      <ul class="person_list">
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
                                  <dd>서울대 예방의학 박사</dd>
                                </dl>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="person_node">
                          <a href="" class="person_item">
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
                      <p class="list_info_txt taR">정보제공 연합뉴스</p>
                    </div>
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


<?php include_once '../_inc/_footer.php'; ?>
  <script src="../../assets/js/common.js"></script>
  <script src="../../assets/js/search.js"></script>
<?php include_once '../_inc/_foot.php'; ?>