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
                </div>
              </section>
              <div class="tab_wrap tab_ui">
                <div class="has_scroll_x type_hidden">
                  <ul class="nav tab_nav tab_list" role="tablist">
                    <li class="nav_item tab_node" role="presentation">
                      <a href="#" id="all" class="nav_link tab_item" role="tab" aria-controls="all_cnt"
                         tabindex="-1">전체</a>
                    </li>
                    <li class="nav_item tab_node" role="presentation">
                      <a href="#" id="news" class="nav_link tab_item w_l" role="tab" aria-controls="news_cnt"
                         tabindex="-1">뉴스</a>
                    </li>
                    <li class="nav_item tab_node" role="presentation">
                      <a href="#" id="terminology" class="nav_link tab_item" role="tab" aria-controls="terminology_cnt"
                         aria-selected="true">경제용어</a>
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
          <div id="terminology_cnt" class="tab_pane active" role="tabpanel" aria-labelledby="terminology">
            <div class="grid grid_custom type_2">
              <div class="col main_col">
                <section class="news_sec economy_terms_sec">
                  <header class="sec_head">
                    <div class="type_underline">
                      <h2 class="sec_ttl">뉴스 <span class="num">825</span></h2>
                      <button class="btn btn_ic open_filter">
                        <i class="ic ic_filter"></i>
                        <span class="is_blind">리스트 필터 열기</span>
                      </button>
                    </div>

                    <div class="filter_wrap">
                      <div class="dropdown type_down drop_menu_group ">
                        <button type="button" aria-controls="search_sort" aria-haspopup="listbox" aria-expanded="false" class="nav_link dropdown_toggle drop_menu_btn">
                          <span>정렬순서</span>
                          <i class="arw arw_m bottom"></i>
                        </button>
                        <div id="search_sort" class="dropdown_menu">
                          <ul role="listbox" class="radio">
                            <li class="dropdown_item" role="option" data-filter-type="정렬순서"
                                data-filter-value="최신 기사">
                              <button type="button">최신 기사</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="정렬순서"
                                data-filter-value="오래된 기사">
                              <button type="button">오래된 기사</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="정렬순서"
                                data-filter-value="정확도">
                              <button type="button">정확도</button>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="dropdown type_down drop_menu_group type_datepicker">
                        <button type="button" aria-controls="search_range" aria-haspopup="listbox" aria-expanded="false" class="nav_link dropdown_toggle drop_menu_btn">
                          <span>기간</span>
                          <i class="arw arw_m bottom"></i>
                        </button>
                        <div id="search_range" class="dropdown_menu">
                          <ul role="listbox" class="radio">
                            <li class="dropdown_item active" role="option" data-filter-type="기간"
                                data-filter-value="전체">
                              <button type="button">전체</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="기간"
                                data-filter-value="1일">
                              <button type="button">1일</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="기간"
                                data-filter-value="1주">
                              <button type="button">1주</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="기간"
                                data-filter-value="1개월">
                              <button type="button">1개월</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="기간"
                                data-filter-value="1년">
                              <button type="button">1년</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="기간"
                                data-filter-value="직접입력">
                              <button type="button open_datepicker">직접입력</button>
                            </li>
                          </ul>
                          <div class="datepicker_frame">
                            <input type="hidden" id="start_date">
                            <input type="hidden" id="end_date">
                            <div class="datepicker_filter"></div>
                          </div>
                        </div>
                      </div>
                      <div class="dropdown type_down drop_menu_group">
                        <button type="button" aria-controls="search_range" aria-haspopup="listbox" aria-expanded="false" class="nav_link dropdown_toggle drop_menu_btn">
                          <span>카테고리</span>
                          <i class="arw arw_m bottom"></i>
                        </button>
                        <div id="search_cate" class="dropdown_menu">
                          <ul role="listbox" class="checkbox">
                            <li class="dropdown_item chk_all" role="option" data-filter-type="카테고리"
                                data-filter-value="전체">
                              <button>전체</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="카테고리"
                                data-filter-value="경제">
                              <button>경제</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="카테고리"
                                data-filter-value="기업">
                              <button>기업</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="카테고리"
                                data-filter-value="사회">
                              <button>사회</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="카테고리"
                                data-filter-value="국제">
                              <button>국제</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="카테고리"
                                data-filter-value="부동산">
                              <button>부동산</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="카테고리"
                                data-filter-value="증권">
                              <button>증권</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="카테고리"
                                data-filter-value="정치">
                              <button>정치</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="카테고리"
                                data-filter-value="IT·과학">
                              <button>IT&middot;과학</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="카테고리"
                                data-filter-value="문화">
                              <button>문화</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="카테고리"
                                data-filter-value="연예">
                              <button>연예</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="카테고리"
                                data-filter-value="스포츠">
                              <button>스포츠</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="카테고리"
                                data-filter-value="인기뉴스">
                              <button>인기뉴스</button>
                            </li>
                          </ul>
                          <div class="btn_area">
                            <button class="btn w_f h_l">확인</button>
                          </div>
                        </div>
                      </div>
                      <div class="dropdown type_down drop_menu_group">
                        <button type="button" aria-controls="search_media" aria-haspopup="listbox" aria-expanded="false" class="nav_link dropdown_toggle drop_menu_btn">
                          <span>매체</span>
                          <i class="arw arw_m bottom"></i>
                        </button>
                        <div id="search_media" class="dropdown_menu">
                          <ul role="listbox" class="radio">
                            <li class="dropdown_item" role="option" data-filter-type="매체"
                                data-filter-value="전체">
                              <button type="button">전체</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="매체"
                                data-filter-value="매일경제">
                              <button type="button">매일경제</button>
                            </li>
                            <li class="dropdown_item" role="option" data-filter-type="매체"
                                data-filter-value="매경닷컴">
                              <button type="button">매경닷컴</button>
                            </li>
                          </ul>
                        </div>
                      </div>
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
                    <div class="result_news_wrap">
                      <ul class="news_list result_news_list latest_news_list">
                        <li class="news_node">
                          <a href="#" class="news_item">
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_02.png" alt="">
                            </div>
                            <div class="txt_area">
                              <span class="cate">사회</span>
                              <h3 class="news_ttl">[속보] 당국 “임신부는 <em class="keyword">방역패스</em> 적용 예외자로 인정하기 어려울 듯” </h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이 140억달러(16조7678억원)로 역대 최고치를 경신한 것으로
                                나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">가장 댓글이 활발한 기사</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12<br>2022</span>
                            </div>
                          </a>
                        </li>
                        <li class="news_node">
                          <a href="#" class="news_item">
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_02.png" alt="">
                            </div>
                            <div class="txt_area">
                              <span class="cate">사회</span>
                              <h3 class="news_ttl">[속보] 당국 “임신부는 <em class="keyword">방역패스</em> 적용 예외자로 인정하기 어려울 듯” </h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이 140억달러(16조7678억원)로 역대 최고치를 경신한 것으로
                                나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">가장 댓글이 활발한 기사</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12<br>2022</span>
                            </div>
                          </a>
                        </li>
                        <li class="news_node">
                          <a href="#" class="news_item">
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_02.png" alt="">
                            </div>
                            <div class="txt_area">
                              <span class="cate">사회</span>
                              <h3 class="news_ttl">[속보] 당국 “임신부는 <em class="keyword">방역패스</em> 적용 예외자로 인정하기 어려울 듯” </h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이 140억달러(16조7678억원)로 역대 최고치를 경신한 것으로
                                나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">가장 댓글이 활발한 기사</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12<br>2022</span>
                            </div>
                          </a>
                        </li>
                        <li class="news_node">
                          <a href="#" class="news_item">
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_02.png" alt="">
                            </div>
                            <div class="txt_area">
                              <span class="cate">사회</span>
                              <h3 class="news_ttl">[속보] 당국 “임신부는 <em class="keyword">방역패스</em> 적용 예외자로 인정하기 어려울 듯” </h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이 140억달러(16조7678억원)로 역대 최고치를 경신한 것으로
                                나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">가장 댓글이 활발한 기사</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12<br>2022</span>
                            </div>
                          </a>
                        </li>
                        <li class="news_node">
                          <a href="#" class="news_item">
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_02.png" alt="">
                            </div>
                            <div class="txt_area">
                              <span class="cate">사회</span>
                              <h3 class="news_ttl">[속보] 당국 “임신부는 <em class="keyword">방역패스</em> 적용 예외자로 인정하기 어려울 듯” </h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이 140억달러(16조7678억원)로 역대 최고치를 경신한 것으로
                                나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">가장 댓글이 활발한 기사</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12<br>2022</span>
                            </div>
                          </a>
                        </li>

                        <li class="news_node">
                          <a href="#" class="news_item">
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_02.png" alt="">
                            </div>
                            <div class="txt_area">
                              <span class="cate">사회</span>
                              <h3 class="news_ttl">[속보] 당국 “임신부는 <em class="keyword">방역패스</em> 적용 예외자로 인정하기 어려울 듯” </h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이 140억달러(16조7678억원)로 역대 최고치를 경신한 것으로
                                나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">가장 댓글이 활발한 기사</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12<br>2022</span>
                            </div>
                          </a>
                        </li>
                        <li class="news_node">
                          <a href="#" class="news_item">
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_02.png" alt="">
                            </div>
                            <div class="txt_area">
                              <span class="cate">사회</span>
                              <h3 class="news_ttl">[속보] 당국 “임신부는 <em class="keyword">방역패스</em> 적용 예외자로 인정하기 어려울 듯” </h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이 140억달러(16조7678억원)로 역대 최고치를 경신한 것으로
                                나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">가장 댓글이 활발한 기사</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12<br>2022</span>
                            </div>
                          </a>
                        </li>
                        <li class="news_node">
                          <a href="#" class="news_item">
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_02.png" alt="">
                            </div>
                            <div class="txt_area">
                              <span class="cate">사회</span>
                              <h3 class="news_ttl">[속보] 당국 “임신부는 <em class="keyword">방역패스</em> 적용 예외자로 인정하기 어려울 듯” </h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이 140억달러(16조7678억원)로 역대 최고치를 경신한 것으로
                                나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">가장 댓글이 활발한 기사</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12<br>2022</span>
                            </div>
                          </a>
                        </li>
                        <li class="news_node">
                          <a href="#" class="news_item">
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_02.png" alt="">
                            </div>
                            <div class="txt_area">
                              <span class="cate">사회</span>
                              <h3 class="news_ttl">[속보] 당국 “임신부는 <em class="keyword">방역패스</em> 적용 예외자로 인정하기 어려울 듯” </h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이 140억달러(16조7678억원)로 역대 최고치를 경신한 것으로
                                나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">가장 댓글이 활발한 기사</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12<br>2022</span>
                            </div>
                          </a>
                        </li>
                        <li class="news_node">
                          <a href="#" class="news_item">
                            <div class="thumb_area" style="display: none;">
                              <img src="../../assets/images/img_highlight_02.png" alt="">
                            </div>
                            <div class="txt_area">
                              <span class="cate">사회</span>
                              <h3 class="news_ttl">[속보] 당국 “임신부는 <em class="keyword">방역패스</em> 적용 예외자로 인정하기 어려울 듯” </h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이 140억달러(16조7678억원)로 역대 최고치를 경신한 것으로
                                나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">가장 댓글이 활발한 기사</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12<br>2022</span>
                            </div>
                          </a>
                        </li>
                        <li class="news_node">
                          <a href="#" class="news_item">
                            <div class="thumb_area">
                              <img src="../../assets/images/img_highlight_02.png" alt="">
                            </div>
                            <div class="txt_area">
                              <span class="cate">사회</span>
                              <h3 class="news_ttl">[속보] 당국 “임신부는 <em class="keyword">방역패스</em> 적용 예외자로 인정하기 어려울 듯” </h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이 140억달러(16조7678억원)로 역대 최고치를 경신한 것으로
                                나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">가장 댓글이 활발한 기사</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12<br>2022</span>
                            </div>
                          </a>
                        </li>
                        <li class="news_node">
                          <a href="#" class="news_item">
                            <div class="thumb_area" style="display: none;">
                              <img src="../../assets/images/img_highlight_02.png" alt="">
                            </div>
                            <div class="txt_area">
                              <span class="cate">사회</span>
                              <h3 class="news_ttl">[속보] 당국 “임신부는 <em class="keyword">방역패스</em> 적용 예외자로 인정하기 어려울 듯” </h3>
                              <p class="news_desc">지난해 전세계 범죄에 사용된 가상자산 거래 금액이 140억달러(16조7678억원)로 역대 최고치를 경신한 것으로
                                나타났다.</p>
                              <div class="info_group">
                                <p class="time_info">3분전</p>
                                <p class="like_info">가장 댓글이 활발한 기사</p>
                              </div>
                            </div>
                            <div class="time_area">
                              <span>03.12<br>2022</span>
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