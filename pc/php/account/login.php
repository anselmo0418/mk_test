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
					<h1 class="page_ttl">로그인</h1>
					<form action="" class="account_form account_wrap login_wrap">
						<div class="input_area">
							<div class="input_box">
								<input type="text" title="아이디" placeholder="아이디 또는 이메일">
							</div>
						</div>
						<div class="input_area">
							<div class="input_box">
								<input type="password" title="비밀번호" placeholder="비밀번호">
							</div>
							<p class="state_txt">이미 가입된 이메일 주소입니다.</p>
						</div>
						<div class="input_area check">
							<div class="input_box">
								<input id="keepLogin" type="checkbox">
								<label for="keepLogin">로그인 상태 유지</label>
							</div>
						</div>
						<div class="btn_area">
							<button class="btn w_f h_l strong">로그인</button>
							<div class="btn_txt_group">
								<a href="" class="btn btn_txt">이메일 찾기</a>
								<a href="" class="btn btn_txt">비밀번호 찾기</a>
								<a href="" class="btn btn_txt">회원가입</a>
							</div>

						</div>
					</form>
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
				<asid class="join_sec">
					<div class="join_wrap">
						<div class="btn_area">
							<a href="" class="btn btn_txt">구 MK회원 아이디/비밀번호 찾기</a>
						</div>
					</div>
				</asid>
			</div>
		</section>
	</main>
	<!-- e: Container -->

	<?php include_once '../_inc/_footer_no_snb.php'; ?>
	<script src="../../assets/js/common.js"></script>
	<?php include_once '../_inc/_foot.php'; ?>