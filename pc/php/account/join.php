<?php include_once '../_inc/_head.php'; ?>

<!-- s: Header -->
<header id="header">
	<?php include_once '../_inc/header/Stock.php'; ?>
	<?php include_once '../_inc/header/_GNB.php'; ?>
	<?php include_once '../_inc/header/_SearchUi.php'; ?>
</header>
<div class="dim"></div>
<!-- e: Header -->



<!-- s: Container -->
	<main id="container">
		<section class="contents account_page join_page">
			<div class="min_inner">
				<article class="account_sec join_sec">
					<h1 class="page_ttl">회원 가입</h1>
					<div class="easy_login_wrap">
						<div class="ttl_area taC">
							<h2 class="ttl">SNS로 간편하게 회원가입</h2>
						</div>
						<ul class="easy_login_list">
							<li class="login_node">
								<a href="" class="btn btn_ic login_item">
									<i class="ic sns_l ic_naver"></i>
									<span class="is_blind">네이버아이디로 로그인</span>
								</a>
							</li>
							<li class="login_node">
								<a href="" class="btn btn_ic login_item">
									<i class="ic sns_l ic_kakao"></i>
									<span class="is_blind">카카오톡아이디로 로그인</span>
								</a>
							</li>
							<li class="login_node">
								<a href="" class="btn btn_ic login_item">
									<i class="ic sns_l ic_google"></i>
									<span class="is_blind">구글아이디로 로그인</span>
								</a>
							</li>
							<li class="login_node">
								<a href="" class="btn btn_ic login_item">
									<i class="ic sns_l ic_apple"></i>
									<span class="is_blind">애플아이디로 로그인</span>
								</a>
							</li>
							<li class="login_node">
								<a href="" class="btn btn_ic login_item">
									<i class="ic sns_l ic_facebook"></i>
									<span class="is_blind">페이스북아이디로 로그인</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="join_wrap">
						<div class="btn_area grid grid_4">
							<div class="col col_6"><a href="#" class="btn basic w_f h_l">구 MK 회원 이전</a></div>
							<div class="col col_6"><a href="#" class="btn strong w_f h_l">이메일 회원가입</a></div>
						</div>
					</div>
				</article>
			</div>
<!--			<div class="ad_wrap">-->
<!--				<a href="" class="ad_box">-->
<!--					<img src="../../assets/images/img_ad_banner01.png" alt="">-->
<!--				</a>-->
<!--			</div>-->
		</section>
	</main>
	<!-- e: Container -->

	<?php include_once '../_inc/_footer_no_snb.php'; ?>
	<script src="../../assets/js/common.js"></script>
	<?php include_once '../_inc/_foot.php'; ?>