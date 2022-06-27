<?php include_once '../_inc/_head.php'; ?>

<!-- s: Header -->
	<header id="header">
	<?php include_once '../_inc/header/Stock.php'; ?>
	<?php include_once '../_inc/header/find_pw_head.php'; ?>
</header>
<!-- e: Header -->
	
	<!-- s: Container -->
	<main id="container">
		<section class="contents account_page find_pw_page is_fix">
			<div class="set_inner">
				<article class="account_sec">
					<form action="" class="account_wrap account_form">
						<div class="txt_wrap">
							<p class="taC">이메일 아이디를 사용중인 경우<br>
							비밀번호를 재설정 할 수 있는 링크가 이메일로 발송됩니다.</p>
						</div>
						<div class="input_area is_error">
							<div class="input_box">
								<input id="mail" type="text" title="이메일 주소" placeholder="이메일 주소를 입력하세요.">
							</div>
						</div>
						<div class="btn_area">
							<a href="#" class="btn strong w_f h_xl">인증 메일 발송</a>
						</div>
					</form>
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

	<?php include_once '../_inc/_footer_fix.php'; ?>
	<script src="../../assets/js/common.js"></script>
	<?php include_once '../_inc/_foot.php'; ?>