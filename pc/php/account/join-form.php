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
					<form action="" class="account_form account_wrap join_wrap">
						<div class="input_area is_error">
							<label for="mail">이메일 <i class="require">필수</i></label>
							<div class="input_box">
								<input id="mail" type="text" placeholder="이메일을 입력해주세요.">
								<button type="button" class="btn btn_ic remove_val">
									<i class="ic ic_close_m"></i>
									<span class="is_blind">지우기</span>
								</button>
							</div>
							<p class="state_txt">이미 가입된 이메일 주소입니다.</p>
						</div>
						<div class="input_area">
							<label for="pw">비밀번호 <i class="require">필수</i></label>
							<span class="input_info">영문+숫자 조합 8-20자 이내 </span>
							<div class="input_box">
								<input type="password" id="pw" placeholder="비밀번호를 입력해주세요.">
								<button type="button" class="btn btn_ic remove_val">
									<i class="ic ic_close_m"></i>
									<span class="is_blind">지우기</span>
								</button>
							</div>
							<p class="state_txt">비밀번호는 영문+숫자 조합 8~20자 이내로 입력해 주세요.</p>
						</div>
						<div class="input_area">
							<label for="pw">비밀번호 재확인 <i class="require">필수</i></label>
							<div class="input_box">
								<input type="password" id="pwConfirm" placeholder="비밀번호를 다시 한번 입력하세요.">
								<button type="button" class="btn btn_ic remove_val">
									<i class="ic ic_close_m"></i>
									<span class="is_blind">지우기</span>
								</button>
							</div>
							<p class="state_txt">비밀번호가 일치하지 않습니다.</p>
						</div>
						<div class="input_group age_group">
							<div class="input_area radio type_hor">
								<div class="input_box">
									<input id="over14" type="radio" name="age" value="Y">
									<label for="over14">만 14세 이상입니다.</label>
								</div>
								<div class="input_box">
									<input id="nuder14" type="radio" name="age" value="N">
									<label for="nuder14">만 14세 미만입니다.</label>
								</div>
							</div>
							<div class="btn_area">
								<button class="btn basic w_f h_m type_round"><span>법정대리인 본인 확인</span></button>
								<button class="btn basic w_f h_m type_round is_success"><i
											class="ic checked"></i><span>법정대리인 인증 완료</span>
								</button>
							</div>
						</div>
						<div class="input_group agree_group">
							<div class="input_area check is_all">
								<div class="input_box">
									<label for="allAgree">
										<input id="allAgree" type="checkbox" name="allAgree" value="Y">
										<span><b>전체 약관 동의</b></span>
									</label>
								</div>
								<hr class="line">
								<div class="input_box">
									<label for="useAgree">
										<input id="useAgree" type="checkbox" name="agree" value="use">
										<span>[필수] 이용약관 동의</span>
									</label>
									<button type="button" class="btn btn_txt has_underL" id="openTerms" onclick="showlayer(this, '#termsModal', true)">보기</button>
								</div>
								<div class="input_box">
									<label for="privacyAgree">
										<input id="privacyAgree" type="checkbox" name="agree" value="privacy">
										<span>[필수] 개인정보 수집 및 이용 동의</span>
									</label>
									<button type="button" class="btn btn_txt has_underL" id="openPrivacy" onclick="showlayer(this, '#privacyModal', true)">보기</button>
								</div>
								<div class="input_box">
									<label for="marketingAgree">
										<input id="marketingAgree" type="checkbox" name="agree" value="marketing">
										<span>[선택] 광고성 메일 수신 동의</span>
									</label>
								</div>
							</div>
						</div>
						<div class="btn_area">
							<button class="btn w_f h_l strong">회원가입</button>
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

<?php include_once '../_inc/accounts/TermsModal.php'; ?>
<?php include_once '../_inc/accounts/PrivacyModal.php'; ?>

<?php include_once '../_inc/_footer_no_snb.php'; ?>
	<?php include_once '../_inc/_foot.php'; ?>