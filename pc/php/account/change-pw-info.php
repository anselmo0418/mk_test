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
		<section class="contents account_page change_pw_page">
			<div class="min_inner">
				<article class="account_sec">
					<h1 class="page_ttl">비밀번호 변경 안내</h1>
					<form action="" class="account_wrap account_form">
						<p class="taC">회원님은 6개월 동안 비밀번호를 변경하지 않으셨습니다.</p>
						<p class="taC">매경닷컴은 회원님의 개인정보보호와 ID 도용을 막기 위해
							6개월 마다 비밀번호 변경을 권장하고 있습니다.</p>
						<div class="input_area is_error">
							<label for="nowPw">현재 비밀번호</label>
							<div class="input_box">
								<input id="nowPw" type="text"  placeholder="비밀번호를 입력하세요.">
							</div>
							<p class="state_txt">비밀번호는 영문+숫자 조합 8~20자 이내로 입력해 주세요.</p>
						</div>
						<div class="input_area is_error">
							<label for="newPw">새 비밀번호</label>
							<div class="input_box">
								<input id="newPw" type="text"  placeholder="새로운 비밀번호를 입력하세요.">
							</div>
							<p class="state_txt">비밀번호는 영문+숫자 조합 8~20자 이내로 입력해 주세요.</p>
						</div>
						<div class="input_area is_error">
							<label for="pwConfirm">새 비밀번호 확인</label>
							<div class="input_box">
								<input id="pwConfirm" type="text"  placeholder="비밀번호를 다시 한번 입력하세요.">
							</div>
							<p class="state_txt">비밀번호가 일치하지 않습니다.</p>
						</div>
						<div class="input_area check">
							<div class="input_box">
								<label>
									<input id="after_2w" type="checkbox">
									<span>2주간 보지 않기</span>
								</label>
							</div>
						</div>
						<div class="btn_area grid grid_4">
							<div class="col col_6"><a href="#" class="btn basic w_f h_l">다음에 변경하기</a></div>
							<div class="col col_6"><a href="#" class="btn strong w_f h_l">비밀번호 변경</a></div>
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


<?php include_once '../_inc/_footer_no_snb.php'; ?>
<?php include_once '../_inc/_foot.php'; ?>