<?php include_once '../_inc/_head.php'; ?>
	
	<!-- s: Header -->
	<header id="header">
		<?php include_once '../_inc/header/Stock.php'; ?>
		<?php include_once '../_inc/header/listen_head_01.php'; ?>
	
	</header>
	<!-- e: Header -->
<?php include_once '../_inc/header/_SummaryNewsUi.php'; ?>
	
	<div id="asd"></div>
	<!-- s: Container -->
	<main id="container">
		<section class="contents listening_page">
			<div class="set_inner">
				<section class="news_sec">
					<div class="sec_body">
						<div class="listening_news_wrap">
							<ul class="news_list listening_news_list">
								<li class="news_node type_bg"
								    style="background-image: url('../../assets/images/img_listening_01.png')">
									<a href="#" class="news_item">
										<p class="state">NEW</p>
										<div id="text1" class="txt_area">
											<h2 class="news_ttl">모닝뉴스</h2>
											<p class="news_desc">매일경제 아나운서가<br>
												들려주는 아침 뉴스 브리핑</p>
										</div>
									</a>
								</li>
								<li class="news_node type_bg"
								    style="background-image: url('../../assets/images/img_listening_02.png')">
									<a href="#" class="news_item">
										<p class="state">NEW</p>
										<div class="txt_area">
											<h2 class="news_ttl">영문뉴스 Pulse</h2>
											<p class="news_desc">매일경제<br>
												영문뉴스 Pulse 듣기</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</section>
			</div>
		</section>
	</main>
	<!-- e: Container -->

<?php include_once '../_inc/_footer_fix.php'; ?>
	<script src="../../assets/js/common.js"></script>
<?php include_once '../_inc/_foot.php'; ?>