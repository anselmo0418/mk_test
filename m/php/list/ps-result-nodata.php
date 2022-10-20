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
    <h1 class="page_ttl is_blind">기획/연재</h1>
    <section class="contents plan_series_page">
      <div class="mk_body_news_group">
        <div class="plan_sec">
          <div class="set_inner">
            <header class="sec_head type_underline">
              <h2 class="sec_ttl">기획</h2>
	            <form action="" class="input_area search type_round">
		            <div class="input_box">
			            <input type="search" placeholder="기획명을 입력해주세요.">
			            <button class="btn btn_ic search_btn"><i class="ic ic_search">검색</i></button>
		            </div>
	            </form>
            </header>
            <div class="sec_body">
	            <div class="result_wrap">
		            <div class="result_body">
			            <div class="guide_ui nodata taC">
										<p><span class="c_point">‘가나다’</span>에 대한 검색결과가 없습니다. <br>다른 검색어를 입력하거나 철자와 띄어쓰기를 확인해보세요.</p>
									</div>
		            </div>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- e: Container -->


  <?php include_once '../_inc/_footer_fix.php'; ?>
  <?php include_once '../_inc/_footer.php'; ?>
  <script src="../../assets/js/common.js"></script>
  <?php include_once '../_inc/_foot.php'; ?>