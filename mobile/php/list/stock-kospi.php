<?php include_once '../_inc/_head.php'; ?>

<!-- s: Header -->
<header id="header">
  <?php include_once '../_inc/header/Stock.php'; ?>
  <?php include_once '../_inc/header/_GNB.php'; ?>
  <?php include_once '../_inc/header/_ANB.php'; ?>
  <?php include_once '../_inc/header/_SNB_stock.php'; ?>
</header>
<!-- e: Header -->
<?php include_once '../_inc/header/_SummaryNewsUi.php'; ?>

  <!-- s: Container -->
  <main id="container">
    <h1 class="page_ttl is_blind">증권</h1>
    <section class="contents list_page stock_page kospi_page">
      <div class="mk_head_news_group">
        <section class="news_sec">
          <div class="set_inner">
	          <div class="overview_wrap stock_wrap">
		          <div class="stock_head">
			          <div class="ttl_area">
				          <h2 class="ttl">
					          <b class="name">코스피</b>
					          <span>KOSPI</span>
				          </h2>
				          <span class="time">03/16 11:26</span>
			          </div>
                <!--Dev: 상승일 경우 is_plus 클래스 추가 / 하락일 경우 is_minus 클래스 추가-->
			          <div class="stock_area is_plus">
				          <p class="current_stock"><b>2,641.42</b></p>
				          <ul class="stock_info_group">
					          <li class="gap_info" role="text">
						          <span class="stock has_arw">19.89</span>
						          <span class="is_blind">상승</span>
					          </li>
					          <li class="gap_info" role="text">
						          <span class="stock">+ 1.67%</span>
						          <span class="is_blind">상승</span>
					          </li>
				          </ul>
			          </div>
			          <dl class="label_list">
				          <dt>
					          <b class="label">투자자별</b>
					          <span class="unit">단위 : 억원</span>
				          </dt>
				          <dd>
					          <div class="type_group">
						          <div class="type_item">
							          <p class="name">개인</p>
							          <p class="gap_info is_plus" role="text">
								          <b class="stock">613</b>
								          <span class="is_blind">상승</span>
							          </p>
						          </div>
						          <div class="type_item">
							          <p class="name">기관</p>
							          <p class="gap_info is_plus" role="text">
								          <b class="stock">637</b>
								          <span class="is_blind">상승</span>
							          </p>
						          </div>
						          <div class="type_item">
							          <p class="name">외국인</p>
							          <p class="gap_info is_minus" role="text">
								          <b class="stock">- 1,255</b>
								          <span class="is_blind">하락</span>
							          </p>
						          </div>
					          </div>
				          </dd>
			          </dl>
		          </div>
		          <div class="stock_body">
			          <div class="tab_wrap stock_chart_tab_wrap col_x3">
				          <ul class="nav tab_nav tab_list coin_list" role="tablist">
					          <li class="nav_item tab_node" role="presentation">
						          <a href="#" id="d1" class="nav_link tab_item" role="tab" aria-controls="d1_cnt" aria-selected="true">
							          <strong class="name coin_tit">1일</strong>
						          </a>
					          </li>
					          <li class="nav_item tab_node" role="presentation">
						          <a href="#" id="m5" class="nav_link tab_item" role="tab" aria-controls="m5_cnt" aria-selected="false" tabindex="-1">
							          <strong class="name coin_tit">5개월</strong>
						          </a>
					          </li>
					          <li class="nav_item tab_node" role="presentation">
						          <a href="#" id="y1" class="nav_link tab_item" role="tab" aria-controls="y1_cnt" aria-selected="false" tabindex="-1">
							          <strong class="name coin_tit">1년</strong>
						          </a>
					          </li>
				          </ul>
			          </div>
                <div class="tab_cnt_wrap stock_chart_wrap tab_content">
                  <div id="d1_cnt" class="tab_pane active" role="tabpanel">
                    <img src="../../assets/images/@img_stock_chart.png" alt="">
                  </div>
                </div>
			          <div class="detail_stock_wrap">
				          <div class="label_list_group">
					          <dl class="label_list">
						          <dt>고가</dt>
						          <dd class="gap_info is_plus" role="text">
							          <b class="stock">2,641.97</b>
							          <span class="is_blind">상승</span>
						          </dd>
					          </dl>
					          <dl class="label_list">
						          <dt>거래량</dt>
						          <dd role="text">
							          <b class="stock">341,882</b>
							          <small class="unit">천주</small>
						          </dd>
					          </dl>
					          <dl class="label_list">
						          <dt>52주 최고</dt>
						          <dd class="gap_info is_plus" role="text">
							          <b class="stock ">331,608</b>
							          <span class="is_blind">상승</span>
						          </dd>
					          </dl>
				          </div>
				          <div class="label_list_group">
					          <dl class="label_list">
						          <dt>저가</dt>
						          <dd class="gap_info is_minus"  role="text">
							          <b class="stock ">2,630.97</b>
							          <span class="is_blind">하락</span>
						          </dd>
					          </dl>
					          <dl class="label_list">
						          <dt>거래대금</dt>
						          <dd role="text">
							          <b class="stock">341,882</b>
							          <small class="unit">억원</small>
						          </dd>
					          </dl>
					          <dl class="label_list">
						          <dt>52주 최저</dt>
						          <dd class="gap_info is_minus"   role="text">
							          <b class="stock">259,153</b>
							          <span class="is_blind">하락</span>
						          </dd>
					          </dl>
				          </div>
			          </div>
		          </div>
	          </div>
          </div>
        </section>
      </div>
      <div class="mk_body_news_group">
        <section class="news_sec">
	        <div class="set_inner">
		        <header class="sec_head type_underline no_mb">
			        <h2 class="sec_ttl ttl_sub">일별 시세</h2>
		        </header>
		        <div class="sec_body">
			        <div class="tbl_wrap stock_tbl">
				        <div class="tbl_area">
					        <table class="table" summary="코스피 일별시세를 보여줍니다.">
						        <caption class="is_blind">코스피 일별시세</caption>
						        <thead>
						        <tr>
							        <th scope="col" class="taL">날짜</th>
							        <th scope="col" class="taR">종가</th>
							        <th scope="col" class="taR">전일비</th>
							        <th scope="col" class="taR">등락률</th>
						        </tr>
						        </thead>
						        <tbody>
						        <tr>
							        <td scope="row" class="taL">03/14</td>
							        <td class="taR">2,621.53</td>
							        <td class="stock is_plus has_arw taR">24.12</td>
							        <td class="stock is_plus taR">0.91%</td>
						        </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_minus has_arw taR">24.12</td>
                      <td class="stock is_minus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_minus has_arw taR">24.12</td>
                      <td class="stock is_minus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_minus has_arw taR">24.12</td>
                      <td class="stock is_minus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_minus has_arw taR">24.12</td>
                      <td class="stock is_minus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_minus has_arw taR">24.12</td>
                      <td class="stock is_minus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_minus has_arw taR">24.12</td>
                      <td class="stock is_minus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_minus has_arw taR">24.12</td>
                      <td class="stock is_minus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
                    <tr>
                      <td scope="row" class="taL">03/14</td>
                      <td class="taR">2,621.53</td>
                      <td class="stock is_plus has_arw taR">24.12</td>
                      <td class="stock is_plus taR">0.91%</td>
                    </tr>
						        </tbody>
					        </table>
				        </div>
                <div class="btn_area">
                  <button type="button" class="btn basic w_f h_m drop_sub_news_btn">
                    <span>더보기</span>
                  </button>
                </div>
			        </div>
              <div class="info_box_wrap">
                <p>(주)매경닷컴 매경증권센터의 모든 내용은 정보를 제공하기 위한 것이며, 투자권유 또는 주식거래를 목적으로 하지 않습니다. 본 사이트에 게재되는 정보는 오류 및 지연이 있을 수 있으며 그 이용에 따르는 책임은 이용자 본인에게 있습니다.</p>
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