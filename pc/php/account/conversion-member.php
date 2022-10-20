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
		<section class="contents account_page login_page">
			<div class="min_inner">
				<article class="account_sec login_sec">
					<h1 class="page_ttl">회원 전환 안내</h1>
					<div class="account_wrap">
						<dl class="tbl_list">
							<dt><span>로그인</span></dt>
							<dd><b>realsmile</b></dd>
						</dl>
						<p class="taC">기존 아이디는 이메일 주소로 변경해야 합니다. <br>
							아래의 방법을 선택하여 변경해 주세요.</p>
						<div class="btn_area">
							<button class="btn w_f strong h_l">이메일 주소로 아이디 변경</button>
							<a href="" class="btn btn_txt btn_line">또는 간편회원으로 가입</a>
						</div>
					</div>
					<div class="easy_login_wrap">
						<div class="ttl_area">
							<h2 class="ttl">간편로그인</h2>
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
				</article>
			</div>
			<div class="ad_wrap">
				<a href="" class="ad_box">
					<img src="../../assets/images/img_ad_banner01.png" alt="">
				</a>
			</div>
		</section>
	</main>
	<!-- e: Container -->


	<?php include_once '../_inc/_footer_no_snb.php'; ?>
	<script src="../../assets/js/common.js"></script>
	<?php include_once '../_inc/_foot.php'; ?>