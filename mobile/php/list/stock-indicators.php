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
    <h1 class="page_ttl">
      <div class="set_inner">
        경제지표
        <p class="float_el info_txt">
          <span class="">03/16 11:26</span>
          <span class="">고시회차 311회</span>
        </p>
      </div>
    </h1>
    <section class="contents stock_page stock_indicators">
      <div class="mk_body_news_group">
        <section class="news_sec">
	        <div class="set_inner">
		        <div class="sec_body">
			        <div class="tab_wrap col_x3">
				        <ul class="nav tab_nav tab_list coin_list" role="tablist">
					        <li class="nav_item tab_node" role="presentation">
						        <a href="#" id="exchangeRate" class="nav_link tab_item" role="tab" aria-controls="exchangeRate_cnt" aria-selected="true">
							        <strong class="name coin_tit">환율</strong>
						        </a>
					        </li>
					        <li class="nav_item tab_node" role="presentation">
						        <a href="#" id="materials" class="nav_link tab_item" role="tab" aria-controls="materials_cnt" aria-selected="false" tabindex="-1">
							        <strong class="name coin_tit">원자재</strong>
						        </a>
					        </li>
					        <li class="nav_item tab_node" role="presentation">
						        <a href="#" id="interestRate" class="nav_link tab_item" role="tab" aria-controls="interestRate_cnt" aria-selected="false" tabindex="-1">
							        <strong class="name coin_tit">금리</strong>
						        </a>
					        </li>
				        </ul>
			        </div>
              <div class="tbl_wrap stock_tbl tab_content">
                <div id="exchangeRate_cnt" class="tab_pane active" role="tabpanel" aria-labelledby="america">
                  <div class="tbl_area">
                    <table class="table" summary="달러, 유로, 엔, 위안의 환율을 보여줍니다.">
                      <caption class="is_blind">환율</caption>
                      <tbody>
                      <tr class="is_minus">
                        <td class="taL">1달러</td>
                        <td class="taR f_blk">1236.70<small>원</small></td>
                        <td class="stock is_plus has_arw">8.80</td>
                        <td class="stock is_plus">0.91%</td>
                      </tr>
                      <tr class="is_minus">
                        <td class="taL">1유로</td>
                        <td class="taR f_blk">1357.15<small>원</small></td>
                        <td class="stock is_minus has_arw">12.53</td>
                        <td class="stock is_minus">0.91%</td>
                      </tr>
                      <tr class="is_minus">
                        <td class="taL">100엔</td>
                        <td class="taR f_blk">1045.35<small>원</small></td>
                        <td class="stock is_minus has_arw">9.85</td>
                        <td class="stock is_minus">0.91%</td>
                      </tr>
                      <tr class="is_minus">
                        <td class="taL">위안</td>
                        <td class="taR f_blk">194.40<small>원</small></td>
                        <td class="stock is_minus has_arw">0.05</td>
                        <td class="stock is_minus">0.91%</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
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