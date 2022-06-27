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
<main id="container" class="detail_page">
  <h1>
    <div class="set_inner"><span class="is_blind">통합검색</span></div>
  </h1>
  <section class="contents detail_page search_detail search_page">
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
        <section class="news_sec person_info_sec">
          <div class="set_inner">
            <header class="sec_head type_underline no_mb">
              <h2 class="sec_ttl ttl_sub">인물상세정보</h2>
	            <div class="sec_info">
		            <p>최종 업데이트 : 2021.12.11</p>
	            </div>
            </header>
            <div class="sec_body">
              <div class="person_info_wrap">
	              <div class="person_info_group basic_info_group">
	                <div class="thumb_area">
	                  <img src="../../assets/images/img_person_info_01.png"
	                       alt="정은경 질병관리청 청장">
	                </div>
	                <div class="txt_area">
	                  <h3 class="name">정은경 <span class="desc">(金東星 / Kim Dong Sung) <span class="badge">유료</span></span></h3>
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
		              <dl class="dl_info">
			              <div>
				              <dt>2003</dt>
				              <dd>연세대학교 석사과정 수료</dd>
			              </div>
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
	              <div class="btn_area">
		              <button type="button" class="btn basic w_f h_m drop_sub_news_btn ic_before right">
			              <span>프로필 더보기 (유료)</span>
		              </button>
	              </div>
              </div>
	            <div class="info_box_wrap">
		            <ul class="dot_list">
			            <li>인물에 대한 상세정보를 원하시면 <b>프로필 더보기</b> 버튼을 클릭하신 후 연합뉴스 아이디로 로그인 하고 유료로 구입하셔야 합니다.</li>
			            <li>인물 1명당 정보이용료는 <b>1,000원(VAT 포함)</b>이며 동일인물에 대해서는 구매 후 하루동안 재과금 없이 조회가 가능합니다.</li>
			            <li>연합뉴스에서 제공한 인물정보입니다. <br>
				            인물정보의 수정이 필요한 경우에는 해당기관에 문의 부탁드립니다. <button class="btn btn_txt">인물정보 수정요청</button></li>
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